@extends('masteradmin')

@section('content')


<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="{{ URL::action('ShopController@update') }}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<h2 class="text-center">Sửa sản phẩm</h2>
			<hr>
			<div class="row">
				<input type="hidden" name="id" value="{{ old('id', $getProductById['id'])}}">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
                        <input value="{{ old('name', $getProductById['name'])}}" type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Tên Sản Phẩm" tabindex="1">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<div class="controls">
                            <select name="brand"">
                                <option value="Smartphone" <?php if($getProductById['brand'] == 'Smartphone') echo "selected='selected'" ?>>Smartphone</option>
                                <option value="Laptop" <?php if($getProductById['brand'] == 'Laptop') echo "selected='selected'" ?>>Laptop</option>
                                <option value="Tablet" <?php if($getProductById['brand'] == 'Tablet') echo "selected='selected'" ?>>Tablet</option>
                                <option value="Other" <?php if($getProductById['brand'] == 'Other') echo "selected='selected'" ?>>Phụ kiện</option>
                            </select> *
                        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input value="{{ old('price', $getProductById['price'])}}" type="text" name="price" id="price" class="form-control input-lg"  tabindex="3">
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group" >
						<input value="{{ old('detail', $getProductById['detail'])}}" type="text" name="detail" id="detail" class="form-control input-lg" tabindex="7" style="padding-bottom: 100px;">
					</div>
				</div>
				
			</div>
	
			<div class="row text-center">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<?php 
						  $brand = old('brand', $getProductById['brand']);
						  $img =  old('img', $getProductById['img']);
					?>					
					<div class="form-group">
						<img id="imgChange" name="imgChange" style="margin-left:10px; margin-top:10px; width: 300px; height: 250;" src="{{asset('img/imgs/'.$img)}}" height="250px" class="form-control" style="padding-bottom: 30px;">
						<input type="file" name="img" class="form-control" tabindex="5"  onchange="document.getElementById('imgChange').src = window.URL.createObjectURL(this.files[0])">
					</div>
					
				
				</div>			
				
			</div>
			
			<hr >
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-xs-12 col-md-6">
					<input type="submit" value="Cập nhật" class="btn btn-primary btn-block btn-lg" tabindex="7" style="background-color: black;">
				</div>
				<div class="col-xs-12 col-md-6">
					<input type="button" value="Quay lại" class="btn btn-primary btn-block btn-lg" tabindex="7" style="background-color: black;">
				</div>
			</div>
		</form>
	</div>
</div>
</div>

<!-- <script>
		$('#fileImg').change(function(event) {		
			noidung = '<img style="margin-left:-50px; margin-top:-75px;" src="http://localhost:82/larapack/public/img/Apple/iphone6s.png" height="250px">';
			$('#img-preview').append(noidung);
		});	
		
	</script> -->


@endsection