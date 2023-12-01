<!doctype html>
<html>

<head>
<meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Filter:Scale</title>
    <link href='frontend/static/css/style.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="frontend/static/css/bootstrap-select.min.css">
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src='frontend/static/js/bootstrap-select.min.js'></script>
    <script src="frontend/static/js/main.js"></script>
</head>

<body class="link-scale filter-page">
    <div class="overlay"></div>
    <!--header area start-->
    <header>
        <div class="humburg">
            <i class="fas fa-bars" id="sidebar_btn"></i> <span>Residential</span>
        </div>
        <div class="left_area">
            <img src="" alt="Your Logo" /></a>
           <!-- <h6 style="color: red;align-items: right;font-weight: bold;" align="right">Beta</h6>-->
        </div>
    </header>
    <!--header area end-->

    <!--sidebar start-->
    <div class="sidebar">
    <div class="sidebar-inner">
    <ul>
        <li><a href="{% url 'how_it_works' %}"><img src="frontend/static/images/ex.png" /><span>How it works  <i class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="{% url 'help' %}"><img src="frontend/static/images/qs.png" /><span>Help <i class="fas fa-chevron-right"></i></span></a></li>
        <li> <a href="{% url 'settings' %}"><img src="frontend/static/images/st.png" /><span>Settings <i class="fas fa-chevron-right"></i></span></a></li>
        <li> <a href="{% url 'upload' %}"><img src="frontend/static/images/upload.png" /><span>Upload <i class="fas fa-chevron-right"></i></span></a></li>
    </ul>

    <ul class="contact">
        <h4>Contact Us</h4>
        <!-- <li><a href="tel:+447869744225"><i class="fas fa-phone-alt"></i> +44 7869744225</a></li> -->
        <li><a href="mailto:info@filtertoscale.com"><i class="far fa-envelope"></i>info@filtertoscale.com</a></li>
    </ul>

<div class="home-btm"><a href="{% url '' %}"><i class="fas fa-home"></i></a></div>
</div>
    </div>
    <!--sidebar end-->

    <div class="content"> 
    <div class="category-main">
   
    <div class="category-box act"
        style="background-image: url('frontend/media/images/190037_32516887_IMG_00_0000.jpeg');">
        <a href=""><span>Property</span></a>
    </div>
   
    <div class="category-box"
        style="background-image: url('frontend/media/images/190037_32516887_IMG_00_0000.jpeg');">
        <a>Inactive<span>Car</span></a>
    </div>
   
    <div class="category-box"
        style="background-image: url('frontend/media/images/190037_32516887_IMG_00_0000.jpeg');">
        <a>Coming Soon<span>Restaurant</span></a>
    </div>
    
</div>
    </div>
</body>

</html>