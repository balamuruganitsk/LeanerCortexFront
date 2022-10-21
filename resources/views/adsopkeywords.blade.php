<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Admission</title>
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
       
        <div class="right-sidebar">
        <button type="button" class="close close-cus" data-dismiss="modal" aria-label="Close">
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</button>
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
                Create SOP Keywords
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
								<h4 class="text-blue h4">Create SOP Keywords</h4>
								<p class="mb-30"></p>
							</div>
							
						</div>
						<form>
							<div class="form-group">
								<label>SOP Keyword</label>
								<input
									class="form-control"
									type="text"
									placeholder="Johnny Brown"
								/>
							</div>
                            
							<div class="form-group">
								<label>Keyword Code</label>
								<input
									class="form-control"
									type="text"
									placeholder="Johnny Brown"
								/>
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
				</div>
			</div>
		</div>

		
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
									<h4> Keywords <i class="icon-copy fa fa-star-o" aria-hidden="true"></i></h4>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 ">
								<div class="dropdown d-flex">
									<a class="" href="#" role="button" href="javascript:;" data-toggle="right-sidebar">
								<button type="button" class="btn btn-primary">Create Keywords <i class="icon-copy fa fa-plus" aria-hidden="true"></i></button>
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
											<th>ID</th>
											<th class="table-plus datatable-nosort"> Name</th>
											<th>Code</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>1</td>
											<td class="table-plus">Permanent Address Type</td>
                                            <td>PA</td>
											<td>
											<div class="table-actions">
												<a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
														class="icon-copy dw dw-edit2"></i></a>
												<a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
														class="icon-copy dw dw-delete-3"></i></a>
											</div>
										</td>
											
										</tr>
										<tr>
                                             <td>2</td>
											<td class="table-plus">Temporary Address Type </td>
                                            <td>TA</td>
											<td>
											<div class="table-actions">
												<a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
														class="icon-copy dw dw-edit2"></i></a>
												<a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
														class="icon-copy dw dw-delete-3"></i></a>
											</div>
										</td>
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


