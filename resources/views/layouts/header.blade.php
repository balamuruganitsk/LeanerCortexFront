

<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row ">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
			<div class="header-timer outerClickPooverHide d-flex cp" id="checkOut" data-original-title="" title="">
                <div class="time-hours">
                    <span>07</span></div>
                <div class="time-semicolon">:</div>
                <div class="time-minutes">
                    <span>40</span> 
                </div>
                <div class="h6 align-self-start mt-3 ml-1">PM</div>
            </div>
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							data-toggle="dropdown"
						>
						<i class="icon-copy fa fa-plus" aria-hidden="true"></i>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list quick"
						>
							<a class="dropdown-item" href="javascript:;" data-toggle="right-sidebar">
								<i class="dw dw-user1"></i>Quick Lead</a>
						</div>
					</div>
				</div>
				
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle = "right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>

				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon o">
							<i class="icon-copy fa fa-user" aria-hidden="true"></i>
							</span>
							<span class="user-name">Ross C. Lopez</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link mb" onclick="myFunction()">
					<i class="icon-copy bi bi-grid-fill"></i>
				</div>
			</div>
		</div>

		<style>
	.circ{

width: 35px;
height: 35px;
display: flex;
align-items: center;
justify-content: center;
background: rgba(255, 255, 255, 0.2) !important;
border-radius: 50%;
color: white;

}

.right-side-bar-info {
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
				}

				.right-side-bar-info-inner {
    height: 60px;
    display: flex;
    justify-content: center;
    padding: 12px 0;}

    .github-link.mb {
        display: none;
    }
    .des {
    display: none;
}

    @media(max-width:992px){
		div#checkOut {
    display: none !important;
}
        .right-sideicon {
    display: none;
}
.menu {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: #11101d; */
    font-size: 16px;
    /* font-family: sans-ferif; */
    z-index: 999;
    background-color: rgb(51 65 72);
    transition: 0.5s;
}
.chat-box .chat-desc ul, .pd-ltr-20 {
    padding: 20px 5px 0px 5px;
}
.github-link.mb {
                    display: flex;
                    align-items: center;
                    color: white;
                    font-size: 28px;
                }

                .header-right {
   
    padding-right: 25px;
}
.des {
    display: block !important;
}
.des {
    display: flex !important;
    align-items: center;
    color: white;
    padding-left: 15px;
    font-weight: 400;
}

.header {
   
    background: #334148;


    }}
</style>

<script>
    function myFunction() {
      var x = document.getElementById("mb-menus");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
</script>