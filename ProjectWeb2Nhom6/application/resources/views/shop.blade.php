@extends('master')

@section('content')


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-color: black;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    @if (Request::url() == (url().'/shop'))
                        <h2>TẤT CẢ SẢN PHẨM</h2>
                    @else
                        <h2> SẢN PHẨM </h2>
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
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">TECHNOLOGY</p>
                        <div class="widget-desc">
                            <ul>
                               <li><a href="#">Photograp</a></li>
                                <li><a href="{{ url('shop/Smartphone') }}">Smartphone</a></li>
                                <li><a href="{{ url('shop/Laptop') }}">Laptop</a></li>
                                <li><a href="{{ url('shop/Tablet') }}">Tablet</a></li>
                                <li><a href="{{ url('shop/Other') }}">Phụ kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                         
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
                                    <p> Có <span>{{$prod->total()}}</span> sản phẩm</p>

                                </div>
                                <!-- Sorting -->
                               
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
                                    <img src="{{ asset("img/imgs/$item->img") }}" height="300px"; width:"350px"; >
                                    <!-- Hover Thumb -->
                                    <!-- <img class="hover-img" src="img/product-img/product-2.jpg" alt=""> -->

                                    <!-- Product Badge -->
                                        <!-- <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div> -->

                                        <!-- Favourite -->
                                        
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>{{$item->brand}}</span>
                                        <a href="{{ url("single-product-details/$item->id") }}">
                                            <h6>{{$item->name}}</h6>
                                        </a>
                                        <p class="product-price">{{str_replace(',', '.', number_format($item->price))}} &#8363;</p>

                                        
                                       
                                    </div>
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
<!-- ##### Shop Grid Area End ##### -->
@endsection