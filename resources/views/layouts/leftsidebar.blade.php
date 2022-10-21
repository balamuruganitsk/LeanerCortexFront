<div class="left-side-bar open">
			<div class="brand-logo">
				<a href="index.html">
					<img src="vendors/images/logo3.png" alt="" class="dark-logo">
					<img src="vendors/images/logo2.png" alt="" class="light-logo">
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll mCustomScrollbar _mCS_3 mCS_no_scrollbar"><div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
				<div class="sidebar-menu icon-style-1 icon-list-style-1">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-option="off">
								<span class="micon bi bi-house"></span><span class="mtext">Dashboard </span>
							</a>
							<ul class="submenu">
								<li><a href="Index-demo.html">Dashboard style 1</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-option="off">
								<span class="micon bi bi-textarea-resize"></span><span class="mtext">Lead Management</span>
							</a>
							<ul class="submenu">
								<li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Lead Settings</span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('leadsource') }}">Lead Source</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('leadstatus') }}">Lead Status</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('leadbranch') }}">Lead Branch</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('leadchecklist') }}">Lead Checklist</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('intake') }}">Intake</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </li>
								<li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Lead </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('leadregister') }}">Register Lead</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('bulk') }}"> Bulk Lead upload</a>
                                        </li>
                                        
                                       
                                        
                                    </ul>
                                </li>
								
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-option="off">
								<span class="micon bi bi-table"></span><span class="mtext">User Management</span>
							</a>
							<ul class="submenu">
								<li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-table"></span><span class="mtext">User Settings</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('userrole') }}">Role</a></li>
                                        <li><a href="{{ route('userpermission') }}">Permission</a></li>
                                        <li><a href="{{ route('user') }}">User</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-table"></span><span class="mtext">Location Settings</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('country') }}">Country</a></li>
                                        <li><a href="{{ route('state') }}">State</a></li>
                                        <li><a href="{{ route('district') }}">Distric</a></li>
                                        <li><a href="{{ route('city') }}">City</a></li>
                                        <li><a href="{{ route('address') }}">Address TYPE</a></li>
                                    </ul>
                                </li>
							</ul>
						</li>
                        <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-option="off">
								<span class="micon bi bi-textarea-resize"></span><span class="mtext">Admission Manager</span>
							</a>
							<ul class="submenu">
								<li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Admission  Settings</span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('adsopkeywords') }}">Sop Keywords</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adsoptopics') }}">Sop Topics</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adsopquestions') }}">Sop Questions</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adsopattribute') }}">Course Attributes</a>
                                        </li>
                                           
                                    </ul>
                                </li>
								<li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Admission </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('studentenroll') }}">Student Enroll</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sop') }}"> SOP</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('questionaries') }}"> Questionaries</a>
                                        </li>   
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Sample Student </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('studentlogin') }}">Student Login</a>
                                        </li>
                                          
                                    </ul>
                                </li>
								
							</ul>
						</li>
						
						
					</ul>
				</div>
			</div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
		</div>