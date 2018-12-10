<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ShopController extends Controller
{
	public function getAllProduct()
	{		
		$data = Product::paginate(6);
		return View('shop', ['prod'=>$data]);
	}

	public function searchProduct()
	{
		$input = Input::get('query'); // get value of search input
		$columns = ['brand', 'name', 'price']; // array conlumns's name

		$query = Product::query();
		
		foreach ($columns as $column) {
					$query->orWhere($column, 'LIKE', '%' .$input. '%');
				}		
		
		$data = $query->paginate(6);
		return View('search', ['prod'=>$data]);
	}

	public function orderByBrand($brand)
	{
		$data = Product::where('brand', '=', $brand);
		$data = $data->paginate(6);
		return View('shop', ['prod'=>$data, 'brand'=>$brand]);
	}

	public function singleProduct($id)
	{
		$data = Product::where('id', '=', $id)->first();

		return View('single-product-details', ['prod'=>$data]);
	}

	public function Admin()
	{		
		$data = Product::paginate(9);
		return View('admin', ['prod'=>$data]);
	}

	public function orderByBrandForAdmin($brand)
	{
		$data = Product::where('brand', '=', $brand);
		$data = $data->paginate(6);
		return View('admin', ['prod'=>$data, 'brand'=>$brand]);
	}

	public function addnewproduct(){
		return View('addnewpr');
	}

	public function addnew(Request $request){
		$allRequest = $request->all();
		$name 	= $allRequest['name'];	
		$price 	= $allRequest['price'];
		$brand 	= $allRequest['brand'];
		$detail 	= $allRequest['detail'];
		$date = date('Y-m-d H:i:s');
		

		$file_name = $request->file('file')->getClientOriginalName();
		$request->file('file')->move('img/imgs',$file_name);	

		$dataInsertToDatabase = array(
			'brand' => $brand,
			'name'=> $name,
			'price'=> $price,
			'img' => $file_name,
			'detail' => $detail,
			// 'img' => 'http://localhost:88/larapack/public/img/Apple/iphone5.png',
			'date' => $date
		);

		$objProduct = new Product();
		$objProduct->insert($dataInsertToDatabase);
		return View('insertsuccess');
	}

	public function getLogout() {
   		Auth::logout();
   		return redirect(\URL::previous());
	}

	public function deleteProduct($id)
	{
		Product::find($id)->delete();
		// return redirect()->action('ShopController@deletesuccess');
		return View('deletesuccess');
	}

	public function edit($id)
    {
        $objProduct = new Product();
        $getProductById = $objProduct->find($id)->toArray();
        return view('editpr')->with('getProductById', $getProductById);
    }

    public function update(Request $request)
    {
        $allRequest = $request->all();
        $id = $allRequest['id'];
        $brand 	= $allRequest['brand'];
		$name 	= $allRequest['name'];	
		$detail 	= $allRequest['detail'];
		$price 	= $allRequest['price'];
		//$img = $allRequest['imgChange'];

		if ($request->file('img')) {
			$img = $request->file('img')->getClientOriginalName();
			$request->file('img')->move('img/imgs',$img);
		}
		else
		{
			$img = null;
		}

		//$detail = $allRequest['detail'];
        $objProduct = new Product();
        $getProductById = $objProduct->find($id);
        $getProductById->brand = $brand;
        $getProductById->detail = $detail;
        $getProductById->name = $name;
        //$getProductById->details = $detail;        
        $getProductById->price = $price; 
        $getProductById->save();
        if ($img != null) {
        	$getProductById->img = $img;
        }
        
        $getProductById->save();

        return View('editsuccess');
    }

    
}