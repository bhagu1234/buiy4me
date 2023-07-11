<?php
$userMobile=Auth::User()->mobile;
?>
@include('frontend.includes.header')
<body>
@include('frontend.includes.nav')
<!-- header end -->
  <div class="best-product-area pb-15">
    <div class="pl-100 pr-100">
      <div class="container-fluid">
        <div class="section-title-3 text-center mb-40">
          <h2>Products Details</h2>
        </div>
        <div class="best-product-style">
          <div class="product-tab-list2 text-center mb-95 nav product-menu-mrg" role="tablist">
            <a class="active" href="#product_details_p" data-bs-toggle="tab" role="tab">
              <h4>Product Details </h4>
            </a>
            <a href="#delivery_details_p" data-bs-toggle="tab" role="tab">
                <h4>Delivery Details</h4>
            </a>
            <a href="#product_summery_p" data-bs-toggle="tab" role="tab">
                <h4>Summery</h4>
            </a> 
          </div>
          <form id="contact-form" class="contact-form" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="name=_token" value="{{csrf_token()}}">
            <div class="tab-content">
              <div class="tab-pane active show fade" id="product_details_p" role="tabpanel">
                <div class="custom-row">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Product Link </label>
                        <input name="product_link" placeholder="Enter Product link" required="" type="text" onkeyup="summery_vali('product_link')" id="order_product_link">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Product Name</label>
                        <input name="product_name" required="" type="text" placeholder="Enter Product Name" onkeyup="summery_vali('product_name')" id="order_productName">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Product Img</label>
                        <input name="product_img[]" required="" id="product_images_pro" type="file"  multiple>
                        <div></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Price</label>
                        <input name="product_price" required="" type="number" placeholder="enter Price" onkeyup="summery_vali('product_price')" id="order_product_price" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>QTY</label>
                        <input name="product_qty" required="" type="number" onkeyup="summery_vali('product_qty')" id="order_product_qty"  >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>With Box</label>
                        <input type="checkbox" name="box" id="product_with_box" value="0"  id="order_product_box"  >
                        <p>Requiring the box may reduce the number of offers you receive. Travelers generally prefer to deliver orders without the box, to save space.</p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="contact-textarea-style mb-30">
                          <label>Product Details</label>
                          <textarea class="form-control2 product_details" name="product_details" required="" onkeyup="summery_vali('product_details')" id="order_product_details" ></textarea>
                      </div>
                      <div class="product-tab-list2 text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a href="#delivery_details_p" data-bs-toggle="tab" role="tab">
                        <h4>Next</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="delivery_details_p" role="tabpanel">
                <div class="custom-row">                  
                  <div class="row">
                  <p><b>Confirm Delivery City and Date</b></p>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Delivery From Country</label>
                        <select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="devliver_from" onchange="getState(this.value,'devliver_from')" id="delivery_from_ord">
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>Delivery From City</label>
                        <select class="form-select single-select-field" data-placeholder="Choose one thing" name="devliver_from_city" id="deliveryFromCity">
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-input-style mb-30">
                          <label>Deliver To</label>
                          <select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="devliver_to" id="deliver_to_ord" onchange="getState(this.value,'deliver_to_ord')" >
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-input-style mb-30">
                          <label>Deliver To City</label>
                          <select class="form-select single-select-field" data-placeholder="Choose one thing" name="devliver_to_city" id="deliver_to_ordCity" >
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-input-style mb-30">
                        <label>How long are you willing to wait? </label>
                        <select name="select" class="during_time" name="during_time">
                            <option value="up_one_month">Up to 1 Month</option>
                            <option value="up_3_week">Up to 3 Week</option>
                            <option value="up_2_week"> Up to 2 week</option>
                            <option value="up_2_months">Up To 2 months</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="product-tab-list2 text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a href="#product_summery_p" data-bs-toggle="tab" role="tab">
                          <h4>Next</h4>
                        </a>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="tab-pane fade" id="product_summery_p" role="tabpanel">
                    <div class="custom-row">
                      <div class="product-details ptb-100 pb-90">
                        <div class="container">
                          <p>Your order summary</p>
                          <div class="row">
                            <div class="col-md-12 col-lg-7 col-12">
                              <div class="product-details-img-content">
                                <div class="product-details-tab mr-35 product-details-tab2">
                                  <!-- <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                      <div class="easyzoom easyzoom--overlay  ">
                                        <a href="{{URL::to('/')}}/public/frontend/assets/img/product-details/bl1.jpg">
                                          <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/l5-details-2.jpg" alt="">
                                        </a>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                      <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/')}}/public/frontend/assets/img/product-details/bl2.jpg">
                                            <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/l6-details-2.jpg" alt="">
                                        </a>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                      <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/')}}/public/frontend/assets/img/product-details/bl3.jpg">
                                            <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/l7-details-2.jpg" alt="">
                                        </a>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                      <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/')}}/public/frontend/assets/img/product-details/bl4.jpg">
                                          <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/l8-details-2.jpg" alt="" id="blah">
                                        </a>
                                      </div>
                                    </div>
                                  </div> -->
                                  <div class="product-details-small nav ml-10 product-details-2 gallery" role=tablist>
                                    <!-- <a class="active mb-10" href="#pro-details1" data-bs-toggle="tab" role="tab" aria-selected="true">
                                      <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/s5.jpg" alt="">
                                    </a>
                                    <a class="mb-10" href="#pro-details2" data-bs-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/s6.jpg" alt="">
                                    </a>
                                    <a class="mb-10" href="#pro-details3" data-bs-toggle="tab" role="tab" aria-selected="true">
                                      <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/s7.jpg" alt="">
                                    </a>
                                    <a class="mb-10" href="#pro-details4" data-bs-toggle="tab" role="tab" aria-selected="true">
                                      <img src="{{URL::to('/')}}/public/frontend/assets/img/product-details/s8.jpg" alt=""> -->
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 col-lg-5 col-12">
                              <div class="product-details-content">
                                <h3 id="summ_productName">Product Name</h3>
                                  <div class="rating-number">
                                    <div class="quick-view-rating">
                                      <i class="pe-7s-star red-star"></i>
                                      <i class="pe-7s-star red-star"></i>
                                      <i class="pe-7s-star"></i>
                                      <i class="pe-7s-star"></i>
                                      <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                  </div>
                                  <div class="">
                                      <span>Deliver from </span> :- <span id="summery_Deliverfrom"></span>
                                  </div>
                                  <div class="">
                                      <span>Deliver to </span> :- <span id="summery_Deliverto"></span>
                                  </div>
                                  <div class="">
                                      <span>Deliver before </span> :- <span id="summery_Deliverbefore"> Up to 1 Month</span>
                                  </div>
                                  <div class="">
                                      <span>Quantity</span> :- <span id="summery_Quantity">0</span>
                                  </div>
                                  <div class="">
                                      <span>Packaging </span> :- <span id="summery_Packaging">Without Box</span>
                                  </div>
                                  <p id="sum_pro_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                  <div class="details-price">
                                      <span>Product price</span> :-<span id="summery_pro_price"></span>
                                  </div>
                                  <div class="">
                                      <span>Traveler reward </span> :-
                                      <input type="text" id="summery_traveler_reward" readonly /> 
                                      <!-- <span id="summery_traveler_reward">30%</span> -->
                                  </div>
                                  <div class="">
                                      <span>Buy4me fee </span>:-
                                      <input type="text" id="summery_buy4me_fee" readonly />
                                      <!-- <span id="summery_buy4me_fee">10%</span> -->
                                  </div>
                                  <div class="">
                                      <span>Sales Tax</span>:-
                                      <input type="text" id="summery_salesTax" readonly />
                                      <!-- <span id="summery_salesTax">10%</span> -->
                                  </div>
                                  <div class="">
                                      <span>Payment processing </span>:-
                                      <input type="text" id="summery_payment_processing" readonly />
                                      <!-- <span id="summery_payment_processing">5%</span> -->
                                  </div>
                                  <div class="">
                                      <span>Estimated total </span>:-
                                      <input type="text" id="summery_estimated_total" readonly />
                                      <!-- <span id="summery_estimated_total">$160.00</span> -->
                                  </div>
                                  <!-- <div class="quick-view-select">
                                      <div class="select-option-part">
                                          <label>Delivery From </label>
                                          <p id="sum_delivery_from">Ahamdabad india</p>
                                      </div>
                                      <div class="select-option-part">
                                          <label>Devlivery To </label>
                                          <p id="sum_delivery_from"></p>
                                      </div>
                                  </div>
                                  <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                      
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box" readonly>
                                    </div> -->
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#" id="store_orderwith_details">Request delivery offers</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
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
