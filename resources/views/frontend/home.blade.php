@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
        <!-- header end -->
		<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(public/frontend/assets/img/bg/breadcrumb.jpg)">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Home Page</h2>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!-- popular product area start -->
         <div class="popular-product-area wrapper-padding-6 pt-115 pb-70 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
            <div class="container-fluid">
                <div class="section-title-10 text-center mb-85">
                    <h2>Most Popular for this month</h2>
                    <p>Buy4me shoppers and travelers who help each other access the world.</p>
                </div>
                <div class="popular-product-wrapper">
                    <div class="single-popular-product food-border-1 text-center mb-40">
                        <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/product/food/1.png" alt=""></a>
                        <h3><a href="product-details.html">Text one</a></h3>
                        <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        <!-- <div class="popular-product">
                            <span class="pizza-old-price">$23.99</span>
                            <span class="pizza-new-price">$20.00</span>
                        </div> -->
                    </div>
                    <div class="single-popular-product food-border-2 text-center mb-40">
                        <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/product/food/2.png" alt=""></a>
                        <h3><a href="product-details.html">Text two</a></h3>
                        <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        <!-- <div class="popular-product">
                            <span class="pizza-old-price">$23.99</span>
                            <span class="pizza-new-price">$20.00</span> -->
                        </div>
                    </div>
                    <div class="single-popular-product text-center mb-40">
                        <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/product/food/3.png" alt=""></a>
                        <h3><a href="product-details.html"> Text Three</a></h3>
                        <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        <!-- <div class="popular-product">
                            <span class="pizza-old-price">$23.99</span>
                            <span class="pizza-new-price">$20.00</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="food-services-area bg-img pt-200 pb-155" style="background-image: url({{URL::to('/')}}/public/frontend/assets/img/bg/12.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-services text-center food-services-padding1 mb-40">
                            <img src="{{URL::to('/')}}/public/frontend/assets/img/banner/7.png" alt="">
                            <h4>Sample title</h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 relative">
                        <div class="single-food-services text-center food-services-padding2 mb-40">
                            <img src="{{URL::to('/')}}/public/frontend/assets/img/banner/8.png" alt="">
                            <h4>Sample title</h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-food-services text-center food-services-padding3 mb-40">
                            <img src="{{URL::to('/')}}/public/frontend/assets/img/banner/9.png" alt="">
                            <h4>Sample title</h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services area end -->
        <!-- menu area start -->
        <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab">
                            <h4>All  </h4>
                        </a>
                        <a href="#menu2" data-bs-toggle="tab" role="tab">
                            <h4>US  </h4>
                        </a>
                        <a href="#menu3" data-bs-toggle="tab" role="tab">
                            <h4>India </h4>
                        </a>
                        <a href="#menu4" data-bs-toggle="tab" role="tab">
                            <h4> New York</h4>
                        </a>
                        <a href="#menu5" data-bs-toggle="tab" role="tab">
                            <h4> United Kingdon </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="menu1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>buy4me travel description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/2.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/4.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/5.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
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
                                                <img src="public/frontend/assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/2.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/4.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/5.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
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
                                                <img src="public/frontend/assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/2.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/4.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/5.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
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
                                                <img src="public/frontend/assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/2.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/4.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/5.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="product-details.html">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/6.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
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
                                                <img src="public/frontend/assets/img/product/food/1.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Sample text</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/2.jpg" alt="">
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/3.jpg" alt="">
                                            </div>
                                            <div class="menu-product-content">
                                                <h4><a href="#">Crispy Fiery Pepper Crispers.</a></h4>
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-product-wrapper">
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/4.jpg" alt="">
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="public/frontend/assets/img/product/food/5.jpg" alt="">
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                        <div class="single-menu-product mb-30">
                                            <div class="menu-product-img">
                                                <img src="{{URL::to('/')}}/public/frontend/assets/img/product/food/6.jpg" alt="">
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
                                                <p>Buy4me sample description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu area end -->
        
          <!--section 3: Why Buy4Me-->
        
        <div class="container my-5 py-5">
          <div class="row mb-5">
            <h2 class="why-title text-center py-3">Why Buy4Me</h2>
          </div>
          <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="container why-me-box">
                  <div class="why-me-img-container">
                      <img src="public/frontend/assets/img/home-why-me/save-money.png" class="img-fluid " alt="save-money">
                  </div>
                <h4>Save Money</h4>
                <p>Description 1</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="container">
                <img src="path/to/image2.jpg" class="img-fluid" alt="Image 2">
                <h4>Title 2</h4>
                <p>Description 2</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="container">
                <img src="path/to/image3.jpg" class="img-fluid" alt="Image 3">
                <h4>Title 3</h4>
                <p>Description 3</p>
              </div>
            </div>
          </div>
        </div>
    </div>
		
		<!--Why buy4me ends -->
        
        
        
        
	    @include('frontend.includes.footer');
		<!-- modal -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="public/frontend/assets/img/cart/4.jpg" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Buy4me shoppers and travelers who help each other access the world. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
      
		
		
		
		<!-- all js here -->
     @include('frontend.includes.footer_script');
    </body>
</html>
