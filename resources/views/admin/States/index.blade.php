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
            <h6 class="mb-0 text-uppercase">States </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Country Name</th>
										<th>City name</th>
										<th>Qty</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                   
								</tbody>
								<tfoot>
									<tr>
                                        <th>Country Name</th>
										<th>City name</th>
										<th>Qty</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
		@include('admin.includes.footer')
	</div>
	<!--end wrapper-->
	@include('admin.includes.footer_script')

	

</body>

</html>