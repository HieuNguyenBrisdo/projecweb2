@extends('masteradmin')
@section('content')


<div class="breadcumb_area bg-img" >
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">                    
                        <h2>SỬA SẢN PHẨM THÀNH CÔNG</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12" style="margin-left: 300px; margin-bottom: 20px;">                             
               <div class="row">
                <div class="col-xs-12 col-md-6">
                    <a href="{{ url("admin") }}">
                        <input type="submit" value="Quay lại" class="btn btn-primary btn-block btn-lg" tabindex="7" style="background-color: black;">
                    </a>
                </div>

                <div class="col-xs-12 col-md-6">
                    <a href="{{ url("addnewpr") }}">
                        <input type="button" value="Thêm sản phẩm" class="btn btn-primary btn-block btn-lg" tabindex="7" style="background-color: black;">
                    </a>
                </div>
            </div>
            </div>                        
        </div>

    </div>
</div>

@endsection