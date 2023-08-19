@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
        
        <!-- header end -->  
        
        <!-- slider-area -->
        <div class="slider-active owl-carousel">
            <div class="food-slider bg-img slider-height-5" style="background-image: url({{URL::to('/')}}/public/frontend/custom/img/Web-Banners-1.jpg)">
                <div class="container">
                    <div class="food-slider-content text-center fadeinup-animated-1">
                        <form action="/action_page.php" class="container1">
                            <h3></b>Add your trip details to start earning money</b></h3>

                            <!-- <label for="email"><b>Email</b></label> -->
                            <input type="text" placeholder="From" name="" required>

                            <!-- <label for="psw"><b>Password</b></label> -->
                            <input type="text" placeholder="To" name="" required>

                            <!-- <label for="psw"><b>Password</b></label> -->
                            <input type="date" placeholder="Travel Date" date="" required>

                            <button type="submit" class="btn1">Add Trip</button>
                        </form>
                        <!-- <img class="animated" src="assets/img/slider/6.png" alt="">
                        <p class="animated">Earn $200+ USD every time you travel abroad</p>
                        <a class="food-slider-btn food-slider-btn-2 animated" href="#">How Buyforme works</a> -->
                    </div>
                </div>
            </div>
            <!-- <div class="food-slider bg-img slider-height-5" style="background-image: url(public/frontend/custom/img/Web-Banners-2-1.jpg)">
                    <div class="container">
                        <div class="food-slider-content text-center fadeinup-animated-1">
                            <img class="animated" src="assets/img/slider/6.png" alt="">
                            <p class="animated"></p>
                            <a class="food-slider-btn-1 animated" href="#"></a>
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
        <!-- end traveler area  -->

        <!-- Popular Destinations -->
        <div class="blog-area pt-120 pb-80">
            <div class="container">
                <div class="section-title-3 text-center mb-50">
                    <h2>Popular Destinations</h2>
                </div>
                <div class="row">
                    @foreach($popurlDe as $row)
                        <div class="col-md-3">
                            <div class="blog-wrapper mb-40">
                            <p>{{$row->country_name}}</p>
                            <p>{{$row->total_order}} orders</p>
                                <div class="blog-img blog-hover mb-15">
                                    <a href="#"><img src="{{URL::to('/')}}/public/upload/country_flag/{{$row->flag}}" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h4><a href="{{route('make_offer_html',['id'=>$row->counrty_id])}}">Add trip</a></h4>
                                    <span>${{$row->product_price}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end Popular Destinations -->
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
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="menu1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu-product-wrapper">
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
                                            <div class="single-menu-product mb-30 col-5">
                                                <div class="menu-product-img">
                                                    <img src="https://b4m.veravalonline.com/b4m/public/upload/product_img/{{$i}}" alt="" class="product_section_img" width="100px" height="100px">
                                                </div>
                                                <div class="menu-product-content">
                                                    <h4><a href="product-details.html">{{$row->product_name}}</a></h4>
                                                    <div class="menu-product-price-rating">
                                                        <div class="menu-product-price">
                                                            <span class="menu-product-old">${{$row->product_price}} </span>
                                                            <span class="menu-product-new">${{$row->product_price}}</span>
                                                        </div>
                                                        <div class="menu-product-rating">
                                                            <i class="pe-7s-star"></i>
                                                            <i class="pe-7s-star"></i>
                                                            <i class="pe-7s-star"></i>
                                                            <i class="pe-7s-star"></i>
                                                            <i class="pe-7s-star"></i>
                                                        </div>
                                                    </div>
                                                    <!-- <p>Categories: Subway, Masala, Indian</p> -->
                                                </div>
                                            </div>
                                        @endforeach
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
    @include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
    </body>
</html>
