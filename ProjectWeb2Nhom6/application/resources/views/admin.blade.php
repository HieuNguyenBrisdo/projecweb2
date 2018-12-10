@extends('masteradmin')

@section('content') 

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-color: grey;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    @if (Request::url() == (url().'/admin'))
                        <h2>Xin chào ADMIN</h2>
                    @else
                        <h2>{{$brand}}</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-2">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Brands</p>
                        <div class="widget-desc">
                            <ul>
                                
                                <li>
                                    <a href="{{ url("addnewpr") }}">Thêm sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{url('/auth/logout')}}">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p> Có <span>{{$prod->total()}}</span> Sản phẩm</p>

                                </div>                               
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        @foreach($prod as $item)
                        <!-- Single Product -->
                        <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset("img/imgs/$item->img") }}" height="250px; width: 300px;">
                                
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description text-center">
                                        <span>{{$item->brand}}</span>
                                        <a href="{{ url("single-product-details/$item->id") }}">
                                            <h6>{{$item->name}}</h6>
                                        </a>
                                        <p class="product-price">{{str_replace(',', '.', number_format($item->price))}} &#8363;</p>                                       
                                    </div>

                                    <p class="card-text edit text-center">
                                        <small><a href="{{ url("admin/$item->id/editpr") }}" class="btn btn-warning" style = "background-color: green; color: white;">Edit <i class="fa fa-pencil" ></i></a></small>
                                        <small><a onclick="return confirmAction()" href="{{ url("admin/$item->id/deletepr") }}" class="btn btn-danger" style = "background-color: red;">Delete <i class="fa fa-remove"></i></a></small>
                                    </p>
                                </div>
                            </div>
                            @endforeach                            

                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        {!! str_replace("/?", "?", $prod->render()) !!}
                    </nav>
          </div>
      </div>
  </div>
</section> 


@endsection