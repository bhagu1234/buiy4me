@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
        <!-- header end -->        
        <div class="slider-area">
            <div class="slider-active owl-carousel owl-loaded owl-drag">
                <div class="breadcrumb-area pt-205 home-banner" style="background-image: url(public/frontend/assets/img/buy4mebanner-03.png)">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-2654px, 0px, 0px); transition: all 0s ease 0s; width: 7962px;">
                            <div class="owl-item cloned" style="width: 1327px;">
                                <div class="container">
                                    <div class="breadcrumb-content text-center">
                                        <div class="owl-item active" style="width: 1327px;">
                                            <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
                                                <div class="container">
                                                    <div class="food-slider-content text-center fadeinup-animated">
                                                        <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                                        <a class="food-slider-btn animated" href="#">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned animated owl-animated-out fadeOut" style="width: 1327px; left: 1327px;">
                                            <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
                                                <div class="container">
                                                    <div class="food-slider-content text-center fadeinup-animated">
                                                        <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                                        <a class="food-slider-btn animated" href="#">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned animated owl-animated-out fadeOut" style="width: 1327px;">
                                <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/12.jpg)">
                                    <div class="container">
                                        <div class="food-slider-content text-center fadeinup-animated">
                                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1327px;">
                                <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
                                    <div class="container">
                                        <div class="food-slider-content text-center fadeinup-animated">
                                            <img class="animated" src="assets/img/slider/6.png" alt="">
                                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="owl-item cloned" style="width: 1327px;">
                                <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/12.jpg)">
                                    <div class="container">
                                        <div class="food-slider-content text-center fadeinup-animated">
                                            <img class="animated" src="assets/img/slider/6.png" alt="">
                                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1327px;">
                                <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
                                    <div class="container">
                                        <div class="food-slider-content text-center fadeinup-animated">
                                            <img class="animated" src="assets/img/slider/6.png" alt="">
                                            <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                                            <a class="food-slider-btn animated" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev">prev</div>
                        <div class="owl-next">next</div>
                    </div>
                    <div class="owl-dots">
                        <div class="owl-dot active">
                            <span></span>
                        </div>
                        <div class="owl-dot">
                            <span></span>
                        </div>
                    </div>
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
                            <a href="#"><img src="https://m.media-amazon.com/images/I/61XXo9RlSzL._UY695_.jpg" alt=""></a>
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
        <div class="section-title text-center mb-60">
            <h2>All Products</h2>
        </div>
        <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab" aria-selected="true" aria-controls="menu1">
                            <h4>All</h4>
                        </a>
                        <a class="" href="#menu2" data-bs-toggle="tab" role="tab"  aria-selected="false" tabindex="-1" aria-controls="menu2">
                            <h4>US</h4>
                        </a>
                        <a class="" href="#menu3" data-bs-toggle="tab" role="tab"  aria-selected="false" tabindex="-1" aria-controls="menu3">
                            <h4>India</h4>
                        </a>
                        <a class="" href="#menu4" data-bs-toggle="tab" role="tab"  aria-selected="false"  tabindex="-1" aria-controls="menu4">
                            <h4>New York</h4>
                        </a>
                        <a class="" href="#menu5" data-bs-toggle="tab" role="tab"  aria-selected="false" tabindex="-1" aria-controls="menu5">
                            <h4>United Kingdom</h4>
                        </a>
                    </div>
                    <div class="container-fluid">
                        <div class="top-product-style">
                            <div class="tab-content">
                                <div class="tab-pane active show fade" id="electro1" role="tabpanel">
                                    <div class="custom-row-2">
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$110.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$120.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Cannon D300R</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$170.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$150.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$145.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="electro2" role="tabpanel">
                                    <div class="custom-row-2">
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$110.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png"alt="">
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
                                                    <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$120.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Cannon D300R</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$170.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$150.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$145.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="electro3" role="tabpanel">
                                    <div class="custom-row-2">
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$110.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$133.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$120.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Cannon D300R</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$170.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png" alt="">
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
                                                    <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$150.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-style-2 custom-col-4">
                                            <div class="product-wrapper product-border mb-24">
                                                <div class="product-img-3">
                                                    <a href="product-details.html">
                                                        <img src="public/frontend/assets/img/product-01.png"alt="">
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
                                                    <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                                    <span>Headphone</span>
                                                    <h5>$145.00</h5>
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
        </div>    
        <!-- menu area end -->
    @include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
    </body>
</html>
