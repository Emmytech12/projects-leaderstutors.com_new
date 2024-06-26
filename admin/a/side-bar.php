<div class="side-nav-div animated fadeInLeft">
	<div class="side-in-div">
        <div class="nav-div active-li" title="Dashboard" onClick="_get_page('dashboard', 'dashboard')" id="dashboard">
            <div class="icon"><i class="bi-speedometer2"></i></div> Dashboard
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </div>

        <script>_side_admin_check();</script>

        <div class="nav-div" title="Subject" onClick="_get_page('all_subject', 'subject')" id="subject">
            <div class="icon"><i class="bi-book"></i></div> Subject
            <div class="hidden" id="_subject"><i class="bi-book"></i> All Subjects</div>
        </div>

        <div class="nav-div" title="Classes" onClick="_get_page('all_class', 'class')" id="class">
            <div class="icon"><i class="bi-book"></i></div> Classes
            <div class="hidden" id="_class"><i class="bi-book"></i> All Classes</div>
        </div>

        <div class="nav-div" title="Department" onClick="_get_page('all_department', 'department')" id="department">
            <div class="icon"><i class="bi-globe-europe-africa"></i></div> Department
            <div class="hidden" id="_department"><i class="bi-globe-europe-africa"></i> Department</div>
        </div>

        <div class="nav-div" title="Tutorial" onClick="_get_form('select_class_form', 'tutor')" id="tutor">
            <div class="icon" ><i class="bi-pencil-square"></i></div> Tutorial
            <div class="hidden" id="_tutor"><i class="bi-pencil-square"></i> Tutorial</div>
        </div>

        <div class="nav-div" title="Agents" onClick="_get_page('active_agents', 'agents')" id="agents">
            <div class="icon"><i class="bi-person-check-fill"></i></div> Agents
            <div class="hidden" id="_agents"><i class="bi-person-check-fill"></i> Active Agents</div>
        </div>
    
        <div class="nav-div" title="Users" onClick="_get_page('active_users', 'user')" id="user">
            <div class="icon"><i class="bi-people-fill"></i></div> Users
            <div class="hidden" id="_user"><i class="bi-people-fill"></i> Active Users</div>
        </div>           
	</div>
</div> 