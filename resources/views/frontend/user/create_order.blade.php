
@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
      <!-- <div id="display"></div> -->
        <center>
        <div class="header">
	        <h1><b>Shop products from USA and save up to 40%</b></h1>
	    </div>   
         <form action="{{route('user.product_details')}}" method="get">
            @csrf
            <div class="form-control1">        
                <input type="url" placeholder="Paste the URL of the Product"  class="from-group" name="url" id="fromduct_from_url"> 
            </div>
            <div class="button1">
                <button type="submit">Create Order</button>
                  <!-- <button1 id="create_order">Create Order</button1> -->
                <!-- <button1><a href="{{route('user.product_details')}}">Create Order</a></button1> -->
            </div>
            <br>
        </form>
          
        <!-- Trending products area start -->
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
                                            <a href="{{route('user.order_details',['id'=>$row->id])}}">              
                                            <div class="single-menu-product mb-30 col-5">
                                                <div class="menu-product-img">
                                                    <img src="https://b4m.veravalonline.com/b4m/public/upload/product_img/{{$i}}" alt="" class="product_section_img" width="100px" height="100px">
                                                </div>
                                                <div class="menu-product-content">
                                                    <h4>{{$row->product_name}}</h4>
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
                                                </div>
                                            </div>
                                            </a>
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
      
        <!-- middle area  -->
        <div class="team-area bg-img pt-115 pb-90" style="background-color: #e5e1f4">
            <h5>Go to any online store and copy and paste the URL of the product you would like from abroad.</h5>
            <div class="form-control1">
                <input type="url" placeholder="Paste the URL of the Product"  class="from-group" name="product" style="height: inherit !important; width:-moz-available!important;"> 
            </div>
            <div class="button1">
                <!-- <button1 id="create_order"><a href="#">create Order</a></button1> -->
                <button1><a href="{{route('user.product_details')}}">Create Order</a></button1>
            </div>
        </div>

        <!-- our shopes section -->
        <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab">
                            <h3>Top shops</h3>                          
                        </a>
                    </div>
                    <div class="container-fluid">
                        <div class="top-product-style">
                            <div class="tab-content">
                                <div class="tab-pane active show fade" id="electro1" role="tabpanel">
                                    <div class="custom-row-2">
                                        @foreach($topShop as $row)
                                            <div class="custom-col-style-2 custom-col-4">
                                                <div class="product-wrapper product-border mb-24">
                                                    <div class="product-img-3">
                                                        <a href="{{$row->url}}" target="_blank">
                                                            <img src="{{URL::to('/')}}/public/upload/top_shops/brand_img/{{$row->brand_img}}">
                                                        </a>
                                                    </div>
                                                    <div class="product-content-4 text-center">
                                                        <h4><a href="{{$row->url}}" target="_blank">{{$row->name}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end shope section  -->
        <!-- menu area end -->
	    @include('frontend.includes.footer')
		<!-- all js here -->
        @include('frontend.includes.footer_script')
    </body>
</html>
