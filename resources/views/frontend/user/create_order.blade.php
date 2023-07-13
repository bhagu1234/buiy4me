
@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
      <center>
	  <h3>Shop products from USA and save up to 40%</h3>
      <div class="form-control">
        <input type="url" placeholder="paste the url of the Product"  class="from-group" name="product" id="fromduct_from_url"> 
        <!-- <button id="create_order">create Order</button> -->
        <button><a href="{{route('user.product_details')}}">Create Order</a></button>
      </div>
      <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(public/frontend/assets/img/bg/breadcrumb.jpg)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Order</h2>
                <ul>
                  <li><a href="{{route('home')}}">home</a></li>
                </ul>
            </div>
        </div>
      </div>
       <!-- menu area start -->
       <div class="food-menu-area bg-img pt-115 pb-90" style="background-image: url(public/frontend/assets/img/bg/13.jpg)">
            <div class="container">
                <div class="food-menu-product-style">
                    <div class="food-menu-list text-center mb-65 nav" role="tablist">
                        <a class="active" href="#menu1" data-bs-toggle="tab" role="tab">
                            <h3>Treding Product On Buy4me  </h3>
                            <p>Get inspired by what people in your city are buying from abroad with the biggest savings</p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- menu area end -->
	    @include('frontend.includes.footer');
		<!-- all js here -->
     @include('frontend.includes.footer_script');
    </body>
</html>
