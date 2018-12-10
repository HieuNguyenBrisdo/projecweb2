@extends('master')

@section('content')


    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center" style="margin-bottom: 100px; margin-left: 50px; margin-top: 100px;">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img style = "height: 400px; width:400px; margin-top: 100px;" src="{{ asset("img/imgs/$prod->img") }}" alt="">
                <img style = "height: 400px; width:400px; margin-top: 100px;" src="{{ asset("img/imgs/$prod->img") }}" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span> <b style="color: black">Loại sản phẩm:</b> {{$prod->brand}}</span>
            <a href="">
                <h2>{{$prod->name}}</h2>
            </a>
            <p class="product-price"><b>Giá:</b> {{str_replace(',', '.', number_format($prod->price))}} &#8363;</p>
            <p class="product-desc"> <b>Thông tin chi tiết: </b>{{$prod->detail}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn" style="background-color: black; color: white;">Add to cart</button>
                    <!-- Favourite -->
                    
                </div>
            </form>
        </div>

    </section>
    <!-- ##### Single Product Details Area End ##### -->

@endsection