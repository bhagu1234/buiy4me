@include('admin.includes.header')
<body>
	<!--wrapper-->
	<div class="wrapper">
	 <!--start header wrapper-->	
	  <div class="header-wrapper">
		<!--start header -->
		@include('admin.includes.nav')
		<!--end navigation-->
	   </div>
	   <!--end header wrapper-->
       <div class="page-wrapper">
			<div class="page-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Horizontal Form</h5>
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input35" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input36" placeholder="Phone No">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="input37" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="input38" placeholder="Choose Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input39" class="col-sm-3 col-form-label">Select Country</label>
										<div class="col-sm-9">
											<select class="form-select" id="input39">
												<option selected="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input40" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="input40" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="input41">
												<label class="form-check-label" for="input41">Check me out</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="button" class="btn btn-primary px-4">Submit</button>
												<button type="button" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Horizontal Icon</h5>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="text" class="form-control" id="input42" placeholder="Enter Your Name">
												<span class="position-absolute top-50 translate-middle-y"><i class="bx bx-user"></i></span>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input43" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="text" class="form-control" id="input43" placeholder="Phone No">
												<span class="position-absolute top-50 translate-middle-y"><i class="bx bx-phone"></i></span>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input44" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="text" class="form-control" id="input44" placeholder="Email Address">
												<span class="position-absolute top-50 translate-middle-y"><i class="bx bx-envelope"></i></span>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input45" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="text" class="form-control" id="input45" placeholder="Choose Password">
												<span class="position-absolute top-50 translate-middle-y"><i class="bx bx-lock"></i></span>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Select Country</label>
										<div class="col-sm-9">
											<select class="form-select" id="input46">
												<option selected="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input47" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="input47" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="input48">
												<label class="form-check-label" for="input48">Check me out</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="button" class="btn btn-primary px-4">Submit</button>
												<button type="button" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="card">
								<div class="card-body p-4">
									<h5 class="mb-4">Horizontal Addon</h5>
										<div class="row mb-3">
											<label for="input49" class="col-sm-3 col-form-label">Enter Your Name</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class="bx bx-user"></i></span>
													<input type="text" class="form-control" id="input49" placeholder="Your Name">
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input50" class="col-sm-3 col-form-label">Phone No</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class="bx bx-microphone"></i></span>
													<input type="text" class="form-control" id="input50" placeholder="Phone No">
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input51" class="col-sm-3 col-form-label">Email Address</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class="bx bx-envelope"></i></span>
													<input type="text" class="form-control" id="input51" placeholder="Email">
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input52" class="col-sm-3 col-form-label">Choose Password</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class="bx bx-lock-open"></i></span>
													<input type="text" class="form-control" id="input52" placeholder="Choose Password">
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="input53" class="col-sm-3 col-form-label">Select Country</label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-text"><i class="bx bx-flag"></i></span>
													<select class="form-select" id="input53">
														<option selected="">Open this select menu</option>
														<option value="1">One</option>
														<option value="2">Two</option>
														<option value="3">Three</option>
													  </select>
												  </div>
											</div>
										</div>
										<div class="row mb-3">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="input54">
													<label class="form-check-label" for="input54">Check me out</label>
												</div>
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div class="d-md-flex d-grid align-items-center gap-3">
													<button type="button" class="btn btn-primary px-4">Submit</button>
													<button type="button" class="btn btn-light px-4">Reset</button>
												</div>
											</div>
										</div>
									</div>
								</div>  
					</div>
				</div><!--end row-->
</div>
</div>
		@include('admin.includes.footer')
	</div>
	<!--end wrapper-->
	@include('admin.includes.footer_script')

	

</body>

</html>