<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Lead</title>
		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		
		<!-- End Google Tag Manager -->
        @include('layouts.links')
	</head>
	<body>
		
    @include('layouts.header')
		
        
        @include('layouts.rightsidebar')
			
    
        <!-- right-side background -->
         <!--start color switcher-->
  <div class="right-sidebar side2 color">
    <div class="switcher-icon">
      <i class="dw dw-settings2 icon-white"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>

      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>

      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
        <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>

    </div>
  </div>
  <!--end color switcher-->
        <!-- end -->
       
        <!-- right-side open -->
		<div class="right-sidebar">
        <button type="button" class="close close-cus" data-dismiss="modal" aria-label="Close">
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</button>
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					List of Leads
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<!-- right=form -->
                    <!-- horizontal Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Create Checklist
                                </h4>
								<p class="mb-30"></p>
							</div>
							
						</div>
						<form>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Contact Number</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Date Of Birth</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Gender</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Maritial Status</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Occupation</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Lead Source</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Intrested Course</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Intake</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							
                            <!-- Address -->

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Address Type</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Address1</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Address2</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>
                                            Country</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>State Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>District</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>City</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Area</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Pincode</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
                            <div class="btn-list text-right">
                                <button type="button" class="btn btn-lg btn-primary" disabled="">
                                Submit
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" disabled="">
                                Cancle
                                </button>
                            </div>
						</form>
					</div>
					<!-- horizontal Basic Forms End -->
                    <!-- end -->
				</div>
			</div>
		</div>
        <!-- end -->

		
		@include('layouts.leftsidebar')
		<div class="mobile-menu-overlay"></div>
		<div class="main-container">
			
			<div class="pd-ltr-20 xs-pd-20-10">

				<div class="card-box mb-30 page-header mb-0">
					
					</div>
				<div class="min-height-200px">
					<div class="page-header mb-0">
						<div class="row">
							<div class="col-md-2 col-sm-12">
								<div class="title">
									<h4>Lead <i class="icon-copy fa fa-star-o" aria-hidden="true"></i></h4>
								</div>
								<!-- <nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											DataTable
										</li>
									</ol>
								</nav> -->
							</div>
							<div class="col-md-4 col-sm-12 ">
								<div class="dropdown d-flex">
									<a
										class=""
										href="#"
										role="button"
										href="javascript:;" data-toggle="right-sidebar">
								<button type="button" class="btn btn-primary">Create lead <i class="icon-copy fa fa-plus" aria-hidden="true"></i></button>
                                </a>


                                <a
                                class=""
                                href="#"
                                role="button"
                                href="javascript:;" data-toggle="right-sidebar user"
                            >
                        <button type="button" class="btn btn-primary">Primary</button>
                        </a>
									
								</div>
                                
							</div>
                           
                            <div class="col-md-6 col-sm-12 text-right">
								<select class="custom-select col-12">
                                    <option selected="">select Status here </option>
                                    <option value="1">Not converter</option>
                                    
                                </select>
                                
							</div>
						</div>
					</div>

                   
					<!-- multiple select row Datatable start -->
					<div class="card-box mb-30">               
						<div class="pb-20">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Source</th>
										<th>Status</th>
										<th>Handeled By</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td class="table-plus">Christian Dyer</td>
										<td>987654210</td>
										<td>XXX@gmail.com</td>
										<td>Facebook</td>
										<td>Active</td>
										<td>Counsellor 1</td>
									</tr>
									<tr>
										<td class="table-plus">Christian Dyer</td>
										<td>987654210</td>
										<td>XXX@gmail.com</td>
										<td>Facebook</td>
										<td>Active</td>
										<td>Counsellor 2</td>
									</tr>
									<tr>
										<td class="table-plus">Christian Dyer</td>
										<td>987654210</td>
										<td>XXX@gmail.com</td>
										<td>Facebook</td>
										<td>Active</td>
										<td>Counsellor 3</td>
									</tr>
									<tr>
										<td class="table-plus">Christian Dyer</td>
										<td>987654210</td>
										<td>XXX@gmail.com</td>
										<td>Facebook</td>
										<td>Active</td>
										<td>Counsellor 4</td>
									</tr>
									<tr>
										<td class="table-plus">Christian Dyer</td>
										<td>987654210</td>
										<td>XXX@gmail.com</td>
										<td>Facebook</td>
										<td>Active</td>
										<td>Counsellor 5</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- multiple select row Datatable End -->
				</div>
			</div>
		</div>
		
		
		<!-- End Google Tag Manager (noscript) -->
	</body>
    
@include('layouts.scripts')
</html>
<!-- ---------------------------------------------------------------------- -->


