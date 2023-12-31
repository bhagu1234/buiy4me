@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
    <!-- header end -->
    <div class="product-description-review-area pb-90">
      <div class="container">
        <div class="product-description-review text-center">
          <h5> Add your trip details to start earning money  </h5> 
            <form action="{{route('user.create_trip')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>from Country*</label>
                  <select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="from_location" onchange="getState(this.value,'from_travel')" required>
                  </select>
                </div>
                <div class="col-md-6 form-group"> 
                  <label>from City*</label>
                  <select class="form-select single-select-field " data-placeholder="Choose one thing" id="travel_from_state" name="from_city" required>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>To Country *</label>
                  <select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="to_location" onchange="getState(this.value,'to_travel')" required>
                  </select>
                </div> 
                <div class="col-md-6 form-group"> 
                  <label>To City*</label>
                  <select class="form-select single-select-field " data-placeholder="Choose one thing" name="to_city" id="travel_to_state" required>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <label>Travel date</label>
                  <input type="date" name="travel_date"   class="form-control travel_date" placeholder="travel date" min="<?php echo date('Y-m-d'); ?>" required><br>
                  <button type="submit">Add trip</button>
                </div>
              
              </div>
            </form>
        </div>
      </div>
    </div>
    <!-- menu area  -->
    <div class="about-story pt-95 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="story-img">
                      <img src="{{URL::to('/')}}/public/frontend/assets/img/banner/11.png" alt="">
                      <div class="about-logo">
                          <h3>Buy4me</h3>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="story-details pl-50">
                      <div class="story-details-top">
                          <h2>WELCOME TO <span>Buy4me</span></h2>
                          <p>…wondering if you should try Grabr on your next trip? The answer is YES. Shoppers all came to my hotel lobby within two hours. Quick, easy, and fun. What a cool way to meet new people and earn some cash.</p>
                          <button>More Buy4me stories</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- menu area end -->
      <!-- blog area start -->
      <div class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="section-title-3 text-center mb-50">
                <h2>How to Earn Money Traveling</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-wrapper mb-40">
                        <div class="blog-img blog-hover mb-15">
                            <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/blog/1.jpg" alt=""></a>
                        </div>
                        <div class="blog-info">
                            <h4><a href="#">Add trip</a></h4>
                            <span>Start by adding your trip to see requested orders along your route.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-wrapper mb-40">
                        <div class="blog-img blog-hover mb-15">
                            <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/blog/2.jpg" alt=""></a>
                        </div>
                        <div class="blog-info">
                            <h4><a href="#">Make Offers</a></h4>
                            <span>You choose the orders you’d like to deliver and arrange the details with your shoppers.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-wrapper mb-40">
                        <div class="blog-img blog-hover mb-15">
                            <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/blog/3.jpg" alt=""></a>
                        </div>
                        <div class="blog-info">
                            <h4><a href="#">Buy the Product </a></h4>
                            <span>Once shoppers accept your offer, they pay. We hold payment. Then, you buy the item with your money.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-wrapper mb-40">
                        <div class="blog-img blog-hover mb-15">
                            <a href="#"><img src="{{URL::to('/')}}/public/frontend/assets/img/blog/3.jpg" alt=""></a>
                        </div>
                        <div class="blog-info">
                            <h4><a href="#">Deliver and Get Paid</a></h4>
                              <span>Meet in person, deliver the product, get paid automatically by Buy4me.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
    @include('frontend.includes.footer');
		<!-- all js here -->
    @include('frontend.includes.footer_script');
  </body>
</html>
