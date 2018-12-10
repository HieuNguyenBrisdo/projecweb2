@extends('masteradmin')

@section('content')

<style type="text/css">
	.colorgraph {
	  height: 5px;
	  border-top: 0;
	  background: black;
	  border-radius: 5px;
	  
}
</style>

<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="{{ URL::action('ShopController@addnewpr') }}" method="post" enctype="multipart/form-data" style="padding-bottom: 100px; margin-left: 50px;">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<h2 class="text-center" style = "margin-top: 100px; ">Thêm mới sản phẩm</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Tên Sản Phẩm" tabindex="1">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<div class="controls">
                            <select name="brand">
                                <option value="Laptop">Laptop</option>
                                <option value="Smartphone">Smartphone</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Other">Phụ kiện</option>
                                
                            </select> *
                        </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="file" name="file" id="file" class="form-control" tabindex="5">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="price" id="price" class="form-control input-lg" placeholder="Giá Sản Phẩm" tabindex="3">
					</div>
				</div>
			</div>
			<div class="form-group">
				<textarea name="detail" id="detail" class="form-control input-lg" placeholder="Thông tin chi tiết...." tabindex="6"></textarea>
				
			</div>	
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<input type="submit" value="Thêm Mới" class="btn btn-primary btn-block btn-lg" tabindex="7" style="background-color: black; margin-left: 250px;">
				</div>			
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>

@endsection