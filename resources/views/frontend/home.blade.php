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
        <div class="section-title text-center mb-60">
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
        </div>    
        <!-- menu area end -->
    @include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
    </body>
</html>
