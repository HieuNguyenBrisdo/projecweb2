<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
	public function getlogin()
    {
    	return view('auth/login');
    }
     public function postLogin(Request $request) {
	    $rules = [
    		'email' =>'required|email',
    		'password' => 'required'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		$email = $request->input('email');
    		$password = $request->input('password');

    		if( Auth::attempt(['email' => $email, 'password' =>$password])) {
    			return redirect()->intended('/admin');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
	}
}