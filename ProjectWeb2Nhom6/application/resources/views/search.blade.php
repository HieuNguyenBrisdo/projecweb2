@extends('master')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>SẢN PHẨM</h2>
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
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->
                                
                                <!-- Single Item -->

                                <!-- Single Item -->
                                
                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                   

                    <!-- ##### Single Widget ##### -->
                  
                    <!-- ##### Single Widget ##### -->
                  
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p><span>{{$prod->total()}}</span> sản phẩm được tìm thấy</p>
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
                                    <img src="{{ asset("img/imgs/$item->img") }}" height="250px">
                                    <!-- Hover Thumb -->
                                    <!-- <img class="hover-img" src="img/product-img/product-2.jpg" alt=""> -->

                                    <!-- Product Badge -->
                                        <!-- <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div> -->

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details/{{$item->id}}">
                                            <h6>{{$item->name}}</h6>
                                        </a>
                                        <p class="product-price">{{str_replace(',', '.', number_format($item->price))}} &#8363;</p>

                                        <!-- Hover Content -->
                                      
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            

                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="...">
                        {!! str_replace("/?", "?", $prod->appends(['query'=>Request::get('query')])->render()) !!}
                    </nav>
          </div>
      </div>
  </div>
</section>
<!-- ##### Shop Grid Area End ##### -->
@endsection