
@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
        <center>
        <div class="header">
	        <h1><b>Shop products from USA and save up to 40%</b></h1>
	    </div> 
        <div class="form-control1">
            <input type="url" placeholder="Paste the URL of the Product"  class="from-group" name="product" id="fromduct_from_url"> 
        </div>
        <div class="button1">
            <!-- <button id="create_order">create Order</button> -->
            <button1><a href="{{route('user.product_details')}}">Create Order</a></button1>
        </div>
        <br>
       <!-- menu area start -->
       <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab">
                            <h3>Trending Product On Buy4me  </h3>
                           
                           <p>Get inspired by what people in your city are buying from abroad with the biggest savings</p>
                          
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
		<!-- all js here -->
     @include('frontend.includes.footer_script')
    </body>
</html>
