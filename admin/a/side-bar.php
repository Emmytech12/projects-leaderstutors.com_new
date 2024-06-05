

<!-- <div class="side-nav-div animated fadeInLeft animated animated">
                    <ul class="side-bar-link">
					<li class="active-li" id="dashboard" onclick="_get_page('dashboard')"><i class="bi-speedometer2 li"></i> </li>
                    <li id="adminstrator" onclick="_get_page('view_all_staff')"><i class="bi-people-fill li"></i>
						<ul class="sub-li">
							<li>Adminstrator</li>
						</ul>
					
					</li>
                        <li><i class="bi-person-fill-add li"></i></li>
                        <li><i class="bi-pencil-square li"></i> </li>
                        <li><i class="bi-book li"></i> </li>
                        <li class="publish" onclick="_log_out('log-out')"><i class="bi-newspaper li"></i> </li>
                        <li><i class="bi-play li"></i> </li>
                        <li><i class="bi-newspaper li"></i> </li>
                        <li><i class="bi-question-square li"></i></li>
                        <li><i class="bi-gear li"></i> </li>
                        <li><i class="bi-box-arrow-right li"></i> </li>






						<li class="active-li" id="dashboard" onclick="_get_page('dashboard')"><i class="bi-speedometer2 li"></i> Dashboard</li>
                        <li id="adminstrator" onclick="_get_page('view_all_staff')"><i class="bi-people-fill li"></i> Adminstrator</li>
                        <li><i class="bi-person-fill-add li"></i> Active Users</li>
                        <li><i class="bi-pencil-square li"></i> Exams</li>
                        <li><i class="bi-book li"></i> Subject</li>
                        <li class="publish" onclick="_log_out('log-out')"><i class="bi-newspaper li"></i> Publish</li>
                       <li><i class="bi-play li"></i> Video</li>
                        <li><i class="bi-newspaper li"></i> Blog</li>
                        <li><i class="bi-question-square li"></i> FAQ's</li>
                        <li><i class="bi-gear li"></i> Settings</li>
                        <li><i class="bi-box-arrow-right li"></i> Log-Out</li> 
                        </ul>

    
</div>  -->


<div class="side-nav-div animated fadeInLeft">
	<div class="side-in-div">
        <div class="nav-div active-li" onClick="_get_page('dashboard', 'dashboard')" id="dashboard">
            <div class="icon"><i class="bi-speedometer2"></i></div> Dashboard
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </div>

        <script>_side_admin_check();</script>

        <div class="nav-div" onClick="_get_page('all_subject', 'subject')" id="subject">
            <div class="icon"><i class="bi-book"></i></div> Subject
            <div class="hidden" id="_subject"><i class="bi-book"></i> All Subjects</div>
        </div>

        <div class="nav-div" onClick="_get_page('all_class', 'class')" id="class">
            <div class="icon"><i class="bi-book"></i></div> Classes
            <div class="hidden" id="_class"><i class="bi-book"></i> All Classes</div>
        </div>

        <div class="nav-div" onClick="_get_page('all_department', 'department')" id="department">
            <div class="icon"><i class="bi-globe-europe-africa"></i></div> Department
            <div class="hidden" id="_department"><i class="bi-globe-europe-africa"></i> Department</div>
        </div>

        <div class="nav-div" onClick="_get_form('select_class_form', 'tutor')" id="tutor">
            <div class="icon" ><i class="bi-pencil-square"></i></div> Tutorial
            <div class="hidden" id="_tutor"><i class="bi-pencil-square"></i> Tutorial</div>
        </div>
    
        <div class="nav-div" onClick="_get_page('active_users', 'user')" id="user">
            <div class="icon"><i class="bi-people-fill"></i></div> Users
            <div class="hidden" id="_user"><i class="bi-people-fill"></i> Active Users</div>
        </div>           

        <div class="nav-div" onClick="_get_page('faqs', 'faqs')" id="faqs">
            <div class="icon"><i class="bi-question-square"></i></div> FAQS
            <div class="hidden" id="_faqs"><i class="bi-newspaper"></i> FAQS</div>
        </div>
	</div>
    
</div> 