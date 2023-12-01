<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <!--<div class="nav-profile-image">-->
                <!--  <img src="/static/admin/assets/images/faces/face1.jpg" alt="profile" />-->
                <!--  <span class="login-status online"></span>-->
                <!--  change to offline or busy as needed-->
                <!--</div>-->
                <div class="nav-profile-text">
                    <img src="{% static 'images/link_mainlogo.png' %}" alt="profile" width="180px">
                </div>
            </a>
        </li>
        <li class="nav-item d-flex user-box">
            <span class="profile-img"><img
                    src="https://media.creativemornings.com/uploads/user/avatar/120448/profile-circle.png" alt="profile"
                    width="40px"></span>
           
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{% url 'dashboard' %}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{% url 'admin_index' %}">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Topics</span>
                <span class="count">(0)</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">User </span>
                <span class="count">(0)</span>
            </a>
        </li>




        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Upload </span>
                <span class="count">(0)</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Topics</span>
				<span class="count">2/12</span>
            </a>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Categories</span>
                <span class="count">3/9</span>
            </a>
        </li> -->


        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Roles</span>
                <span class="count">0</span>
            </a>
        </li> -->


        <li class="nav-item">
            <a class="nav-link" href="{% url 'database' %}">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Residential Data</span>
                <span class="count">(0)</span>
            </a>
        </li>


        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Algorithm</span>
                <span class="count">0</span>
            </a>
        </li> -->



        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Web sites</span>
				<span class="count">0</span>
            </a>
        </li>
		
		
		 <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Links</span>
				<span class="count">0</span>
            </a>
        </li> -->


        <li class="nav-item">
            <a class="nav-link" href="{% url 'rating' %}">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Ratings</span>
                <span class="count">(0)</span>
            </a>
        </li>


      <li class="nav-item">
            <a class="nav-link" href="{% url 'indexes' %}">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Residential</span>
				<span class="count">(0)</span>
            </a>
        </li>
		
		
		  <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Preview</span>
				<span class="count">0</span>
            </a>
        </li>
		
		<li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-square menu-icon"></i>
                <span class="menu-title">Support</span>
				<span class="count">0</span>
            </a>
        </li> -->




        <!--
		<li class="nav-item">-->
        <!--    <a class="nav-link" href="/static/admin/pages/tables/basic-table.html">-->
        <!--        <i class="mdi mdi-table-large menu-icon"></i>-->
        <!--        <span class="menu-title">Tables</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!--<li class="nav-item">-->
        <!--  <span class="nav-link" href="#">-->
        <!--    <span class="menu-title">Docs</span>-->
        <!--  </span>-->
        <!--</li>-->
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link" href="https://www.bootstrapdash.com/demo/breeze-free/documentation/documentation.html">-->
        <!--    <i class="mdi mdi-file-document-box menu-icon"></i>-->
        <!--    <span class="menu-title">Documentation</span>-->
        <!--  </a>-->
        <!--</li>-->
    </ul>
</nav>