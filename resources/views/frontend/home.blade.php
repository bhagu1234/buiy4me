@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
        
        <!-- header end -->  
        
        <!-- slider-area -->
        <div class="slider-area">
            <div class="slider-active owl-carousel">
                <div class="food-slider bg-img slider-height-5" style="background-image: url(public/frontend/custom/img/Web-Banners-2.jpg)">
                    <div class="container">
                        <div class="food-slider-content text-center fadeinup-animated-1">
                            <img class="animated" src="assets/img/slider/6.png" alt="">
                            <p class="animated"></p>
                            <a class="food-slider-btn-1 animated" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="food-slider bg-img slider-height-5" style="background-image: url(public/frontend/custom/img/Web-Banners-3.jpg)">
                    <div class="container">
                        <div class="food-slider-content text-center fadeinup-animated-1">
                            <img class="animated" src="assets/img/slider/6.png" alt="">
                            <p class="animated"></p>
                            <a class="food-slider-btn-1 animated" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="food-slider bg-img slider-height-5" style="background-image: url(public/frontend/custom/img/Web-Banners-3.jpg)">
                    <div class="container">
                        <div class="food-slidercontent text-center fadeinup-animated">
                            <img class="animated" src="assets/img/slider/6.png" alt="">
                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="food-slider bg-img slider-height-5" style="background-image: url(public/frontend/custom/img/Web-Banners-4.jpg)">
                    <div class="container">
                        <div class="food-slider-content text-center fadeinup-animated">
                            <img class="animated" src="assets/img/slider/6.png" alt="">
                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
         <!-- slider-area end  -->
         <!-- popular product area start -->
         <div class="popular-product-area wrapper-padding-6 pt-115 pb-70 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
            <div class="container-fluid">
            @include('admin.includes.validation')
                <div class="section-title-10 text-center mb-85">
                    <h2>Popular Traveller </h2>
                    <p>Buy4me shoppers and travelers who help each other access the world.</p>
                </div>
                <div class="row">
                    @foreach($lestesTrip as $row)
                        <div class="col-md-3">
                            <div class="single-popular-product food-border-1 text-center mb-40">
                                <a href="#"> 
                                    @if($row->profile !="")
                                        <img src="{{URL::to('/')}}/public/upload/profile_img/{{$row->profile}}" style="width:100px!important;">
                                    @else
                                        <img src="{{URL::to('/')}}/public/frontend/assets/img/profile/3135715.png" style="width:100px!important;" alt="" >
                                    @endif
                                </a>
                                <h4><a href="product-details.html">{{$row->first_name}}  {{$row->last_name}}</a></h4>
                                
                                <p><b> Location :-</b> {{$row->from_countryname}}- &nbsp;&nbsp;&nbsp; {{$row->toCountryName}} </p>
                                <!-- <div class="popular-product">
                                    <span class="pizza-old-price">$23.99</span>
                                    <span class="pizza-new-price">$20.00</span>
                                </div> -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="food-services-area bg-img pt-200 pb-155" style="background-image: url({{URL::to('/')}}/public/frontend/assets/img/bg/12.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-services text-center food-services-padding1 mb-40">
                            <img src="{{URL::to('/')}}/public/frontend/assets/img/banner-01.png" alt="">
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 relative">
                        <div class="single-food-services2 text-center food-services-padding2 mb-40">
                            <div class="logo-2">
                    <a href="{{URL::to('/')}}">
                        <input type="hidden" id="url" value="{{URL::to('/')}}">
                        <img src="{{URL::to('/')}}/public/frontend/assets/img/buy4me-03.png" width="150px" style="margin-left:115px; margin-top:60px;" alt="" >
                    </a>
                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-services text-center food-services-padding3 mb-40">
                            <img src="{{URL::to('/')}}/public/frontend/assets/img/banner-02.png" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services area end -->

        <!-- menu area start -->
        <div class="food-menu-area bg-img pt-110 pb-120" style="background-image: url(assets/img/bg/13.jpg)">
            <div class="container">
                <div class="section-title-10 text-center mb-60">
                    <h2>Trending products on Buy4me</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab">
                            <h4>All Food  </h4>
                        </a>
                        <a href="#menu2" data-bs-toggle="tab" role="tab">
                            <h4>Chicken  </h4>
                        </a>
                        <a href="#menu3" data-bs-toggle="tab" role="tab">
                            <h4>Beef </h4>
                        </a>
                        <a href="#menu4" data-bs-toggle="tab" role="tab">
                            <h4> Seafood</h4>
                        </a>
                        <a href="#menu5" data-bs-toggle="tab" role="tab">
                            <h4> Soup </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="menu1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Ultimate Bacon Burger.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Oldtimer with Cheese.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Mix & Match Fajita Trio.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Black Bean & Veggie Fajitas.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Crispy Fiery Pepper Crispers.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu2" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Oldtimer with Cheese.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Crispy Fiery Pepper Crispers.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Black Bean & Veggie Fajitas.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Southern Smokehouse Burger.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu3" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Oldtimer with Cheese.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Crispy Fiery Pepper Crispers.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Black Bean & Veggie Fajitas.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Southern Smokehouse Burger.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu4" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Oldtimer with Cheese.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Crispy Fiery Pepper Crispers.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Black Bean & Veggie Fajitas.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public\frontend\custom\img\Product\1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Southern Smokehouse Burger.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu5" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Oldtimer with Cheese.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/2.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Crispy Fiery Pepper Crispers.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/4.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Black Bean & Veggie Fajitas.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/5.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Southern Smokehouse Burger.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Lamb Salad with Fregola.</a></h4>
                                                <div class="menu-product-price-rating">
                                                    <div class="menu-product-price">
                                                        <span class="menu-product-old">$49.00 </span>
                                                        <span class="menu-product-new">$32.00</span>
                                                    </div>
                                                    <div class="menu-product-rating">
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                        <i class="pe-7s-star"></i>
                                                    </div>
                                                </div>
                                                <p>Categories: Subway, Masala, Indian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-btn-area text-center mt-40">
                        <a class="menu-btn btn-hover" href="menu-list.html">Buy Product</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu area end -->
        <!-- <div class="section-title text-center mb-60">
            <h2>Trending products on Buy4me</h2>
        </div>
        <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="custom-row-2">
                        @foreach($latestProduct as $row)
                            <?php
                                $img=$row->product_imgs;
                                $img=explode(' , ', $img);
                                foreach($img as $i)
                                {
                                    $i=$i;
                                }
                                $i=str_replace([']','[']," " ,$i);
                                $i=trim($i);
                            ?>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="#">
                                            <img src="https://b4m.veravalonline.com/b4m/public/upload/product_img/{{$i}}" alt="" style="height:200px !important;">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-bs-target="#exampleModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4 style="overflow: scroll; height:100px !important"><a href="#">{{$row->product_name}}</a></h4>
                                        <span>Price</span>
                                        <h5>${{$row->product_price}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> -->
        <!-- menu area end -->
    @include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
    </body>
</html>
