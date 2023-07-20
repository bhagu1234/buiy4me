@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
        <!-- header end -->
		<div class="breadcrumb-area pt-205 home-banner" style="background-image: url(public/frontend/assets/img/buy4mebanner-01.jpg)">
            <div class="container">
                <div class="breadcrumb-content text-center">
                  
                </div>
            </div>
        </div>
         <!-- popular product area start -->
         <div class="popular-product-area wrapper-padding-6 pt-115 pb-70 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
            <div class="container-fluid">
            @include('admin.includes.validation')
                <div class="section-title-10 text-center mb-85">
                    <h2>Most Popular for this month</h2>
                    <p>Buy4me shoppers and travelers who help each other access the world.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-popular-product food-border-1 text-center mb-40">
                            <a href="#"><img src="https://m.media-amazon.com/images/I/811TQ+xwtEL._UY695_.jpg" alt=""></a>
                            <h4><a href="product-details.html">Bourge Mens Vega-m1</a></h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                            <!-- <div class="popular-product">
                                <span class="pizza-old-price">$23.99</span>
                                <span class="pizza-new-price">$20.00</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-popular-product food-border-2 text-center mb-40">
                            <a href="#"><img src="https://m.media-amazon.com/images/I/51z5MCQIatL._UY695_.jpg" alt=""></a>
                            <h4><a href="product-details.html">Nelle Harper Women's Handbag</a></h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                            <!-- <div class="popular-product">
                                <span class="pizza-old-price">$23.99</span>
                                <span class="pizza-new-price">$20.00</span> -->
                            </div>
                        </div>
                    
                    <div class="col-md-4">
                        <div class="single-popular-product text-center mb-40">
                            <a href="#"><img src="https://m.media-amazon.com/images/I/61XXo9RlSzL._UY695_.jpg" alt=""></a>
                            <h4><a href="product-details.html"> Nelle Harper Women's</a></h4>
                            <p>Buy4me shoppers and travelers who help each other access the world.</p>
                            <!-- <div class="popular-product">
                                <span class="pizza-old-price">$23.99</span>
                                <span class="pizza-new-price">$20.00</span>
                            </div> -->
                        </div>
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
        
    @include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
    </body>
</html>
