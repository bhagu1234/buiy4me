@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
	    <div class="product-description-review-area pb-90">
            <div class="container">
                <div class="product-description-review text-center">
                     <h2> Trips  </h2> 
                    
                     <div class="tab-pane  show fade tabs__tab active " id="on_way"  role="tabpanel" data-tab-info>
                        <form action="{{route('user.create_trip')}}" method="post">
                            @csrf
                            <input type="text" name="from_location" class="form-control from_location" placeholder="from *" list="browsers_country" onkeyup="fatch_country(this.value,'travel_from')" required>
                            <datalist id="browsers_country"></datalist>
                            <input type="text" name="to_location"  class="form-control to_location" placeholder="to*" list="browsers_country_to" onkeyup="fatch_country(this.value,'travel_to')" required>
                            <datalist id="browsers_country_to"></datalist>
                            <input type="date" name="travel_date"   class="form-control travel_date" placeholder="travel date" required><br>
                            <button type="submit">Add trip</button>
                        </form>
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
