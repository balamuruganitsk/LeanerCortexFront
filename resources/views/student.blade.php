<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Student</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('layouts.links')
</head>
<body>
@include('layouts.header')
		
        
        @include('layouts.rightsidebar')

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

  <div class="right-sidebar">
        <button type="button" class="close close-cus" data-dismiss="modal" aria-label="Close">
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</button>
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
                Create SOP Student Enroll
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
								<h4 class="text-blue h4">Create Student Enroll</h4>
								<p class="mb-30"></p>
							</div>
							
						</div>
						<form>
							<div class="form-group">
								<label>Sample Name</label>
								<input
									class="form-control"
									type="text"
									placeholder="Johnny Brown"
								/>
							</div>
                            
							<div class="form-group">
								<label>Sample Code</label>
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
            <div class="min-height-200px">
            <div class="card-box mb-30 page-header mb-0">
					
					</div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4><i class="icon-copy fa fa-user" aria-hidden="true"></i> Students</h4>
                            </div>
                           
                        </div>
                        <!-- <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" href="javascript:;"
                                    data-toggle="right-sidebar">
                                    Add
                                </a>

                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"
                                                aria-selected="true">Personal Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#taskss" role="tab"
                                                aria-selected="false">Eduction Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting" role="tab"
                                                aria-selected="false">Test Score Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting4" role="tab"
                                                aria-selected="false">Study Abroad Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting5" role="tab"
                                                aria-selected="false">Documents Upload</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Timeline Tab start -->
                                        <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    
                                                </form><!-- Form grid Start -->
                                                <div class="pd-20 card-box mb-30">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <h4 class="text-blue h4">Personal Form</h4>
                                                           
                                                        </div>
                                                        
                                                    </div>

                                                    <!-- tab-1 form -->
                                                    <form>
                                                      
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Contact No</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Alternative Contact No</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Alternative Email</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Place of Birth</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Date of birth</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label>Gender</label>
                                                                <div class="form-group d-flex" >
                                                                   
                                                                    <div class="custom-control custom-radio mb-5">
                                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-5">
                                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <h4 class="text-blue h4">Other Personal Details</h4>
                                                               
                                                            </div>
                                                            
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Native Language</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Sure Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Native Language</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Sure Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Contact No</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Alternative Contact No</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Alternative Email</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Place of Birth</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Date of birth</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Nationality </label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Language</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Nationality </label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="col-md-6 col-sm-12 ">
                                                                <label class="">Custom Checkbox</label>

                                                                <div class="d-flex">

                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck1"
                                                                        />
                                                                        <label class="custom-control-label" for="customCheck1"
                                                                            >Read</label
                                                                        >
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck2"
                                                                        />
                                                                        <label class="custom-control-label" for="customCheck2"
                                                                            >Write</label
                                                                        >
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck3"
                                                                        />
                                                                        <label class="custom-control-label" for="customCheck3"
                                                                            >Speak</label
                                                                        >
                                                                    </div>

                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>


                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <h4 class="text-blue h4">Parent Details</h4>
                                                               
                                                            </div>
                                                            
                                                        </div>


                                                        

                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Father Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Father Qualification</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Father Occupation </label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Mother Name</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Mother Qualification</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Mother Occupation </label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <h4 class="text-blue h4">Address</h4>
                                                               
                                                            </div>
                                                            
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Address type</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Address1</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Address2</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>

                                                           
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Distric</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Area</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Pincode </label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                    <div class="col-md-12 text-right">
                                                        <button type="button" class="btn btn-primary">Save & Continue</button>

                                                    </div>
                                                      
                                                    </form>

                                                    <!-- end -->
                                                    <div class="collapse collapse-box" id="form-grid-form">
                                                        <div class="code-box">
                                                            <div class="clearfix">
                                                                <a
                                                                    href="javascript:;"
                                                                    class="btn btn-primary btn-sm code-copy pull-left"
                                                                    data-clipboard-target="#form-grid"
                                                                    ><i class="fa fa-clipboard"></i> Copy Code</a
                                                                >
                                                                <a
                                                                    href="#form-grid-form"
                                                                    class="btn btn-primary btn-sm pull-right"
                                                                    rel="content-y"
                                                                    data-toggle="collapse"
                                                                    role="button"
                                                                    ><i class="fa fa-eye-slash"></i> Hide Code</a
                                                                >
                                                            </div>
                                                            <pre><code class="xml copy-pre" id="form-grid">
                            <form>
                                
                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>col-md-6</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                              
                              
                               
                            </form>
                                                        </code></pre>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Form grid End -->
                            
                                            </div>
                                        </div>
                                        <!-- Timeline Tab End -->
                                        <!-- Tasks Tab start -->
                                        <div class="tab-pane fade" id="taskss" role="tabpanel">
                                            <div class="pd-20 profile-task-wrap">
                                                <div class="container-fluid pd-0">
                                                    <!-- Open Task start -->
                                                    <div class="profile-task-list pb-30">
                                                        <div class="pd-20 card-box mb-30">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <h4 class="text-blue h4">Education Details</h4>
                                                                   
                                                                </div>
                                                                
                                                            </div>
        
                                                            <!-- tab-1 form -->
                                                            <form>

                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>





                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                                <h4 class="text-blue h4">11th</h4>
                                                                               
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                




                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                                <h4 class="text-blue h4">12th</h4>
                                                                               
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                                <h4 class="text-blue h4">Diplomo</h4>
                                                                               
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                                <h4 class="text-blue h4">UG</h4>
                                                                               
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                                <h4 class="text-blue h4">PG</h4>
                                                                               
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 1</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address 2</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Distric</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Area</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Pincode</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Started</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>School Ended</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Exam Bord Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total Mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Total maximum mark</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4  col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Percentage</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                    </div>
                                                    <!-- Open Task End -->
                                                    
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>


                                 <!-- Tasks Tab End -->
                                        <!-- Setting Tab start -->
                                        <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                                <div class="container-fluid pd-0">
                                                    <!-- Open Task start -->
                                                    <div class="profile-task-list pb-30">
                                                        <div class="pd-20 card-box mb-30">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                <h4 class="text-blue h5 mb-20">
                                                                Test Score Details
                                                            </h4>
                                                                   
                                                                </div>
                                                                
                                                            </div>
        
                                                            <!-- tab-1 form -->
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Course</label>
                                                                            <div
                                                                    class="dropdown bootstrap-select form-control form-control-lg">
                                                                    <select
                                                                        class="selectpicker form-control form-control-lg"
                                                                        data-style="btn-outline-secondary btn-lg"
                                                                        title="Not Chosen" tabindex="-98">
                                                                        <option class="bs-title-option" value="">TOEFL
                                                                        </option>
                                                                        <option>GRE</option>
                                                                        <option>GMAT</option>
                                                                        <option>IELTS</option>
                                                                    </select>
                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Center Name </label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Test Location</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Reading Score</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Listening Score</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Writing Score</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </form>
                                                    </div>
                                                    <!-- Open Task End -->    
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->

                                       
                            </div>
                        </div>
                         <!-- Setting Tab start4 -->
                         <div class="tab-pane fade height-100-p" id="setting4" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">
                                                               Study Abroad Details
                                                            </h4>
                                                            <div class="form-group">
                                                                <label>Admission Requirement / Plan</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div>
                                                            <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Intake Year You Plan For</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Intake</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox mb-5">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="customCheck1-1">
                                                                    <label class="custom-control-label weight-400"
                                                                        for="customCheck1-1">I agree to receive
                                                                        notification
                                                                        emails</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Update Information">
                                                            </div>
                                                        </li>
                                                        <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">
                                                                Sponsor Details
                                                            </h4>
                                                            <div class="form-group">
                                                                <label>Sponsor Type</label>
                                                                <div
                                                                    class="dropdown bootstrap-select form-control form-control-lg">
                                                                    <select
                                                                        class="selectpicker form-control form-control-lg"
                                                                        data-style="btn-outline-secondary btn-lg"
                                                                        title="Not Chosen" tabindex="-98">
                                                                        <option class="bs-title-option" value="">
                                                                        </option>
                                                                        <option>United States</option>
                                                                        <option>India</option>
                                                                        <option>United Kingdom</option>
                                                                    </select>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="inner show" role="listbox"
                                                                            id="bs-select-3" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show"
                                                                                role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Sponsor Name</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Intake</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Save &amp; Update">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->

                                        <!-- Setting Tab start4 -->
                                        <div class="tab-pane fade height-100-p" id="setting5" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <div class="container">
                                                        <div class="profile-edit-list row">

                                                            <div class="row pb-10">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                                                                    <div class="card-box height-100-p widget-style3">
                                                                        <div class="d-flex flex-wrap">
                                                                            <div class="widget-data">
                                                                               
                                                                                <div class="font-14 text-secondary weight-500">
                                                                                    PDF Download <i class="icon-copy fa fa-download" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-icon">
                                                                                <div class="icon" data-color="" >
                                                                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/27_Pdf_File_Type_Adobe_logo_logos-512.png" alt="" srcset="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                                                                    <div class="card-box height-100-p widget-style3">
                                                                        <div class="d-flex flex-wrap">
                                                                            <div class="widget-data">
                                                                               
                                                                                <div class="font-14 text-secondary weight-500">
                                                                                    PDF Download <i class="icon-copy fa fa-download" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-icon">
                                                                                <div class="icon" data-color="" >
                                                                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/27_Pdf_File_Type_Adobe_logo_logos-512.png" alt="" srcset="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                                                                    <div class="card-box height-100-p widget-style3">
                                                                        <div class="d-flex flex-wrap">
                                                                            <div class="widget-data">
                                                                               
                                                                                <div class="font-14 text-secondary weight-500">
                                                                                    PDF Download <i class="icon-copy fa fa-download" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-icon">
                                                                                <div class="icon">
                                                                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/27_Pdf_File_Type_Adobe_logo_logos-512.png" alt="" srcset="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                
                                                
                                                
                                                
                                                                
                                                
                                                            </div>
        
                                                         </div>
                                                    </div>
                                                 
                                                   
                                                   
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->
                    </div>
                </div>


            </div>
           
        </div>
    </div>
    </div>
</body>
   