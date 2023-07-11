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
                    <!-- <option>Rajsthan</option> -->
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
                    <!-- <option>Rajsthan</option> -->
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
    <!-- menu area end -->
    @include('frontend.includes.footer');
		<!-- all js here -->
    @include('frontend.includes.footer_script');
  </body>
</html>
