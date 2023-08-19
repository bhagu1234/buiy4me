<?php
$buy4meFee=$all_tax->buy4meFee;
$paymentPro=$all_tax->payment_proccessing_tax;
$travel_tax=$all_tax->travel_tax;

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
		<div id="stepper1" class="bs-stepper linear" bis_skin_checked="1">
			<div class="card" bis_skin_checked="1">
				<div class="card-header" bis_skin_checked="1">
					<div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist" bis_skin_checked="1">
						<div class="step active" data-target="#test-l-1" bis_skin_checked="1">
							<div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1" aria-selected="true" bis_skin_checked="1">
								<div class="bs-stepper-circle" bis_skin_checked="1">1</div>
								<div class="" bis_skin_checked="1">
									<h5 class="mb-0 steper-title">Product Details</h5>
									<p class="mb-0 steper-sub-title">Enter Product Details</p>
								</div>
							</div>
						</div>
						<div class="bs-stepper-line" bis_skin_checked="1"></div>
							<div class="step" data-target="#test-l-2" bis_skin_checked="1">
								<div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2" aria-selected="false" disabled="disabled" bis_skin_checked="1">
								<div class="bs-stepper-circle" bis_skin_checked="1">2</div>
								<div class="" bis_skin_checked="1">
									<h5 class="mb-0 steper-title">Delivery Details</h5>
									<p class="mb-0 steper-sub-title">Setup Delivery Details</p>
								</div>
							</div>
						</div>
						<div class="bs-stepper-line" bis_skin_checked="1"></div>
							<div class="step" data-target="#test-l-3" bis_skin_checked="1">
								<div class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3" aria-selected="false" disabled="disabled" bis_skin_checked="1">
									<div class="bs-stepper-circle" bis_skin_checked="1">3</div>
									<div class="" bis_skin_checked="1">
										<h5 class="mb-0 steper-title">Summery</h5>
										<p class="mb-0 steper-sub-title">Summery Details</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body" bis_skin_checked="1">
						<div class="bs-stepper-content" bis_skin_checked="1">
							<form class="contact-form" method="post" enctype="multipart/form-data" id="contact-form" >
								@csrf
								<input type="hidden" name="name=_token" value="{{csrf_token()}}">
								<div id="test-l-1" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper1trigger1" bis_skin_checked="1">
									<div class="row g-3" bis_skin_checked="1">
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="FisrtName" class="form-label">Product Link</label>
											<input type="text" class="form-control" id="order_product_link" name="product_link"  placeholder="Enter Product Link" onkeyup="summery_vali('product_link',{{$buy4meFee}},{{$paymentPro}},{{$travel_tax}})">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="LastName" class="form-label">Product Name</label>
											<input type="text" class="form-control" id="order_productName" name="product_name"  placeholder="Enter Product Name" onkeyup="summery_vali('product_name',{{$buy4meFee}},{{$paymentPro}},{{$travel_tax}})">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="PhoneNumber" class="form-label">Product Image</label>
											<input name="product_img[]" class="form-control" id="product_images_pro" type="file" multiple="">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputEmail" class="form-label">Price</label>
											<input name="product_price" class="form-control" type="number" placeholder="enter Price" onkeyup="summery_vali('product_price',{{$buy4meFee}},{{$paymentPro}},{{$travel_tax}})" id="order_product_price">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputCountry" class="form-label">QTY</label>
											<input name="product_qty"  class="form-control" type="number" onkeyup="summery_vali('product_qty',{{$buy4meFee}},{{$paymentPro}},{{$travel_tax}})" id="order_product_qty">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputLanguage" class="form-label">With Box</label><br>
											<input type="checkbox" name="box"  id="product_with_box" class="checkbox_create" value="0">Requiring the box may reduce the number of offers you receive. Travelers generally prefer to deliver orders without the box, to save space. 
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="FisrtName" class="form-label">Product Details</label>
											<textarea class="form-control product_details" name="product_details"  onkeyup="summery_vali('product_details',{{$buy4meFee}},{{$paymentPro}},{{$travel_tax}})" id="order_product_details"></textarea>
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											@if(Auth::check())
												<button class="btn btn-primary px-4" onclick="stepper1.next()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
											@else
												<button class="btn btn-primary px-4" onclick="openLogin()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
											@endif
										</div>
									</div><!---end row-->
								</div>
								<div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2" bis_skin_checked="1">
									<h5 class="mb-1">Delivery Details</h5>
									<p class="mb-4">Confirm Delivery City and Date</p>
									<div class="row g-3" bis_skin_checked="1">
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="delivery" class="form-label">Delivery From Country</label>
											<select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="devliver_from" onchange="getState(this.value,'devliver_from')" id="delivery_from_ord">
											</select>
										</div>
										<!-- <div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputEmail2" class="form-label">Delivery From City</label>
											<select class="form-select single-select-field" data-placeholder="Choose one thing" name="devliver_from_city" id="deliveryFromCity">
											</select>
										</div> -->
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputPassword" class="form-label">Deliver To</label>
											<select class="form-select single-select-field browsers_country" data-placeholder="Choose one thing" name="devliver_to" id="deliver_to_ord" onchange="getState(this.value,'deliver_to_ord')" >
											</select>
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputConfirmPassword" class="form-label">Deliver To City</label>
											<select class="form-select single-select-field" data-placeholder="Choose one thing" name="devliver_to_city" id="deliver_to_ordCity" >
											</select>
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
											<label for="InputConfirmPassword" class="form-label">How long are you willing to wait? </label>
											<select name="select" class="during_time" name="during_time">
												<option value="up_one_month">Up to 1 Month</option>
												<option value="up_3_week">Up to 3 Week</option>
												<option value="up_2_week"> Up to 2 week</option>
												<option value="up_2_months">Up To 2 months</option>
											</select>
										</div>
										<div class="col-12 col-lg-6" bis_skin_checked="1">
										</div>
										<div class="col-12" bis_skin_checked="1">
											<div class="d-flex align-items-center gap-3" bis_skin_checked="1">
												<button class="btn btn-outline-secondary px-4" onclick="stepper1.previous()"><i class="bx bx-left-arrow-alt me-2"></i>Previous</button>
												<button class="btn btn-primary px-4" onclick="stepper1.next()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
											</div>
										</div>
									</div><!---end row-->
								</div>
								<div id="test-l-3" role="tabpanel" id="product_summery_p" class="bs-stepper-pane" aria-labelledby="stepper1trigger3" bis_skin_checked="1">
									<h5 class="mb-1">Your order summary</h5>
									<div class="product-details-small nav ml-10 product-details-2 gallery" role=tablist>
								</div>
								<div class="row g-3" bis_skin_checked="1">
									<div class="col-12 col-lg-12" bis_skin_checked="1">
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
									</div>
									<div class="col-12 col-lg-12" bis_skin_checked="1">
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
										<p id="sum_pro_description"></p>
									</div>
									<div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Product price</label>
										<input class="form-control" id="summery_pro_price" placeholder="Product price" disabled>	
									</div>
									<div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Traveler reward</label>
										<input class="form-control" id="summery_traveler_reward" placeholder="Traveler reward" disabled>	
									</div>
									<div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Buy4me fee</label>
										<input class="form-control" id="summery_buy4me_fee" placeholder="Buy4me fee" disabled>	
									</div>
									<!-- <div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Sales Tax</label>
										<input class="form-control" id="summery_salesTax" placeholder="Sales Tax" disabled>	
									</div> -->
									<div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Payment processing</label>
										<input class="form-control" id="summery_payment_processing" placeholder="Payment processing" disabled>	
									</div>
									<div class="col-12 col-lg-6" bis_skin_checked="1">
										<label for="InputCountry" class="form-label">Estimated total</label>
										<input class="form-control" id="summery_estimated_total" placeholder="Estimated total" disabled>	
									</div>
									<div class="col-12" bis_skin_checked="1">
										<div class="d-flex align-items-center gap-3" bis_skin_checked="1">
											<button class="btn btn-outline-secondary px-4" onclick="stepper1.previous()"><i class="bx bx-left-arrow-alt me-2"></i>Previous</button>
											<!-- @if(Auth::check()) -->
												<!-- @if(Auth::user()->email_veryfied=="0")
													<a href="{{route('stripeIdentity.index')}}" class="btn btn-primary">Request delivery offers</a>
												@else -->
													<!-- <button class="btn btn-success px-4" id="store_orderwith_details">Request delivery offers</button> -->
												<!-- @endif -->
											<!-- @else -->
												<!-- <button class="btn btn-success px-4" id="store_orderwith_details">Request delivery offers</button> -->
											<!-- @endif -->
											<button class="btn btn-success px-4" id="store_orderwith_details">Request delivery offers</button>
											
										</div>
									</div>
								</div><!---end row-->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- </div>
	</div>
</div> -->
  <!-- menu area end -->
  @include('frontend.includes.footer')
  <!-- all js here -->
  @include('frontend.includes.footer_script')
</body>
</html>
