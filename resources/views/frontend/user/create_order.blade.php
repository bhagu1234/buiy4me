
@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
	  <h3>Shop products from USA and save up to 40%</h3>
      <input type="url" placeholder="paste the url of the Product" > 
      <button><a href="{{route('user.product_details')}}">Create Order</a></button>
        <!-- menu area end -->
	    @include('frontend.includes.footer');
		<!-- all js here -->
     @include('frontend.includes.footer_script');
    </body>
</html>
