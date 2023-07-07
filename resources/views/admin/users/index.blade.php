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
            <h6 class="mb-0 text-uppercase">All Users </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>email</th>
										<th>Mobile</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($userData as $row)
                                        <tr>
                                            <td>{{$row->first_name}}</td>
                                            <td>{{$row->last_name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>
                                                <a href="">edit</a>
                                                <a href="">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
								</tbody>
								<tfoot>
									<tr>
                                        <th>First Name</th>
										<th>Last Name</th>
										<th>email</th>
										<th>Mobile</th>
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