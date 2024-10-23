<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/bootstrap-icons.css" rel="stylesheet">

<link href="assets/css/all.min.css" rel="stylesheet">

<link href="assets/css/fontawesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link href="assets/css/boxicons.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/preloader.css">
<link rel="stylesheet" href="assets/css/style2.css">

<title>Around Tech Solutions</title>
<link rel="icon" href="assets/img/sm-logo.svg" type="image/gif" sizes="20x20">
</head>
<body class="home-dark2 tt-magic-cursor">

    <div class="preloader">
        <!-- <div id="particles-background" class="vertical-centered-box"></div> -->
        <div id="particles-foreground" class="vertical-centered-box"></div>
        <div class="vertical-centered-box">
            <div class="loading-container">
                <button class="btn btn-dark loading-btn" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                    <span role="status">Wait...</span>
                </button>
            </div>
            <style>
                .preloader {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    position: relative;
}

.vertical-centered-box {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 200%;
    height: 100%;
}

.loading-container {
    border-radius: 50%; /* Makes the container round */
    width: 200px; /* Adjust size */
    height: 200px;
    background-color: #343a40; /* Dark background */
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Soft shadow */
}

.loading-btn {
    border-radius: 50%; /* Makes the button round */
    width: 100px; /* Adjust size */
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    border: none;
    background-color: transparent; /* Button inside matches the container */
    padding: 0;
}

.spinner-grow {
    width: 2rem;
    height: 2rem;
}

.loading-btn[disabled] {
    opacity: 0.8;
}

svg {
    margin-top: 20px; /* Space between the button and the SVG */
}

            </style>
        </div>
    </div>
    
    

<!-- <div class="header-sidebar">
<div class="siderbar-top">
<div class="sidebar-log">
<a href="index.html"><img src="assets/img/logo.svg" alt></a>
</div>
<div class="close-btn">
<i class="bi bi-x-lg"></i>
</div>
</div>
<div class="sidebar-content">
<p>Around Tech Solutions provides innovative, cost-effective software development services tailored to clients' budgets and unique needs. Our professional offerings span ERP, CRM, e-commerce, and blockchain technologies, with a focus on building long-term partnerships.</p>
</div>
<div class="address-card">
<div class="content">
<div class="informations">
<div class="single-info">
<div class="icon">
<i class="fas fa-map-marker-alt"></i>
</div>
<div class="info">
<p>A 929 , 9th floor
Bhutani Alphathum , Sector-90
Noida 201305</p>
</div>
</div>
<div class="single-info">
<div class="icon">
<i class="fas fa-phone-alt"></i>
</div>
<div class="info">
<a href="tel:05661111985">+91 8979369386</a>
 <a href="tel:06571111576">+880 657 1111 576</a>
</div>
</div>
<div class="single-info">
<div class="icon">
<i class="far fa-envelope"></i>
</div>
<div class="info">
<a href="#"><span class="__cf_email__" data-cfemail="d3babdb5bc93a0a6a3a3bca1a7fdb0bcbe">[email&#160;protected]</span></a>
</div>
</div>
</div>
</div>

</div>
<div class="follow-area">
<h5 class="blog-widget-title">Follow Us</h5>
<p class="para">Follow us on Social Network</p>
<div class="blog-widget-body">
<ul class="follow-list d-flex flex-row align-items-start gap-4">
<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
<li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
<li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest"></i></a></li>
</ul>
</div>
</div>
</div> -->

<!-- <header class="header-area2 one">
<div class="header-logo">
<a href="index.html"><img alt="image" class="img-fluid" src="assets/img/logo.svg"></a>
</div>
<div class="main-menu">
<div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
<div class="mobile-logo-wrap">
<a href="index.html"><img alt="image" src="assets/img/logo.svg"></a>
</div>
</div>
<ul class="menu-list">
<li><a href="index.html" >Home</a><i ></i></li>
<li><a href="about.html">About</a></li>
<li><a href="service4.html" >Services</a><i ></i></li>
<li><a href="project-masonary.html" >Portfolio</a><i></i></li>
<li>    <a href="blog-standard.html" >Blog</a><i></i></li>
<li><a href="contact.html" >Contact</a><i></i></li>
<li style="padding-left:120px;;"><a href="./admin/page-login.html" ><img src="assets/img/home-3/star.svg" alt=""></a><i></i></li>
</ul>
<div class="d-lg-none d-block">
<form class="mobile-menu-form">
<div class="hotline pt-30">
<div class="hotline-icon">
<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
<path d="M20.5488 16.106C20.0165 15.5518 19.3745 15.2554 18.694 15.2554C18.0191 15.2554 17.3716 15.5463 16.8173 16.1005L15.0833 17.8291C14.9406 17.7522 14.7979 17.6809 14.6608 17.6096C14.4632 17.5108 14.2766 17.4175 14.1175 17.3187C12.4932 16.2871 11.0171 14.9426 9.6013 13.2031C8.91536 12.3361 8.45441 11.6063 8.11968 10.8655C8.56965 10.4539 8.9867 10.0259 9.39277 9.61431C9.54642 9.46066 9.70007 9.30152 9.85372 9.14787C11.0061 7.9955 11.0061 6.50291 9.85372 5.35054L8.35564 3.85246C8.18553 3.68234 8.00993 3.50674 7.8453 3.33115C7.51606 2.99092 7.17034 2.63972 6.81366 2.31047C6.28137 1.78368 5.64483 1.50381 4.97535 1.50381C4.30588 1.50381 3.65836 1.78368 3.10961 2.31047C3.10412 2.31596 3.10412 2.31596 3.09864 2.32145L1.23289 4.20365C0.530497 4.90605 0.129911 5.7621 0.0421114 6.75533C-0.089588 8.35768 0.382335 9.85027 0.744508 10.827C1.63348 13.2251 2.96145 15.4475 4.94243 17.8291C7.34594 20.699 10.2378 22.9653 13.5413 24.5622C14.8034 25.1603 16.4881 25.8682 18.3703 25.9889C18.4855 25.9944 18.6062 25.9999 18.716 25.9999C19.9836 25.9999 21.0482 25.5445 21.8823 24.639C21.8878 24.628 21.8987 24.6226 21.9042 24.6116C22.1896 24.2659 22.5188 23.9531 22.8645 23.6184C23.1005 23.3934 23.3419 23.1574 23.5779 22.9105C24.1212 22.3453 24.4065 21.6868 24.4065 21.0118C24.4065 20.3314 24.1157 19.6783 23.5614 19.1296L20.5488 16.106ZM22.5133 21.8843C22.5078 21.8843 22.5078 21.8898 22.5133 21.8843C22.2993 22.1148 22.0798 22.3233 21.8439 22.5538C21.4872 22.894 21.125 23.2507 20.7848 23.6513C20.2305 24.2439 19.5775 24.5238 18.7215 24.5238C18.6392 24.5238 18.5514 24.5238 18.4691 24.5183C16.8393 24.414 15.3247 23.7775 14.1888 23.2342C11.0829 21.7307 8.35564 19.596 6.08931 16.8907C4.21808 14.6354 2.96694 12.5501 2.13833 10.3112C1.62799 8.94484 1.44142 7.88026 1.52373 6.87606C1.57861 6.23402 1.82554 5.70174 2.281 5.24628L4.15223 3.37504C4.42112 3.12262 4.70647 2.98543 4.98633 2.98543C5.33204 2.98543 5.6119 3.19396 5.7875 3.36956C5.79299 3.37504 5.79847 3.38053 5.80396 3.38602C6.1387 3.69881 6.45697 4.02257 6.79171 4.36828C6.96182 4.54388 7.13742 4.71948 7.31302 4.90056L8.8111 6.39865C9.39277 6.98032 9.39277 7.51809 8.8111 8.09976C8.65196 8.2589 8.49831 8.41804 8.33918 8.57169C7.87823 9.04361 7.43923 9.48261 6.96182 9.91063C6.95085 9.92161 6.93987 9.92709 6.93438 9.93807C6.46246 10.41 6.55026 10.8709 6.64903 11.1837C6.65452 11.2002 6.66001 11.2167 6.6655 11.2331C7.05511 12.177 7.60385 13.0659 8.43795 14.125L8.44344 14.1305C9.95798 15.9962 11.5548 17.4504 13.3163 18.5644C13.5413 18.7071 13.7718 18.8223 13.9913 18.932C14.1888 19.0308 14.3754 19.1241 14.5345 19.2229C14.5565 19.2339 14.5784 19.2503 14.6004 19.2613C14.787 19.3546 14.9626 19.3985 15.1436 19.3985C15.5991 19.3985 15.8845 19.1131 15.9777 19.0198L17.8545 17.1431C18.041 16.9566 18.3374 16.7316 18.6831 16.7316C19.0233 16.7316 19.3032 16.9456 19.4733 17.1322C19.4788 17.1376 19.4788 17.1376 19.4842 17.1431L22.5078 20.1667C23.0731 20.7265 23.0731 21.3026 22.5133 21.8843Z">
</path>
<path d="M14.0512 6.18495C15.4889 6.4264 16.7949 7.10685 17.8375 8.14947C18.8802 9.19209 19.5551 10.4981 19.8021 11.9358C19.8624 12.298 20.1752 12.5504 20.5319 12.5504C20.5758 12.5504 20.6142 12.5449 20.6581 12.5395C21.0642 12.4736 21.3331 12.0895 21.2672 11.6834C20.9709 9.94387 20.1478 8.35799 18.8911 7.10136C17.6345 5.84473 16.0486 5.0216 14.3091 4.72528C13.903 4.65943 13.5244 4.92832 13.4531 5.3289C13.3817 5.72949 13.6451 6.1191 14.0512 6.18495Z">
</path>
<path d="M25.9707 11.4691C25.4823 8.60468 24.1324 5.99813 22.0581 3.92387C19.9838 1.8496 17.3773 0.49968 14.5128 0.011294C14.1122 -0.0600432 13.7336 0.214331 13.6623 0.614917C13.5964 1.02099 13.8653 1.39963 14.2714 1.47096C16.8285 1.90447 19.1607 3.11721 21.0155 4.96649C22.8702 6.82125 24.0775 9.15343 24.511 11.7106C24.5714 12.0728 24.8841 12.3252 25.2408 12.3252C25.2847 12.3252 25.3231 12.3197 25.367 12.3142C25.7676 12.2539 26.042 11.8697 25.9707 11.4691Z">
</path>
</svg>
</div>
<div class="hotline-info">
<span>Call Us Now</span>
<h6><a href="tel:29658718617">+91 89793 69386</a></h6>
</div>
</div>
<div class="email pt-20 d-flex align-items-center">
<div class="email-icon">
<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_461_205)">
<path d="M23.5117 3.30075H2.38674C1.04261 3.30075 -0.0507812 4.39414 -0.0507812 5.73827V20.3633C-0.0507812 21.7074 1.04261 22.8008 2.38674 22.8008H23.5117C24.8558 22.8008 25.9492 21.7074 25.9492 20.3633V5.73827C25.9492 4.39414 24.8558 3.30075 23.5117 3.30075ZM23.5117 4.92574C23.6221 4.92574 23.7271 4.94865 23.8231 4.98865L12.9492 14.4131L2.07526 4.98865C2.17127 4.9487 2.27629 4.92574 2.38668 4.92574H23.5117ZM23.5117 21.1757H2.38674C1.93844 21.1757 1.57421 20.8116 1.57421 20.3632V6.70547L12.4168 16.1024C12.57 16.2349 12.7596 16.3008 12.9492 16.3008C13.1388 16.3008 13.3285 16.2349 13.4816 16.1024L24.3242 6.70547V20.3633C24.3242 20.8116 23.96 21.1757 23.5117 21.1757Z">
</path>
</g>
</svg>
</div>
<div class="email-info">
<span>Email Now</span>
<h6><a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#8aeff2ebe7fae6efcaede7ebe3e6a4e9e5e7"><span class="__cf_email__" data-cfemail="0d68756c607d61684d6a606c6461236e6260">[email&#160;protected]</span></a></h6>
</div>
</div>
</form>
<div class="header-btn5">
<a class="primary-btn3" href="login.html">Login</a>
</div>
</div>
</div>
<div class="nav-right d-flex jsutify-content-end align-items-center">
<div class="sidebar-btn2">
<img src="assets/img/home-3/sidebar-btn.svg" alt>
</div>
<div class="sidebar-button mobile-menu-btn ">
<span></span>
</div>
</div>
</header> -->

<!-- Header Section Starts -->
<?php include './assets/components/header.php'; ?>  

<!-- Header Section Ends -->

<div class="banner-area3">
<div class="scroll-down">
<a href="#home3-partner-area">
Scroll Down
<span>
<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12" />
</svg>
</span>
</a>
</div>
<div class="banner-vector">
<img class="img-fluid" src="assets/img/home-3/banner-vector.png" alt>
</div>
<div class="swiper-pagination1"></div>
<div class="social-area">
<ul>
<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
<li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
<li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
</ul>
</div>
<div class="swiper banner3-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="banner-wrapper">
<div class="banner-content">
<h1>"Innovating Tomorrow's Business, Today."</h1>
<p>Around-Tech provide a full spectrum of technology solutions that cover every aspect of web and game development. With expertise in front-end and back-end development, as well as game development, we craft tailored solutions to help businesses and individuals thrive in the digital world.</p>
<div class="banner-btn-group">
<a class="primary-btn3" href="contact.html">Free Consultancy</a>
<a class="primary-btn4" href="about.html">
<span>
<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12" />
</svg>
</span>
Explore More
</a>
</div>
</div>
<div class="banner-image magnetic-item">
<img class="img-fluid" src="assets/img/home-3/home3-banner-img.png" alt>
</div>
<div class="banner-video-area">
<div class="video-area">
<a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&amp;ab_channel=JoomlaTemplate">
<svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
</svg>
</a>
<img class="video-img" src="assets/img/home-3/home3-banner-video.png" alt>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="banner-wrapper">
<div class="banner-content">
<h1>"Innovative Solutions for a Smarter Future."</h1>
<p>Around Tech Solutions takes innovative ideas and converts them into actionable strategies that directly contribute to business growth. It emphasizes the company's ability to translate vision into results.</p>
<div class="banner-btn-group">
<a class="primary-btn3" href="contact.html">Free Consultancy</a>
<a class="primary-btn4" href="about.html">
<span>
<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12" />
</svg>
</span>
Explore More
</a>
</div>
</div>
<div class="banner-image magnetic-item">
<img class="img-fluid" src="assets/img/home-3/home3-banner-img3.png" alt>
</div>
<div class="banner-video-area">
<div class="video-area">
<a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&amp;ab_channel=JoomlaTemplate">
<svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
</svg>
</a>
<img class="video-img" src="assets/img/home-3/home3-banner-video.png" alt>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="banner-wrapper">
<div class="banner-content">
<h1>"Driving Business Forward with Cutting-Edge Solutions."</h1>
<p>Around Tech Solutions’ role in pushing businesses ahead of the competition by offering advanced, cutting-edge technology solutions designed to propel growth and efficiency.</p>
<div class="banner-btn-group">
<a class="primary-btn3" href="contact.html">Free Consultancy</a>
<a class="primary-btn4" href="about.html">
<span>
<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12" />
</svg>
</span>
Explore More
</a>
</div>
</div>
<div class="banner-image magnetic-item">
<img class="img-fluid" src="assets/img/home-3/home3-banner-img2.png" alt>
</div>
<div class="banner-video-area">
<div class="video-area">
<a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&amp;ab_channel=JoomlaTemplate">
<svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
</svg>
</a>
<img class="video-img" src="assets/img/home-3/home3-banner-video.png" alt>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Oue Clients Section Starts -->
<div class="home3-partner-area" id="home3-partner-area">
<div class="container-fluid">
<div class="row g-4">
<div class="col-lg-3">
<div class="partner-title">
<h3>Our Collaborators</h3>
</div>
</div>
<div class="col-lg-9">
<div class="partner-wrapper">
<div class="marquee_text">
<img src="assets/img/home-3/partner-01.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-02.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-03.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-04.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-05.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-01.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-02.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-03.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-04.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-05.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-01.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-02.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-03.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-04.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
<img src="assets/img/home-3/partner-05.svg" alt>
<img src="assets/img/home-3/star.svg" alt>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Our Clients Section Ends -->

<!-- why Choose US Section Starts -->
<div class="home6-choose-section sec-mar">
    <div class="container">
    <div class="row">
    <div class="choose-top">
    <div class="row">
    <div class="col-lg-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="choose-title">
    <span>Why Choose Us</span>
    <h2>Unlock the potential of your business.</h2>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="choose-right-img magnetic-item">
    <img class="img-fluid" src="assets/img/home-6/choose-img-1.png" alt>
    </div>
    </div>
    </div>
    </div>
    <div class="choose-btm">
    <div class="row  g-lg-4 gy-5">
    <div class="col-lg-7">
    <div class="choose-left-content">
    <div class="vectors">
    <img class="choose-vec-top-r" src="assets/img/home-6/choose-vec-top-r.svg" alt>
    <img class="choose-vec-btm-l" src="assets/img/home-6/choose-vec-btm-l.svg" alt>
    </div>
    <div class="icon">
    <img src="assets/img/logo.svg" alt>
    </div>
    <h4> Creative IT Agency And Solutions <br>
    <span>Since 2021.</span></h4>
    <p>Around Tech Solutions is dedicated to helping you grow your business through innovative, technology-driven strategies.</p>
    <div class="sl">
    <h2>#1</h2>
    </div>
    <div class="about-btn">
    <a href="about.html">
    <svg width="7" height="7" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
    </svg>
    About More
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="choose-feature">
    <ul>
    <li>
    <div class="single-feature">
    <div class="progress">
    <h3><span class="counter">70</span>%</h3>
    </div>
    <div class="content">
    <h4>Strategy</h4>
    <p>"Strategies are professional solutions developed by businesses to meet specific needs or solve problems for their customers. These strategies can be customized to fit various budgets, providing tailored approaches for clients of all sizes."</p>
    </div>
    </div>
    </li>
    <li>
    <div class="single-feature">
    <div class="progress">
    <h3><span class="counter">98</span>%</h3>
    </div>
    <div class="content">
    <h4>Audience</h4>
    <p>We prioritize our clients’ success by focusing on their objectives and feedback. Our collaborative process ensures that clients are involved every step of the way, fostering a strong partnership that leads to effective results.</p>
    </div>
    </div>
    </li>
    <li>
    <div class="single-feature">
    <div class="progress">
    <h3><span class="counter">85</span>%</h3>
    </div>
    <div class="content">
    <h4>Portfolio</h4>
    <p>With a portfolio of successful projects and satisfied clients, we have demonstrated our ability to deliver results. Our commitment to excellence is reflected in the positive feedback and endorsements from our partners.</p>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<!--  Why Choose Us Section Ends -->

<!-- Services Section Starts -->
<div class="home3-solution-section sec-mar">
<div class="container">
<div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
<div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
<div class="section-title-3">
<h2>Our Services</h2>
<p>At Around Tech, our core objectives are centered on delivering cutting-edge solutions, and fostering long-term success for our client.
    Deliver Innovative, High-Quality Solutions,
    Client-Centric Approach,
    Promote Technological Growth,
    Foster Collaboration and Innovation</p>
</div>
<div class="swiper-btn-group">
<div class="swiper-btn prevbtn1">
<i class="bi bi-arrow-left"></i>
</div>
<div class="swiper-btn nextbtn1">
<i class="bi bi-arrow-right"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="swiper home3-solution-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="solution-card">
<div class="icon">
<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<path d="M23.6731 41.5094C23.438 41.5095 23.2106 41.4256 23.0318 41.2728L16.6219 35.8148C16.5126 35.7218 16.4249 35.6062 16.3648 35.476C16.3046 35.3458 16.2734 35.204 16.2734 35.0606C16.2734 34.9171 16.3046 34.7754 16.3648 34.6452C16.4249 34.5149 16.5126 34.3993 16.6219 34.3063L23.0318 28.8483C23.2318 28.678 23.4912 28.594 23.7531 28.6149C24.0149 28.6358 24.2577 28.7599 24.4281 28.9598C24.7824 29.3767 24.7326 30.0018 24.3159 30.3561L18.7921 35.0603L24.3159 39.7643C24.4704 39.8957 24.5808 40.0714 24.6322 40.2676C24.6837 40.4637 24.6737 40.671 24.6036 40.8613C24.5335 41.0516 24.4066 41.2158 24.2402 41.3317C24.0738 41.4476 23.876 41.5097 23.6731 41.5094ZM36.3269 41.5094C36.0467 41.5094 35.7682 41.3911 35.5725 41.1606C35.4022 40.9606 35.3183 40.7012 35.3392 40.4394C35.3602 40.1775 35.4842 39.9347 35.6842 39.7643L41.208 35.0603L35.6842 30.3561C35.4914 30.1838 35.3736 29.9429 35.356 29.6848C35.3384 29.4268 35.4224 29.1722 35.5901 28.9753C35.7577 28.7784 35.9958 28.6549 36.2533 28.6311C36.5108 28.6074 36.7674 28.6853 36.9682 28.8482L43.3782 34.3062C43.4874 34.3992 43.5751 34.5148 43.6353 34.645C43.6955 34.7752 43.7266 34.917 43.7266 35.0604C43.7266 35.2039 43.6955 35.3456 43.6353 35.4759C43.5751 35.6061 43.4874 35.7217 43.3782 35.8147L36.9682 41.2727C36.7895 41.4255 36.5622 41.5094 36.3271 41.5094H36.3269ZM27.7309 45.6033C27.5834 45.6035 27.4377 45.5707 27.3044 45.5074C27.1711 45.444 27.0537 45.3517 26.9607 45.2372C26.8676 45.1227 26.8014 44.9888 26.7667 44.8454C26.732 44.702 26.7298 44.5526 26.7602 44.4083L30.755 25.4409C30.8092 25.1838 30.9632 24.9588 31.1833 24.8153C31.4034 24.6718 31.6715 24.6217 31.9286 24.6758C32.1857 24.73 32.4107 24.8841 32.5542 25.1042C32.6977 25.3243 32.7478 25.5924 32.6937 25.8494L28.6989 44.8167C28.6521 45.0388 28.5304 45.2382 28.3542 45.3814C28.178 45.5246 27.958 45.603 27.7309 45.6033Z" />
<path d="M53.3491 55.9367H6.65094C2.98387 55.9367 0 52.9534 0 49.2858V9.65094C0 5.98387 2.98387 3 6.65094 3H53.3491C57.0161 3 60 5.98387 60 9.65094V49.2858C60 52.9534 57.0161 55.9367 53.3491 55.9367ZM6.65094 4.98113C4.07618 4.98113 1.98113 7.07618 1.98113 9.65094V49.2858C1.98113 51.8605 4.07618 53.9556 6.65094 53.9556H53.3491C55.9238 53.9556 58.0189 51.8605 58.0189 49.2858V9.65094C58.0189 7.07618 55.9238 4.98113 53.3491 4.98113H6.65094Z" />
<path d="M59.0094 18.8618H0.990565C0.73075 18.8574 0.483062 18.7511 0.300878 18.5658C0.118694 18.3805 0.0166016 18.1311 0.0166016 17.8712C0.0166016 17.6114 0.118694 17.3619 0.300878 17.1766C0.483062 16.9913 0.73075 16.885 0.990565 16.8806H59.0094C59.2692 16.885 59.5169 16.9913 59.6991 17.1766C59.8813 17.3619 59.9834 17.6114 59.9834 17.8712C59.9834 18.1311 59.8813 18.3805 59.6991 18.5658C59.5169 18.7511 59.2692 18.8574 59.0094 18.8618ZM16.9248 14.1218C15.1968 14.1218 13.79 12.7149 13.79 10.9869C13.79 9.25852 15.1968 7.8522 16.9248 7.8522C18.6532 7.8522 20.0595 9.25852 20.0595 10.9869C20.0595 12.7149 18.6532 14.1218 16.9248 14.1218ZM16.9248 9.83333C16.289 9.83333 15.7711 10.3507 15.7711 10.9869C15.7711 11.6231 16.289 12.1406 16.9248 12.1406C17.561 12.1406 18.0784 11.6233 18.0784 10.9869C18.0784 10.3506 17.561 9.83333 16.9248 9.83333ZM7.2934 14.0914C5.56472 14.0914 4.15854 12.685 4.15854 10.9566C4.15854 9.2281 5.56472 7.82178 7.29325 7.82178C9.02179 7.82178 10.428 9.2281 10.428 10.9566C10.428 12.685 9.02193 14.0914 7.2934 14.0914ZM7.2934 9.80291C6.65759 9.80291 6.13967 10.3208 6.13967 10.9566C6.13967 11.5929 6.65759 12.1102 7.29325 12.1102C7.92948 12.1102 8.44684 11.5929 8.44684 10.9566C8.44684 10.3208 7.92962 9.80291 7.2934 9.80291ZM26.5562 14.1516C24.8284 14.1516 23.4221 12.7453 23.4221 11.0168C23.4221 9.28895 24.8283 7.88263 26.5562 7.88263C28.2848 7.88263 29.6909 9.28881 29.6909 11.0168C29.6909 12.7453 28.2848 14.1516 26.5562 14.1516ZM26.5562 9.86319C25.9206 9.86319 25.4032 10.3806 25.4032 11.0168C25.4032 11.653 25.9206 12.1705 26.5562 12.1705C27.1925 12.1705 27.7098 11.653 27.7098 11.0168C27.7098 10.3806 27.1925 9.86319 26.5562 9.86319Z" />
</svg>
</div>
<div class="solution-content">
<h4><a href="service-details.html">Web Development</a></h4>
<p>We combine creativity, functionality, and the latest web design trends to deliver websites that stand out visually and perform exceptionally.</p>
<ul class="solution-feature">
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Full-stack development
</li>
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Responsive web design
</li>
</ul>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="solution-card">
<div class="icon">
<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1453_763)">
<path d="M25.2665 33.04C24.8998 33.04 24.5998 33.34 24.5998 33.7067V46.3734H20.6665C20.2998 46.3734 19.9998 46.6734 19.9998 47.04V53.7867C18.6665 54.0934 17.6665 55.28 17.6665 56.7067C17.6665 58.36 19.0132 59.7067 20.6665 59.7067C22.3198 59.7067 23.6665 58.36 23.6665 56.7067C23.6665 55.28 22.6665 54.0934 21.3332 53.7867V47.7067H25.2665C25.6332 47.7067 25.9332 47.4067 25.9332 47.04V33.7067C25.9332 33.34 25.6332 33.04 25.2665 33.04ZM22.3332 56.7067C22.3332 57.1487 22.1576 57.5727 21.845 57.8852C21.5325 58.1978 21.1085 58.3734 20.6665 58.3734C20.2245 58.3734 19.8006 58.1978 19.488 57.8852C19.1754 57.5727 18.9998 57.1487 18.9998 56.7067C18.9998 56.2647 19.1754 55.8408 19.488 55.5282C19.8006 55.2156 20.2245 55.04 20.6665 55.04C21.1085 55.04 21.5325 55.2156 21.845 55.5282C22.1576 55.8408 22.3332 56.2647 22.3332 56.7067Z" />
<path d="M12 53.7867V43.7067H20.6667C21.0333 43.7067 21.3333 43.4067 21.3333 43.04V33.7067C21.3333 33.34 21.0333 33.04 20.6667 33.04C20.3 33.04 20 33.34 20 33.7067V42.3734H5.92C5.61333 41.04 4.42667 40.04 3 40.04C1.34667 40.04 0 41.3867 0 43.04C0 44.6934 1.34667 46.04 3 46.04C4.42667 46.04 5.61333 45.04 5.92 43.7067H10.6667V53.7867C9.33333 54.0934 8.33333 55.28 8.33333 56.7067C8.33333 58.36 9.68 59.7067 11.3333 59.7067C12.9867 59.7067 14.3333 58.36 14.3333 56.7067C14.3333 55.28 13.3333 54.0934 12 53.7867ZM3 44.7067C2.55797 44.7067 2.13405 44.5311 1.82149 44.2186C1.50893 43.906 1.33333 43.4821 1.33333 43.04C1.33333 42.598 1.50893 42.1741 1.82149 41.8615C2.13405 41.549 2.55797 41.3734 3 41.3734C3.44203 41.3734 3.86595 41.549 4.17851 41.8615C4.49107 42.1741 4.66667 42.598 4.66667 43.04C4.66667 43.4821 4.49107 43.906 4.17851 44.2186C3.86595 44.5311 3.44203 44.7067 3 44.7067ZM11.3333 58.3734C10.8913 58.3734 10.4674 58.1978 10.1548 57.8852C9.84226 57.5727 9.66667 57.1487 9.66667 56.7067C9.66667 56.2647 9.84226 55.8408 10.1548 55.5282C10.4674 55.2156 10.8913 55.04 11.3333 55.04C11.7754 55.04 12.1993 55.2156 12.5118 55.5282C12.8244 55.8408 13 56.2647 13 56.7067C13 57.1487 12.8244 57.5727 12.5118 57.8852C12.1993 58.1978 11.7754 58.3734 11.3333 58.3734Z" />
<path d="M57.0003 40.04C55.5737 40.04 54.387 41.04 54.0803 42.3733H47.3337V38.3733H49.907C55.4737 38.3733 60.0003 33.8867 60.0003 28.3733C60.0003 24.3 57.527 20.8 53.9937 19.24C53.9203 9.68 45.967 1 36.9003 1C31.0137 1 25.5203 4.04 22.407 8.96667C20.8438 7.71712 18.9015 7.03756 16.9003 7.04C11.827 7.04 8.03366 12.3867 8.00033 17.0933C3.72033 18.6667 0.666992 22.6733 0.666992 27.3733C0.666992 33.1533 5.28033 37.8933 11.1203 38.3333C11.187 38.36 11.2603 38.3733 11.3337 38.3733H16.027C16.3937 38.3733 16.6937 38.0733 16.6937 37.7067C16.6937 37.34 16.3937 37.04 16.027 37.04H12.0003C6.48699 37.04 2.00033 32.7067 2.00033 27.3733C2.00033 22.04 6.48699 17.7067 12.0003 17.7067C12.367 17.7067 12.667 17.4067 12.667 17.04C12.667 16.6733 12.367 16.3733 12.0003 16.3733C11.087 16.3733 10.207 16.4867 9.35366 16.6867C9.59366 11.96 13.4403 8.37333 16.9003 8.37333C18.8937 8.37333 20.7737 9.14667 22.1937 10.5533C22.4537 10.8133 22.8803 10.8133 23.1337 10.5533C23.2803 10.4067 23.3337 10.2067 23.3137 10.02C26.147 5.28 31.3337 2.34 36.8937 2.34C45.1003 2.34 52.3137 10.1067 52.647 18.7667C51.7737 18.52 50.8537 18.38 49.9003 18.38C49.5337 18.38 49.2337 18.68 49.2337 19.0467C49.2337 19.4133 49.5337 19.7133 49.9003 19.7133C54.7337 19.7133 58.6603 23.6 58.6603 28.38C58.6603 33.16 54.727 37.0467 49.9003 37.0467H43.9937C43.627 37.0467 43.327 37.3467 43.327 37.7133C43.327 38.08 43.627 38.38 43.9937 38.38H45.9937V43.0467C45.9937 43.4133 46.2937 43.7133 46.6603 43.7133H54.0737C54.3803 45.0467 55.567 46.0467 56.9937 46.0467C58.647 46.0467 59.9937 44.7 59.9937 43.0467C59.9937 41.3933 58.647 40.0467 56.9937 40.0467L57.0003 40.04ZM57.0003 44.7067C56.5583 44.7067 56.1344 44.5311 55.8218 44.2185C55.5093 43.906 55.3337 43.482 55.3337 43.04C55.3337 42.598 55.5093 42.174 55.8218 41.8615C56.1344 41.5489 56.5583 41.3733 57.0003 41.3733C57.4424 41.3733 57.8663 41.5489 58.1788 41.8615C58.4914 42.174 58.667 42.598 58.667 43.04C58.667 43.482 58.4914 43.906 58.1788 44.2185C57.8663 44.5311 57.4424 44.7067 57.0003 44.7067Z" />
<path d="M30.6667 53.7867V33.7067C30.6667 33.34 30.3667 33.04 30 33.04C29.6333 33.04 29.3333 33.34 29.3333 33.7067V53.7867C28 54.0934 27 55.28 27 56.7067C27 58.36 28.3467 59.7067 30 59.7067C31.6533 59.7067 33 58.36 33 56.7067C33 55.28 32 54.0934 30.6667 53.7867ZM30 58.3734C29.558 58.3734 29.134 58.1978 28.8215 57.8852C28.5089 57.5727 28.3333 57.1487 28.3333 56.7067C28.3333 56.2647 28.5089 55.8408 28.8215 55.5282C29.134 55.2156 29.558 55.04 30 55.04C30.442 55.04 30.866 55.2156 31.1785 55.5282C31.4911 55.8408 31.6667 56.2647 31.6667 56.7067C31.6667 57.1487 31.4911 57.5727 31.1785 57.8852C30.866 58.1978 30.442 58.3734 30 58.3734ZM40 53.7867V49.7067C40 49.4667 39.8733 49.2467 39.6667 49.1267L35.3333 46.6534V33.7067C35.3333 33.34 35.0333 33.04 34.6667 33.04C34.3 33.04 34 33.34 34 33.7067V47.04C34 47.28 34.1267 47.5 34.3333 47.62L38.6667 50.0934V53.7867C37.3333 54.0934 36.3333 55.28 36.3333 56.7067C36.3333 58.36 37.68 59.7067 39.3333 59.7067C40.9867 59.7067 42.3333 58.36 42.3333 56.7067C42.3333 55.28 41.3333 54.0934 40 53.7867ZM39.3333 58.3734C38.8913 58.3734 38.4674 58.1978 38.1548 57.8852C37.8423 57.5727 37.6667 57.1487 37.6667 56.7067C37.6667 56.2647 37.8423 55.8408 38.1548 55.5282C38.4674 55.2156 38.8913 55.04 39.3333 55.04C39.7754 55.04 40.1993 55.2156 40.5118 55.5282C40.8244 55.8408 41 56.2647 41 56.7067C41 57.1487 40.8244 57.5727 40.5118 57.8852C40.1993 58.1978 39.7754 58.3734 39.3333 58.3734Z" />
<path d="M49.3332 53.7867V49.5667C49.3332 49.3133 49.1865 49.08 48.9598 48.9667L39.9998 44.62V33.7067C39.9998 33.34 39.6998 33.04 39.3332 33.04C38.9665 33.04 38.6665 33.34 38.6665 33.7067V45.04C38.6665 45.2933 38.8132 45.5267 39.0398 45.64L47.9998 49.9867V53.7867C46.6665 54.0933 45.6665 55.28 45.6665 56.7067C45.6665 58.36 47.0132 59.7067 48.6665 59.7067C50.3198 59.7067 51.6665 58.36 51.6665 56.7067C51.6665 55.28 50.6665 54.0933 49.3332 53.7867ZM48.6665 58.3733C48.2245 58.3733 47.8006 58.1977 47.488 57.8852C47.1754 57.5726 46.9998 57.1487 46.9998 56.7067C46.9998 56.2646 47.1754 55.8407 47.488 55.5282C47.8006 55.2156 48.2245 55.04 48.6665 55.04C49.1085 55.04 49.5325 55.2156 49.845 55.5282C50.1576 55.8407 50.3332 56.2646 50.3332 56.7067C50.3332 57.1487 50.1576 57.5726 49.845 57.8852C49.5325 58.1977 49.1085 58.3733 48.6665 58.3733ZM20.6665 19.7067C21.7665 19.7067 22.6665 18.8067 22.6665 17.7067V15.7067C22.6665 14.6067 21.7665 13.7067 20.6665 13.7067C19.5665 13.7067 18.6665 14.6067 18.6665 15.7067V17.7067C18.6665 18.8067 19.5665 19.7067 20.6665 19.7067ZM19.9998 15.7067C19.9998 15.34 20.2998 15.04 20.6665 15.04C21.0332 15.04 21.3332 15.34 21.3332 15.7067V17.7067C21.3332 18.0733 21.0332 18.3733 20.6665 18.3733C20.2998 18.3733 19.9998 18.0733 19.9998 17.7067V15.7067ZM18.6665 25.04C18.6665 26.14 19.5665 27.04 20.6665 27.04C21.7665 27.04 22.6665 26.14 22.6665 25.04V23.04C22.6665 21.94 21.7665 21.04 20.6665 21.04C19.5665 21.04 18.6665 21.94 18.6665 23.04V25.04ZM19.9998 23.04C19.9998 22.6733 20.2998 22.3733 20.6665 22.3733C21.0332 22.3733 21.3332 22.6733 21.3332 23.04V25.04C21.3332 25.4067 21.0332 25.7067 20.6665 25.7067C20.2998 25.7067 19.9998 25.4067 19.9998 25.04V23.04ZM27.9998 23.04V25.04C27.9998 26.14 28.8998 27.04 29.9998 27.04C31.0998 27.04 31.9998 26.14 31.9998 25.04V23.04C31.9998 21.94 31.0998 21.04 29.9998 21.04C28.8998 21.04 27.9998 21.94 27.9998 23.04ZM30.6665 23.04V25.04C30.6665 25.4067 30.3665 25.7067 29.9998 25.7067C29.6332 25.7067 29.3332 25.4067 29.3332 25.04V23.04C29.3332 22.6733 29.6332 22.3733 29.9998 22.3733C30.3665 22.3733 30.6665 22.6733 30.6665 23.04ZM37.3332 23.04V25.04C37.3332 26.14 38.2332 27.04 39.3332 27.04C40.4332 27.04 41.3332 26.14 41.3332 25.04V23.04C41.3332 21.94 40.4332 21.04 39.3332 21.04C38.2332 21.04 37.3332 21.94 37.3332 23.04ZM39.9998 23.04V25.04C39.9998 25.4067 39.6998 25.7067 39.3332 25.7067C38.9665 25.7067 38.6665 25.4067 38.6665 25.04V23.04C38.6665 22.6733 38.9665 22.3733 39.3332 22.3733C39.6998 22.3733 39.9998 22.6733 39.9998 23.04ZM27.3332 13.7067C26.2332 13.7067 25.3332 14.6067 25.3332 15.7067V17.7067C25.3332 18.8067 26.2332 19.7067 27.3332 19.7067C28.4332 19.7067 29.3332 18.8067 29.3332 17.7067V15.7067C29.3332 14.6067 28.4332 13.7067 27.3332 13.7067ZM27.9998 17.7067C27.9998 18.0733 27.6998 18.3733 27.3332 18.3733C26.9665 18.3733 26.6665 18.0733 26.6665 17.7067V15.7067C26.6665 15.34 26.9665 15.04 27.3332 15.04C27.6998 15.04 27.9998 15.34 27.9998 15.7067V17.7067ZM37.3332 13.7067C36.2332 13.7067 35.3332 14.6067 35.3332 15.7067V17.7067C35.3332 18.8067 36.2332 19.7067 37.3332 19.7067C38.4332 19.7067 39.3332 18.8067 39.3332 17.7067V15.7067C39.3332 14.6067 38.4332 13.7067 37.3332 13.7067ZM37.9998 17.7067C37.9998 18.0733 37.6998 18.3733 37.3332 18.3733C36.9665 18.3733 36.6665 18.0733 36.6665 17.7067V15.7067C36.6665 15.34 36.9665 15.04 37.3332 15.04C37.6998 15.04 37.9998 15.34 37.9998 15.7067V17.7067ZM23.9998 19.7333C24.3665 19.7333 24.6665 19.4333 24.6665 19.0667V14.3733C24.6665 14.0067 24.3665 13.7067 23.9998 13.7067C23.6332 13.7067 23.3332 14.0067 23.3332 14.3733V19.0667C23.3332 19.4333 23.6332 19.7333 23.9998 19.7333ZM23.3332 26.3733C23.3332 26.74 23.6332 27.04 23.9998 27.04C24.3665 27.04 24.6665 26.74 24.6665 26.3733V21.68C24.6665 21.3133 24.3665 21.0133 23.9998 21.0133C23.6332 21.0133 23.3332 21.3133 23.3332 21.68V26.3733ZM27.3332 26.4V21.7067C27.3332 21.34 27.0332 21.04 26.6665 21.04C26.2998 21.04 25.9998 21.34 25.9998 21.7067V26.4C25.9998 26.7667 26.2998 27.0667 26.6665 27.0667C27.0332 27.0667 27.3332 26.7667 27.3332 26.4ZM33.9998 21.68C33.9998 21.3133 33.6998 21.0133 33.3332 21.0133C32.9665 21.0133 32.6665 21.3133 32.6665 21.68V26.3733C32.6665 26.74 32.9665 27.04 33.3332 27.04C33.6998 27.04 33.9998 26.74 33.9998 26.3733V21.68ZM35.3332 26.4C35.3332 26.7667 35.6332 27.0667 35.9998 27.0667C36.3665 27.0667 36.6665 26.7667 36.6665 26.4V21.7067C36.6665 21.34 36.3665 21.04 35.9998 21.04C35.6332 21.04 35.3332 21.34 35.3332 21.7067V26.4ZM31.3332 19.0667V14.3733C31.3332 14.0067 31.0332 13.7067 30.6665 13.7067C30.2998 13.7067 29.9998 14.0067 29.9998 14.3733V19.0667C29.9998 19.4333 30.2998 19.7333 30.6665 19.7333C31.0332 19.7333 31.3332 19.4333 31.3332 19.0667ZM41.3332 19.0667V14.3733C41.3332 14.0067 41.0332 13.7067 40.6665 13.7067C40.2998 13.7067 39.9998 14.0067 39.9998 14.3733V19.0667C39.9998 19.4333 40.2998 19.7333 40.6665 19.7333C41.0332 19.7333 41.3332 19.4333 41.3332 19.0667ZM33.3332 19.7333C33.6998 19.7333 33.9998 19.4333 33.9998 19.0667V14.3733C33.9998 14.0067 33.6998 13.7067 33.3332 13.7067C32.9665 13.7067 32.6665 14.0067 32.6665 14.3733V19.0667C32.6665 19.4333 32.9665 19.7333 33.3332 19.7333Z" />
</g>
</svg>
</div>
<div class="solution-content">
<h4><a href="service-details.html">Web Designing</a></h4>
<p>At Around Tech, we specialize in creating stunning, user-centric web designs that captivate audiences and drive business growth.</p>
<ul class="solution-feature">
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Web application development
</li>
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Game development
</li>
</ul>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="solution-card">
<div class="icon">
<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1453_782)">
<path d="M17.1582 11.995C23.0563 9.33433 27.4156 5.89992 29.7645 2.0632C29.8004 2.00472 29.8517 1.97507 29.9172 1.97507C29.9827 1.97507 30.034 2.00472 30.0699 2.0632C31.8056 4.89808 34.5917 7.48183 38.3512 9.74273C42.029 11.9546 46.4527 13.748 51.4989 15.0728C51.6196 15.1045 51.7061 15.2073 51.7144 15.3287C51.7813 16.3132 51.8152 17.3488 51.8152 18.407C51.8152 22.3308 50.784 26.7325 48.7501 31.4899C48.6587 31.7036 48.656 31.9449 48.7426 32.1606C48.8291 32.3763 48.9977 32.5488 49.2114 32.6402C49.5264 32.7649 50.0931 32.7175 50.3617 32.1789C52.4892 27.2024 53.5679 22.5689 53.5679 18.407C53.5679 17.3094 53.5326 16.2337 53.463 15.21C53.4038 14.3369 52.7934 13.6005 51.944 13.3778C42.1817 10.8145 34.7538 6.35707 31.5645 1.14808C31.2097 0.568472 30.5938 0.222534 29.9171 0.222534C29.2403 0.222534 28.6245 0.568472 28.2697 1.14808C26.1051 4.68363 22.0136 7.88191 16.4374 10.3973C16.2255 10.4929 16.0603 10.6688 15.9781 10.8862C15.8959 11.1035 15.9033 11.3447 15.9988 11.5566C16.0946 11.7683 16.2705 11.9334 16.4878 12.0156C16.7052 12.0978 16.9463 12.0904 17.1582 11.995Z"></path>
<path d="M38.8541 35.9311V28.8577C38.8541 27.2703 37.6301 25.9642 36.0763 25.8317V24.4887C36.0763 21.0925 33.3134 18.3295 29.9171 18.3295C26.5207 18.3295 23.7578 21.0924 23.7578 24.4887V25.8318C22.204 25.9642 20.98 27.2703 20.98 28.8578V35.9313C20.98 37.6063 22.3428 38.9691 24.0178 38.9691H35.8163C37.4915 38.969 38.8541 37.6063 38.8541 35.9311ZM29.9172 20.0821C32.3469 20.0821 34.3238 22.059 34.3238 24.4887V25.82H25.5104V24.4887C25.5104 22.0588 27.4873 20.0821 29.9172 20.0821ZM22.7326 35.9311V28.8577C22.7326 28.1491 23.3092 27.5725 24.0178 27.5725H35.8163C36.5249 27.5725 37.1015 28.1491 37.1015 28.8577V35.9311C37.1015 36.6398 36.5249 37.2163 35.8163 37.2163H24.0178C23.3092 37.2165 22.7326 36.6399 22.7326 35.9311Z"></path>
<path d="M29.8504 30.1784C28.9632 30.2345 28.2383 30.9495 28.1709 31.8359C28.1108 32.6276 28.5628 33.321 29.2299 33.6209V34.75C29.2299 34.8003 29.2398 34.8502 29.2591 34.8967C29.2783 34.9432 29.3065 34.9855 29.3421 35.0211C29.3777 35.0567 29.42 35.0849 29.4665 35.1042C29.513 35.1234 29.5629 35.1333 29.6132 35.1333H30.3221C30.3724 35.1333 30.4223 35.1234 30.4688 35.1042C30.5153 35.0849 30.5576 35.0567 30.5932 35.0211C30.6288 34.9855 30.657 34.9432 30.6763 34.8967C30.6955 34.8502 30.7054 34.8003 30.7054 34.75V33.6209C31.3327 33.3389 31.7698 32.7091 31.7698 31.9768C31.7698 30.9427 30.8989 30.1121 29.8504 30.1784Z"></path>
<path d="M57.446 42.7513C56.4354 42.7513 55.5601 43.3414 55.1463 44.1953H43.6638C44.1782 43.4349 44.6811 42.6668 45.1721 41.8912H51.1498C51.5711 41.8912 51.967 41.7272 52.2652 41.4293L54.0507 39.6436H55.0991C55.4904 40.5529 56.395 41.1913 57.446 41.1913C58.8543 41.1913 60 40.0455 60 38.6373C60 37.2292 58.8543 36.0834 57.446 36.0834C56.2975 36.0834 55.3237 36.8457 55.0037 37.8909H53.9782C53.5568 37.8909 53.1608 38.055 52.8628 38.3528L51.0771 40.1386H46.2517C47.0541 38.7991 47.8256 37.4238 48.5477 36.0217C48.6004 35.9194 48.6324 35.8077 48.642 35.693C48.6515 35.5783 48.6383 35.4629 48.6032 35.3533C48.5681 35.2437 48.5118 35.142 48.4374 35.0542C48.3631 34.9664 48.2721 34.8941 48.1698 34.8414C48.0675 34.7887 47.9558 34.7567 47.8411 34.7471C47.7264 34.7376 47.611 34.7508 47.5014 34.7859C47.3918 34.821 47.2902 34.8773 47.2023 34.9517C47.1145 35.026 47.0422 35.117 46.9895 35.2193C41.4971 45.8845 32.8228 55.2484 30.2951 57.8644C30.195 57.968 30.0607 58.025 29.917 58.025C29.7734 58.025 29.6391 57.968 29.539 57.8644C27.4227 55.6743 21.9745 49.7864 17.1034 42.4311C11.0754 33.3289 8.01891 25.2461 8.01891 18.407C8.01891 17.3488 8.05277 16.3132 8.11969 15.3284C8.12789 15.2072 8.21449 15.1045 8.3352 15.0728C9.96762 14.6442 11.5625 14.1568 13.0755 13.6246C13.2937 13.5466 13.4722 13.3855 13.5719 13.1763C13.6716 12.9671 13.6843 12.727 13.6074 12.5084C13.5305 12.2899 13.3702 12.1107 13.1615 12.01C12.9528 11.9093 12.7128 11.8954 12.4938 11.9713C11.0256 12.488 9.4766 12.9612 7.89012 13.3777C7.04051 13.6007 6.43008 14.3371 6.37113 15.2098C6.30152 16.2337 6.26625 17.3094 6.26625 18.4069C6.26625 24.754 8.7266 32.0517 13.5837 40.1385H8.75719L6.97148 38.3528C6.82533 38.2059 6.65149 38.0894 6.46004 38.0102C6.26858 37.9309 6.06331 37.8904 5.85609 37.8909H4.99617C4.67613 36.8457 3.70242 36.0834 2.55387 36.0834C1.14574 36.0833 0 37.2291 0 38.6372C0 40.0454 1.14574 41.1912 2.55398 41.1912C3.60492 41.1912 4.50949 40.5527 4.9009 39.6435H5.78367L7.56926 41.4292C7.71541 41.5761 7.88924 41.6926 8.08069 41.7719C8.27215 41.8511 8.47742 41.8917 8.68465 41.8911H14.6665C14.9869 42.3968 15.3123 42.8994 15.6425 43.3988C15.8191 43.6651 15.9971 43.9306 16.1764 44.1952H4.85367C4.43988 43.3413 3.56461 42.7512 2.55398 42.7512C1.14574 42.7513 0 43.8969 0 45.3052C0 46.7133 1.14574 47.859 2.55398 47.859C3.74027 47.859 4.74012 47.0459 5.02582 45.9478H17.3917C17.9524 46.7381 18.5239 47.5207 19.106 48.2953H12.1934C11.835 47.3174 10.8949 46.6177 9.79441 46.6177C8.38617 46.6177 7.24043 47.7634 7.24043 49.1716C7.24043 50.5799 8.38617 51.7256 9.79441 51.7256C10.8949 51.7256 11.835 51.0259 12.1934 50.048H20.4496C21.022 50.7797 21.6029 51.5047 22.1924 52.2227H18.4025C18.1953 52.2222 17.99 52.2627 17.7985 52.342C17.6071 52.4213 17.4332 52.5378 17.287 52.6847L15.5014 54.4704H14.4646C14.1062 53.4925 13.1661 52.7927 12.0655 52.7927C10.6573 52.7927 9.51152 53.9385 9.51152 55.3467C9.51152 56.7548 10.6573 57.9006 12.0655 57.9006C13.166 57.9006 14.1062 57.2009 14.4646 56.223H15.574C15.7812 56.2236 15.9865 56.183 16.178 56.1037C16.3695 56.0244 16.5433 55.9079 16.6895 55.761L18.475 53.9754H23.6591C25.6453 56.3044 27.3079 58.0774 28.2787 59.0823C28.7122 59.5308 29.2941 59.7777 29.9171 59.7777C30.5402 59.7777 31.1221 59.5308 31.5555 59.0823C32.648 57.9518 34.2859 56.1979 36.1856 53.973C36.2014 53.9739 36.217 53.9754 36.2331 53.9754H41.3593L43.1452 55.7613C43.2913 55.9082 43.4651 56.0246 43.6565 56.1038C43.8479 56.1831 44.0531 56.2236 44.2603 56.223H45.3697C45.7281 57.2009 46.6683 57.9006 47.7688 57.9006C49.177 57.9006 50.3228 56.7548 50.3228 55.3467C50.3228 53.9385 49.177 52.7927 47.7688 52.7927C46.6683 52.7927 45.7281 53.4925 45.3697 54.4704H44.3329L42.5469 52.6843C42.4008 52.5375 42.227 52.4211 42.0355 52.3419C41.8441 52.2627 41.6389 52.2222 41.4318 52.2227H37.6514C38.2412 51.5048 38.8224 50.7798 39.3949 50.048H47.6743C48.0327 51.0259 48.9728 51.7256 50.0733 51.7256C51.4815 51.7256 52.6273 50.5799 52.6273 49.1716C52.6273 47.7634 51.4815 46.6177 50.0733 46.6177C48.9728 46.6177 48.0327 47.3174 47.6743 48.2953H40.7384C41.3198 47.5207 41.8906 46.7381 42.4506 45.9478H54.9742C55.2599 47.0459 56.2597 47.859 57.446 47.859C58.8543 47.859 60 46.7133 60 45.3052C60 43.8969 58.8543 42.7513 57.446 42.7513ZM57.446 37.836C57.8878 37.836 58.2473 38.1954 58.2473 38.6372C58.2473 39.079 57.8878 39.4385 57.446 39.4385C57.0042 39.4385 56.6448 39.079 56.6448 38.6372C56.6448 38.1954 57.0042 37.836 57.446 37.836ZM2.55398 39.4385C2.11207 39.4385 1.75266 39.079 1.75266 38.6372C1.75266 38.1954 2.11207 37.836 2.55398 37.836C2.99578 37.836 3.3552 38.1954 3.3552 38.6372C3.3552 39.079 2.99578 39.4385 2.55398 39.4385ZM2.55398 46.1064C2.34155 46.1062 2.13787 46.0217 1.98764 45.8715C1.83741 45.7213 1.7529 45.5176 1.75266 45.3052C1.75287 45.0927 1.83737 44.889 1.9876 44.7388C2.13783 44.5885 2.34153 44.504 2.55398 44.5038C2.76642 44.5041 2.97009 44.5886 3.12029 44.7388C3.2705 44.889 3.35498 45.0927 3.3552 45.3052C3.35495 45.5176 3.27045 45.7212 3.12025 45.8714C2.97005 46.0216 2.7664 46.1061 2.55398 46.1064ZM9.79441 49.973C9.3525 49.973 8.99309 49.6136 8.99309 49.1716C8.99309 48.7297 9.3525 48.3703 9.79441 48.3703C10.2362 48.3703 10.5956 48.7297 10.5956 49.1716C10.5956 49.6136 10.2362 49.973 9.79441 49.973ZM12.0657 56.1479C11.6238 56.1479 11.2644 55.7885 11.2644 55.3467C11.2644 54.9049 11.6238 54.5454 12.0657 54.5454C12.5077 54.5454 12.8671 54.9049 12.8671 55.3467C12.8671 55.7885 12.5077 56.1479 12.0657 56.1479ZM47.7687 54.5454C48.2106 54.5454 48.57 54.9049 48.57 55.3467C48.57 55.7885 48.2106 56.1479 47.7687 56.1479C47.3268 56.1479 46.9673 55.7885 46.9673 55.3467C46.9673 54.9049 47.3268 54.5454 47.7687 54.5454ZM50.0734 48.3703C50.5153 48.3703 50.8747 48.7297 50.8747 49.1716C50.8747 49.6136 50.5153 49.973 50.0734 49.973C49.6316 49.973 49.2722 49.6136 49.2722 49.1716C49.2722 48.7297 49.6316 48.3703 50.0734 48.3703ZM57.446 46.1064C57.2336 46.1061 57.0299 46.0216 56.8797 45.8714C56.7295 45.7212 56.6451 45.5176 56.6448 45.3052C56.6448 44.8632 57.0042 44.5038 57.446 44.5038C57.8878 44.5038 58.2473 44.8632 58.2473 45.3052C58.2473 45.747 57.8878 46.1064 57.446 46.1064Z"></path>
<path d="M31.4085 52.0767C31.7634 51.2208 31.3572 50.2393 30.5013 49.8844C29.6454 49.5295 28.6639 49.9357 28.3091 50.7916C27.9542 51.6475 28.3603 52.629 29.2162 52.9839C30.0721 53.3387 31.0536 52.9326 31.4085 52.0767Z"></path>
<path d="M30.1087 10.4579C31.0232 10.309 31.6438 9.44695 31.4949 8.53252C31.346 7.61809 30.4839 6.99753 29.5694 7.14647C28.6549 7.2954 28.0343 8.15743 28.1832 9.07186C28.3322 9.98629 29.1942 10.6069 30.1087 10.4579Z"></path>
<path d="M12.428 17.0833C11.5015 17.0833 10.7505 17.8343 10.7505 18.7609C10.7505 19.6874 11.5015 20.4384 12.428 20.4384C13.3545 20.4384 14.1057 19.6874 14.1057 18.7609C14.1056 17.8344 13.3545 17.0833 12.428 17.0833ZM47.4062 17.0833C46.4797 17.0833 45.7285 17.8343 45.7285 18.7609C45.7285 19.6874 46.4795 20.4384 47.4062 20.4384C48.3326 20.4384 49.0837 19.6874 49.0837 18.7609C49.0837 17.8344 48.3326 17.0833 47.4062 17.0833Z"></path>
</g>
</svg>
</div>
<div class="solution-content">
<h4><a href="service-details.html">Social-Media Marketing</a></h4>
<p>At Around Tech, we provide comprehensive Social Media Marketing (SMM) services designed to grow your brand’s online presence, engage with your audience, and drive measurable results.</p>
<ul class="solution-feature">
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Game development
</li>
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Responsive web design
</li>
</ul>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="solution-card">
<div class="icon">
<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1453_801)">
<path d="M2.4667 13.2969C2.33951 11.8552 2.42353 10.4026 2.71612 8.98521C3.10759 7.21975 3.87631 5.75417 5.00047 4.63041C6.57567 3.05399 8.79093 2.18999 11.5762 2.06206C12.9253 2.01141 14.276 2.10349 15.6057 2.33675L15.9598 0.323002C14.4851 0.064242 12.987 -0.0374776 11.4908 0.019548C8.17174 0.172759 5.50155 1.23736 3.55545 3.18509C2.14974 4.59029 1.19506 6.39495 0.718951 8.55106C0.718133 8.55505 0.716904 8.55945 0.716086 8.56334C0.381376 10.1783 0.285207 11.8336 0.430644 13.4764L2.4667 13.2969ZM6.94994 26.6542C6.33423 25.5308 5.7697 24.4018 5.27158 23.2976L3.40818 24.1384C3.92789 25.2901 4.51638 26.4674 5.15767 27.6368L6.94994 26.6542ZM1.02496 17.2468C1.28129 18.3421 1.59275 19.4237 1.95815 20.4875L3.89268 19.8267C3.54951 18.8284 3.25704 17.8133 3.0164 16.7855L1.02496 17.2468ZM14.9325 37.9118C14.8433 37.8099 14.7545 37.7087 14.6662 37.6068L13.1234 38.9472C13.2138 39.0516 13.3046 39.1559 13.3965 39.2602C13.9224 39.8588 14.4577 40.4493 15.002 41.0313C15.2478 41.2938 15.4954 41.5546 15.7448 41.8137L17.2181 40.3965C16.4377 39.5854 15.6757 38.757 14.9325 37.9118ZM10.6536 35.9437L12.2671 34.6891C12.1192 34.4985 11.9723 34.3072 11.8265 34.115C11.2108 33.3056 10.6139 32.4821 10.0363 31.6451L8.3532 32.8053C8.94876 33.6682 9.56419 34.5172 10.199 35.3516C10.3492 35.55 10.5007 35.7473 10.6535 35.9436L10.6536 35.9437ZM17.4834 43.5639C19.4145 45.4484 21.4467 47.2265 23.5709 48.8903C26.4517 51.1576 29.5266 53.1666 32.7601 54.8939C34.6487 55.8992 36.6059 56.7701 38.617 57.5001L36.75 58.0347L37.3121 60L42.5389 58.5044C43.0814 58.3493 43.3952 57.7832 43.2401 57.2403L41.8782 52.4797L39.9124 53.0417L40.7783 56.066C38.3381 55.294 35.9749 54.2972 33.7189 53.0885C30.5923 51.4181 27.619 49.4754 24.8337 47.2828C22.767 45.6642 20.7898 43.9346 18.9108 42.1015L17.4834 43.5639ZM59.3608 43.8982C58.9434 41.2907 58.081 38.4859 56.7973 35.5615L54.9255 36.383C56.1393 39.1483 56.952 41.7861 57.3419 44.2208C58.0734 48.792 57.2699 52.3977 55.0186 54.6497C53.9037 55.7646 52.4536 56.5291 50.7085 56.9225C49.2977 57.2398 47.6982 57.3155 45.9531 57.1483C45.5229 57.1071 45.0791 57.05 44.6338 56.9796L44.3147 58.9986C44.8001 59.0753 45.2859 59.1372 45.758 59.1828C46.4228 59.2464 47.0705 59.2784 47.7009 59.2784C48.8631 59.2853 50.0225 59.1639 51.1579 58.9162C53.2864 58.4361 55.0714 57.4869 56.4639 56.0945C59.198 53.3603 60.1995 49.1434 59.3607 43.8982H59.3608ZM54.4054 30.828L52.6296 31.8402C53.1137 32.6888 53.5738 33.551 54.0092 34.4256L55.8401 33.5169C55.388 32.6069 54.9095 31.7102 54.4054 30.828ZM49.6607 23.7226L48.0368 24.9643C48.8014 25.9645 49.5387 26.9853 50.248 28.0254L51.9375 26.8745C51.2071 25.8035 50.4479 24.7526 49.6607 23.7226ZM44.6074 17.8149L43.1294 19.2262C43.9986 20.1371 44.8429 21.0714 45.6613 22.0282L47.2149 20.6998C46.3719 19.7148 45.5025 18.7528 44.6074 17.8149ZM19.2778 7.19212L21.2766 6.76483L20.6166 3.67727C22.4926 4.34273 24.3177 5.1439 26.0773 6.07441C29.1633 7.70361 32.1007 9.59998 34.8559 11.7418C36.1547 12.7441 37.4632 13.8318 38.7446 14.9741C39.7874 15.9058 40.804 16.8666 41.7929 17.8553L43.2381 16.4101C42.925 16.0969 42.6092 15.7865 42.2906 15.4789C41.5757 14.788 40.8474 14.111 40.1062 13.4484C38.7885 12.2743 37.4424 11.1552 36.1084 10.1259C34.8091 9.1155 33.4637 8.15846 32.0837 7.2525C32.8537 6.8176 33.6349 6.40275 34.4264 6.00839L33.517 4.17774C32.5999 4.63277 31.6635 5.13406 30.7344 5.66656L31.3837 6.79952C29.9678 5.8975 28.5163 5.05261 27.0328 4.26688C25.7118 3.56954 24.3556 2.94105 22.9697 2.38393L24.7708 1.99932L24.3446 0L19.0287 1.13624C18.8975 1.16425 18.773 1.21784 18.6625 1.29396C18.5519 1.37008 18.4575 1.46723 18.3845 1.57986C18.3115 1.69249 18.2614 1.8184 18.2371 1.9504C18.2128 2.08239 18.2147 2.21788 18.2427 2.34913L19.2778 7.19212ZM0.323386 44.0581C0.0645826 45.5329 -0.0369669 47.031 0.0204439 48.5273C0.172734 51.8459 1.23733 54.5157 3.18548 56.4631C4.59068 57.8688 6.39656 58.8226 8.55145 59.2984C8.55554 59.2987 8.55984 59.3 8.56465 59.3008C9.69182 59.5347 10.84 59.6526 11.9912 59.6525C12.4865 59.6525 12.9819 59.631 13.4768 59.5874L13.2973 57.5505C11.8556 57.6783 10.4029 57.5942 8.98559 57.3006C7.21973 56.9104 5.75455 56.1425 4.6308 55.0178C3.05478 53.4419 2.19047 51.2262 2.06254 48.4417C2.01149 47.0924 2.10354 45.7415 2.33713 44.4116L0.323386 44.0581ZM24.1387 56.6094C25.2913 56.0901 26.4682 55.5008 27.6368 54.8603L26.655 53.0681C25.532 53.6833 24.4026 54.2482 23.298 54.746L24.1387 56.6094ZM17.2472 58.9929C18.3425 58.7367 19.4241 58.4253 20.4879 58.0598L19.827 56.1249C18.8287 56.4681 17.8137 56.7607 16.7859 57.0016L17.2472 58.9929ZM37.6075 45.351L38.9472 46.895C39.0522 46.8043 39.1569 46.7131 39.2611 46.6215C39.8594 46.0952 40.4498 45.56 41.0321 45.016C41.2947 44.77 41.5557 44.5223 41.8149 44.2728L40.3972 42.8C40.1452 43.043 39.8912 43.284 39.6353 43.5228C39.069 44.0526 38.4944 44.5735 37.9118 45.0852C37.8107 45.1742 37.7094 45.2631 37.6075 45.351Z"></path>
<path d="M31.6455 49.9806L32.8057 51.6641C33.6688 51.0689 34.5179 50.4536 35.3524 49.8187C35.5504 49.6683 35.7476 49.5168 35.944 49.3641L34.6896 47.7498C33.6966 48.5226 32.6816 49.2666 31.6456 49.9806H31.6455ZM44.2212 2.67537C48.792 1.94462 52.3981 2.74783 54.6501 4.99943C55.7642 6.11356 56.5292 7.564 56.9229 9.30909C57.2398 10.7204 57.3163 12.3203 57.1483 14.065C57.1076 14.4943 57.0511 14.9377 56.98 15.3839L58.999 15.7032C59.0757 15.2164 59.1376 14.7306 59.1832 14.26C59.3712 12.2999 59.2816 10.4833 58.9166 8.8601C58.4369 6.73162 57.4878 4.9458 56.0953 3.55339C53.3608 0.819231 49.1426 -0.182628 43.8986 0.656911C41.2924 1.07387 38.4867 1.93664 35.5619 3.21995L36.3834 5.09215C39.1488 3.87834 41.7857 3.0652 44.2212 2.67547V2.67537ZM22.0279 14.3564L20.699 12.8033C19.7144 13.6461 18.7526 14.5152 17.8145 15.4095L19.2262 16.8883C20.137 16.0191 21.0713 15.1749 22.0279 14.3564ZM28.0264 9.76995L26.8745 8.08054C25.8038 8.81113 24.7529 9.57032 23.7229 10.3573L24.9647 11.9812C25.9648 11.2163 26.9857 10.479 28.0263 9.77005L28.0264 9.76995ZM58.5048 17.4796C58.3497 16.9366 57.7836 16.6228 57.2411 16.778L52.48 18.1404L53.0422 20.1057L56.067 19.2402C55.2943 21.6803 54.2972 24.0435 53.0885 26.2997C51.4181 29.4263 49.4754 32.3995 47.2828 35.1849C45.6641 37.2514 43.9343 39.2285 42.1011 41.1073L43.5639 42.535C45.4483 40.6038 47.2264 38.5716 48.8903 36.4475C51.1577 33.5669 53.1667 30.4919 54.8939 27.2583C55.8991 25.3696 56.77 23.4125 57.5001 21.4014L58.0347 23.2685L60 22.7063L58.5048 17.4796ZM2.13564 41.7981C2.20728 41.7981 2.27923 41.7906 2.34995 41.775L7.19222 40.7403L6.76483 38.741L3.67768 39.4014C4.3429 37.5253 5.14407 35.7003 6.07481 33.9408C7.70361 30.8545 9.59982 27.917 11.7417 25.1619C12.7436 23.8633 13.8315 22.5548 14.9741 21.2731C15.6185 20.5515 16.277 19.8427 16.9493 19.147C17.2488 18.837 17.5509 18.5296 17.8557 18.2247L16.4105 16.7796C15.3938 17.7957 14.4061 18.8404 13.4485 19.9124C12.2731 21.2296 11.1549 22.576 10.1259 23.9097C7.91181 26.758 5.9515 29.7948 4.26739 32.9853C3.5693 34.3059 2.94076 35.6621 2.38434 37.0484L1.99932 35.2461L0 35.6731L1.13624 40.989C1.1852 41.2178 1.3111 41.4229 1.49296 41.5702C1.67482 41.7174 1.90165 41.7979 2.13564 41.7981ZM21.1847 21.9016V38.1161C21.1847 38.9813 21.6701 40.1994 24.1312 41.0897C25.7247 41.6662 27.808 41.9841 30.0204 41.9841H30.0996C31.3777 41.9841 32.6531 41.8674 33.9099 41.6358C37.0962 41.0246 38.9437 39.7417 38.9437 38.1161V21.9016C38.9437 21.036 38.4028 19.8187 35.9413 18.9275C34.3473 18.3511 32.236 18.0332 30.0208 18.0332C27.8048 18.0332 25.7311 18.3511 24.1371 18.9275C21.676 19.8183 21.1847 21.0359 21.1847 21.9016ZM33.5274 39.6269C32.3712 39.8412 31.1972 39.946 30.0213 39.94C28.0356 39.94 26.2089 39.6654 24.8329 39.168C23.4868 38.6806 23.2289 38.1921 23.2289 38.1161V35.2632C23.5196 35.4171 23.8212 35.5497 24.1312 35.6598C25.7247 36.2367 27.8081 36.5541 30.0246 36.5541C32.2414 36.5541 34.3562 36.2367 35.9497 35.6598C36.2992 35.5334 36.5162 35.4003 36.8996 35.2623V38.1156C36.8996 38.3075 36.0721 39.1387 33.5274 39.6268V39.6269ZM36.8997 32.6858C36.8997 32.7626 36.5922 33.2508 35.2465 33.738C33.87 34.2362 32.0067 34.51 30.0209 34.51C28.0356 34.51 26.2089 34.2362 24.8329 33.738C23.4868 33.2508 23.2289 32.7622 23.2289 32.6859V29.8705C23.5195 30.0248 23.8211 30.1575 24.1312 30.2676C25.7247 30.8444 27.8081 31.1619 30.0246 31.1619C32.2414 31.1619 34.3562 30.8444 35.9497 30.2675C36.2992 30.1412 36.5162 30.008 36.8996 29.8705L36.8997 32.6858ZM35.2465 28.3453C33.87 28.8435 32.0067 29.1173 30.0209 29.1173C28.0356 29.1173 26.2089 28.8435 24.8329 28.3453C23.4868 27.8584 23.2289 27.3699 23.2289 27.2939V24.4778C23.5197 24.6317 23.8213 24.7644 24.1312 24.8748C25.7252 25.4517 27.8085 25.7691 30.0246 25.7691C32.2406 25.7691 34.3558 25.4513 35.9497 24.8748C36.2992 24.7481 36.5162 24.6148 36.8996 24.4778V27.2939C36.8996 27.3699 36.5922 27.8584 35.2465 28.3453ZM24.7957 20.8498C26.1722 20.3512 28.0236 20.0774 30.0085 20.0774C31.993 20.0774 33.8449 20.3512 35.2214 20.8498C36.5666 21.337 36.8501 21.8252 36.8501 21.9016C36.8501 21.9771 36.5666 22.4653 35.2214 22.9527C33.8448 23.4511 31.9931 23.7251 30.0085 23.7251C28.0236 23.7251 26.1722 23.4504 24.7957 22.9527C23.4496 22.4653 23.1666 21.9771 23.1666 21.9016C23.1666 21.8252 23.4501 21.337 24.7961 20.8498H24.7957Z"></path>
</g>
</svg>
</div>
<div class="solution-content">
<h4><a href="service-details.html">SEO Service</a></h4>
<p>At Around Tech, we offer comprehensive SEO services that drive organic traffic, increase search engine visibility, and improve your website’s ranking. Our tailored SEO strategies are designed to meet your specific business goals</p>
<ul class="solution-feature">
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Full-stack development
</li>
<li>
<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
<path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
</svg>
Responsive web design
</li>
</ul>
</div>
</div>
</div>
<div class="swiper-slide">
    <div class="solution-card">
    <div class="icon">
    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_1453_763)">
    <path d="M25.2665 33.04C24.8998 33.04 24.5998 33.34 24.5998 33.7067V46.3734H20.6665C20.2998 46.3734 19.9998 46.6734 19.9998 47.04V53.7867C18.6665 54.0934 17.6665 55.28 17.6665 56.7067C17.6665 58.36 19.0132 59.7067 20.6665 59.7067C22.3198 59.7067 23.6665 58.36 23.6665 56.7067C23.6665 55.28 22.6665 54.0934 21.3332 53.7867V47.7067H25.2665C25.6332 47.7067 25.9332 47.4067 25.9332 47.04V33.7067C25.9332 33.34 25.6332 33.04 25.2665 33.04ZM22.3332 56.7067C22.3332 57.1487 22.1576 57.5727 21.845 57.8852C21.5325 58.1978 21.1085 58.3734 20.6665 58.3734C20.2245 58.3734 19.8006 58.1978 19.488 57.8852C19.1754 57.5727 18.9998 57.1487 18.9998 56.7067C18.9998 56.2647 19.1754 55.8408 19.488 55.5282C19.8006 55.2156 20.2245 55.04 20.6665 55.04C21.1085 55.04 21.5325 55.2156 21.845 55.5282C22.1576 55.8408 22.3332 56.2647 22.3332 56.7067Z" />
    <path d="M12 53.7867V43.7067H20.6667C21.0333 43.7067 21.3333 43.4067 21.3333 43.04V33.7067C21.3333 33.34 21.0333 33.04 20.6667 33.04C20.3 33.04 20 33.34 20 33.7067V42.3734H5.92C5.61333 41.04 4.42667 40.04 3 40.04C1.34667 40.04 0 41.3867 0 43.04C0 44.6934 1.34667 46.04 3 46.04C4.42667 46.04 5.61333 45.04 5.92 43.7067H10.6667V53.7867C9.33333 54.0934 8.33333 55.28 8.33333 56.7067C8.33333 58.36 9.68 59.7067 11.3333 59.7067C12.9867 59.7067 14.3333 58.36 14.3333 56.7067C14.3333 55.28 13.3333 54.0934 12 53.7867ZM3 44.7067C2.55797 44.7067 2.13405 44.5311 1.82149 44.2186C1.50893 43.906 1.33333 43.4821 1.33333 43.04C1.33333 42.598 1.50893 42.1741 1.82149 41.8615C2.13405 41.549 2.55797 41.3734 3 41.3734C3.44203 41.3734 3.86595 41.549 4.17851 41.8615C4.49107 42.1741 4.66667 42.598 4.66667 43.04C4.66667 43.4821 4.49107 43.906 4.17851 44.2186C3.86595 44.5311 3.44203 44.7067 3 44.7067ZM11.3333 58.3734C10.8913 58.3734 10.4674 58.1978 10.1548 57.8852C9.84226 57.5727 9.66667 57.1487 9.66667 56.7067C9.66667 56.2647 9.84226 55.8408 10.1548 55.5282C10.4674 55.2156 10.8913 55.04 11.3333 55.04C11.7754 55.04 12.1993 55.2156 12.5118 55.5282C12.8244 55.8408 13 56.2647 13 56.7067C13 57.1487 12.8244 57.5727 12.5118 57.8852C12.1993 58.1978 11.7754 58.3734 11.3333 58.3734Z" />
    <path d="M57.0003 40.04C55.5737 40.04 54.387 41.04 54.0803 42.3733H47.3337V38.3733H49.907C55.4737 38.3733 60.0003 33.8867 60.0003 28.3733C60.0003 24.3 57.527 20.8 53.9937 19.24C53.9203 9.68 45.967 1 36.9003 1C31.0137 1 25.5203 4.04 22.407 8.96667C20.8438 7.71712 18.9015 7.03756 16.9003 7.04C11.827 7.04 8.03366 12.3867 8.00033 17.0933C3.72033 18.6667 0.666992 22.6733 0.666992 27.3733C0.666992 33.1533 5.28033 37.8933 11.1203 38.3333C11.187 38.36 11.2603 38.3733 11.3337 38.3733H16.027C16.3937 38.3733 16.6937 38.0733 16.6937 37.7067C16.6937 37.34 16.3937 37.04 16.027 37.04H12.0003C6.48699 37.04 2.00033 32.7067 2.00033 27.3733C2.00033 22.04 6.48699 17.7067 12.0003 17.7067C12.367 17.7067 12.667 17.4067 12.667 17.04C12.667 16.6733 12.367 16.3733 12.0003 16.3733C11.087 16.3733 10.207 16.4867 9.35366 16.6867C9.59366 11.96 13.4403 8.37333 16.9003 8.37333C18.8937 8.37333 20.7737 9.14667 22.1937 10.5533C22.4537 10.8133 22.8803 10.8133 23.1337 10.5533C23.2803 10.4067 23.3337 10.2067 23.3137 10.02C26.147 5.28 31.3337 2.34 36.8937 2.34C45.1003 2.34 52.3137 10.1067 52.647 18.7667C51.7737 18.52 50.8537 18.38 49.9003 18.38C49.5337 18.38 49.2337 18.68 49.2337 19.0467C49.2337 19.4133 49.5337 19.7133 49.9003 19.7133C54.7337 19.7133 58.6603 23.6 58.6603 28.38C58.6603 33.16 54.727 37.0467 49.9003 37.0467H43.9937C43.627 37.0467 43.327 37.3467 43.327 37.7133C43.327 38.08 43.627 38.38 43.9937 38.38H45.9937V43.0467C45.9937 43.4133 46.2937 43.7133 46.6603 43.7133H54.0737C54.3803 45.0467 55.567 46.0467 56.9937 46.0467C58.647 46.0467 59.9937 44.7 59.9937 43.0467C59.9937 41.3933 58.647 40.0467 56.9937 40.0467L57.0003 40.04ZM57.0003 44.7067C56.5583 44.7067 56.1344 44.5311 55.8218 44.2185C55.5093 43.906 55.3337 43.482 55.3337 43.04C55.3337 42.598 55.5093 42.174 55.8218 41.8615C56.1344 41.5489 56.5583 41.3733 57.0003 41.3733C57.4424 41.3733 57.8663 41.5489 58.1788 41.8615C58.4914 42.174 58.667 42.598 58.667 43.04C58.667 43.482 58.4914 43.906 58.1788 44.2185C57.8663 44.5311 57.4424 44.7067 57.0003 44.7067Z" />
    <path d="M30.6667 53.7867V33.7067C30.6667 33.34 30.3667 33.04 30 33.04C29.6333 33.04 29.3333 33.34 29.3333 33.7067V53.7867C28 54.0934 27 55.28 27 56.7067C27 58.36 28.3467 59.7067 30 59.7067C31.6533 59.7067 33 58.36 33 56.7067C33 55.28 32 54.0934 30.6667 53.7867ZM30 58.3734C29.558 58.3734 29.134 58.1978 28.8215 57.8852C28.5089 57.5727 28.3333 57.1487 28.3333 56.7067C28.3333 56.2647 28.5089 55.8408 28.8215 55.5282C29.134 55.2156 29.558 55.04 30 55.04C30.442 55.04 30.866 55.2156 31.1785 55.5282C31.4911 55.8408 31.6667 56.2647 31.6667 56.7067C31.6667 57.1487 31.4911 57.5727 31.1785 57.8852C30.866 58.1978 30.442 58.3734 30 58.3734ZM40 53.7867V49.7067C40 49.4667 39.8733 49.2467 39.6667 49.1267L35.3333 46.6534V33.7067C35.3333 33.34 35.0333 33.04 34.6667 33.04C34.3 33.04 34 33.34 34 33.7067V47.04C34 47.28 34.1267 47.5 34.3333 47.62L38.6667 50.0934V53.7867C37.3333 54.0934 36.3333 55.28 36.3333 56.7067C36.3333 58.36 37.68 59.7067 39.3333 59.7067C40.9867 59.7067 42.3333 58.36 42.3333 56.7067C42.3333 55.28 41.3333 54.0934 40 53.7867ZM39.3333 58.3734C38.8913 58.3734 38.4674 58.1978 38.1548 57.8852C37.8423 57.5727 37.6667 57.1487 37.6667 56.7067C37.6667 56.2647 37.8423 55.8408 38.1548 55.5282C38.4674 55.2156 38.8913 55.04 39.3333 55.04C39.7754 55.04 40.1993 55.2156 40.5118 55.5282C40.8244 55.8408 41 56.2647 41 56.7067C41 57.1487 40.8244 57.5727 40.5118 57.8852C40.1993 58.1978 39.7754 58.3734 39.3333 58.3734Z" />
    <path d="M49.3332 53.7867V49.5667C49.3332 49.3133 49.1865 49.08 48.9598 48.9667L39.9998 44.62V33.7067C39.9998 33.34 39.6998 33.04 39.3332 33.04C38.9665 33.04 38.6665 33.34 38.6665 33.7067V45.04C38.6665 45.2933 38.8132 45.5267 39.0398 45.64L47.9998 49.9867V53.7867C46.6665 54.0933 45.6665 55.28 45.6665 56.7067C45.6665 58.36 47.0132 59.7067 48.6665 59.7067C50.3198 59.7067 51.6665 58.36 51.6665 56.7067C51.6665 55.28 50.6665 54.0933 49.3332 53.7867ZM48.6665 58.3733C48.2245 58.3733 47.8006 58.1977 47.488 57.8852C47.1754 57.5726 46.9998 57.1487 46.9998 56.7067C46.9998 56.2646 47.1754 55.8407 47.488 55.5282C47.8006 55.2156 48.2245 55.04 48.6665 55.04C49.1085 55.04 49.5325 55.2156 49.845 55.5282C50.1576 55.8407 50.3332 56.2646 50.3332 56.7067C50.3332 57.1487 50.1576 57.5726 49.845 57.8852C49.5325 58.1977 49.1085 58.3733 48.6665 58.3733ZM20.6665 19.7067C21.7665 19.7067 22.6665 18.8067 22.6665 17.7067V15.7067C22.6665 14.6067 21.7665 13.7067 20.6665 13.7067C19.5665 13.7067 18.6665 14.6067 18.6665 15.7067V17.7067C18.6665 18.8067 19.5665 19.7067 20.6665 19.7067ZM19.9998 15.7067C19.9998 15.34 20.2998 15.04 20.6665 15.04C21.0332 15.04 21.3332 15.34 21.3332 15.7067V17.7067C21.3332 18.0733 21.0332 18.3733 20.6665 18.3733C20.2998 18.3733 19.9998 18.0733 19.9998 17.7067V15.7067ZM18.6665 25.04C18.6665 26.14 19.5665 27.04 20.6665 27.04C21.7665 27.04 22.6665 26.14 22.6665 25.04V23.04C22.6665 21.94 21.7665 21.04 20.6665 21.04C19.5665 21.04 18.6665 21.94 18.6665 23.04V25.04ZM19.9998 23.04C19.9998 22.6733 20.2998 22.3733 20.6665 22.3733C21.0332 22.3733 21.3332 22.6733 21.3332 23.04V25.04C21.3332 25.4067 21.0332 25.7067 20.6665 25.7067C20.2998 25.7067 19.9998 25.4067 19.9998 25.04V23.04ZM27.9998 23.04V25.04C27.9998 26.14 28.8998 27.04 29.9998 27.04C31.0998 27.04 31.9998 26.14 31.9998 25.04V23.04C31.9998 21.94 31.0998 21.04 29.9998 21.04C28.8998 21.04 27.9998 21.94 27.9998 23.04ZM30.6665 23.04V25.04C30.6665 25.4067 30.3665 25.7067 29.9998 25.7067C29.6332 25.7067 29.3332 25.4067 29.3332 25.04V23.04C29.3332 22.6733 29.6332 22.3733 29.9998 22.3733C30.3665 22.3733 30.6665 22.6733 30.6665 23.04ZM37.3332 23.04V25.04C37.3332 26.14 38.2332 27.04 39.3332 27.04C40.4332 27.04 41.3332 26.14 41.3332 25.04V23.04C41.3332 21.94 40.4332 21.04 39.3332 21.04C38.2332 21.04 37.3332 21.94 37.3332 23.04ZM39.9998 23.04V25.04C39.9998 25.4067 39.6998 25.7067 39.3332 25.7067C38.9665 25.7067 38.6665 25.4067 38.6665 25.04V23.04C38.6665 22.6733 38.9665 22.3733 39.3332 22.3733C39.6998 22.3733 39.9998 22.6733 39.9998 23.04ZM27.3332 13.7067C26.2332 13.7067 25.3332 14.6067 25.3332 15.7067V17.7067C25.3332 18.8067 26.2332 19.7067 27.3332 19.7067C28.4332 19.7067 29.3332 18.8067 29.3332 17.7067V15.7067C29.3332 14.6067 28.4332 13.7067 27.3332 13.7067ZM27.9998 17.7067C27.9998 18.0733 27.6998 18.3733 27.3332 18.3733C26.9665 18.3733 26.6665 18.0733 26.6665 17.7067V15.7067C26.6665 15.34 26.9665 15.04 27.3332 15.04C27.6998 15.04 27.9998 15.34 27.9998 15.7067V17.7067ZM37.3332 13.7067C36.2332 13.7067 35.3332 14.6067 35.3332 15.7067V17.7067C35.3332 18.8067 36.2332 19.7067 37.3332 19.7067C38.4332 19.7067 39.3332 18.8067 39.3332 17.7067V15.7067C39.3332 14.6067 38.4332 13.7067 37.3332 13.7067ZM37.9998 17.7067C37.9998 18.0733 37.6998 18.3733 37.3332 18.3733C36.9665 18.3733 36.6665 18.0733 36.6665 17.7067V15.7067C36.6665 15.34 36.9665 15.04 37.3332 15.04C37.6998 15.04 37.9998 15.34 37.9998 15.7067V17.7067ZM23.9998 19.7333C24.3665 19.7333 24.6665 19.4333 24.6665 19.0667V14.3733C24.6665 14.0067 24.3665 13.7067 23.9998 13.7067C23.6332 13.7067 23.3332 14.0067 23.3332 14.3733V19.0667C23.3332 19.4333 23.6332 19.7333 23.9998 19.7333ZM23.3332 26.3733C23.3332 26.74 23.6332 27.04 23.9998 27.04C24.3665 27.04 24.6665 26.74 24.6665 26.3733V21.68C24.6665 21.3133 24.3665 21.0133 23.9998 21.0133C23.6332 21.0133 23.3332 21.3133 23.3332 21.68V26.3733ZM27.3332 26.4V21.7067C27.3332 21.34 27.0332 21.04 26.6665 21.04C26.2998 21.04 25.9998 21.34 25.9998 21.7067V26.4C25.9998 26.7667 26.2998 27.0667 26.6665 27.0667C27.0332 27.0667 27.3332 26.7667 27.3332 26.4ZM33.9998 21.68C33.9998 21.3133 33.6998 21.0133 33.3332 21.0133C32.9665 21.0133 32.6665 21.3133 32.6665 21.68V26.3733C32.6665 26.74 32.9665 27.04 33.3332 27.04C33.6998 27.04 33.9998 26.74 33.9998 26.3733V21.68ZM35.3332 26.4C35.3332 26.7667 35.6332 27.0667 35.9998 27.0667C36.3665 27.0667 36.6665 26.7667 36.6665 26.4V21.7067C36.6665 21.34 36.3665 21.04 35.9998 21.04C35.6332 21.04 35.3332 21.34 35.3332 21.7067V26.4ZM31.3332 19.0667V14.3733C31.3332 14.0067 31.0332 13.7067 30.6665 13.7067C30.2998 13.7067 29.9998 14.0067 29.9998 14.3733V19.0667C29.9998 19.4333 30.2998 19.7333 30.6665 19.7333C31.0332 19.7333 31.3332 19.4333 31.3332 19.0667ZM41.3332 19.0667V14.3733C41.3332 14.0067 41.0332 13.7067 40.6665 13.7067C40.2998 13.7067 39.9998 14.0067 39.9998 14.3733V19.0667C39.9998 19.4333 40.2998 19.7333 40.6665 19.7333C41.0332 19.7333 41.3332 19.4333 41.3332 19.0667ZM33.3332 19.7333C33.6998 19.7333 33.9998 19.4333 33.9998 19.0667V14.3733C33.9998 14.0067 33.6998 13.7067 33.3332 13.7067C32.9665 13.7067 32.6665 14.0067 32.6665 14.3733V19.0667C32.6665 19.4333 32.9665 19.7333 33.3332 19.7333Z" />
    </g>
    </svg>
    </div>
    <div class="solution-content">
    <h4><a href="service-details.html">Game Development</a></h4>
    <p>At Around Tech, we offer innovative game development services that turn your ideas into immersive, interactive experiences.From concept to launch and beyond, we provide full-cycle game development services to turn your vision into reality.</p>
    <ul class="solution-feature">
    <li>
    <svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
    </svg>
    Web application development
    </li>
    <li>
    <svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
    </svg>
    Game development
    </li>
    </ul>
    </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="solution-card">
    <div class="icon">
    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_1453_763)">
    <path d="M25.2665 33.04C24.8998 33.04 24.5998 33.34 24.5998 33.7067V46.3734H20.6665C20.2998 46.3734 19.9998 46.6734 19.9998 47.04V53.7867C18.6665 54.0934 17.6665 55.28 17.6665 56.7067C17.6665 58.36 19.0132 59.7067 20.6665 59.7067C22.3198 59.7067 23.6665 58.36 23.6665 56.7067C23.6665 55.28 22.6665 54.0934 21.3332 53.7867V47.7067H25.2665C25.6332 47.7067 25.9332 47.4067 25.9332 47.04V33.7067C25.9332 33.34 25.6332 33.04 25.2665 33.04ZM22.3332 56.7067C22.3332 57.1487 22.1576 57.5727 21.845 57.8852C21.5325 58.1978 21.1085 58.3734 20.6665 58.3734C20.2245 58.3734 19.8006 58.1978 19.488 57.8852C19.1754 57.5727 18.9998 57.1487 18.9998 56.7067C18.9998 56.2647 19.1754 55.8408 19.488 55.5282C19.8006 55.2156 20.2245 55.04 20.6665 55.04C21.1085 55.04 21.5325 55.2156 21.845 55.5282C22.1576 55.8408 22.3332 56.2647 22.3332 56.7067Z" />
    <path d="M12 53.7867V43.7067H20.6667C21.0333 43.7067 21.3333 43.4067 21.3333 43.04V33.7067C21.3333 33.34 21.0333 33.04 20.6667 33.04C20.3 33.04 20 33.34 20 33.7067V42.3734H5.92C5.61333 41.04 4.42667 40.04 3 40.04C1.34667 40.04 0 41.3867 0 43.04C0 44.6934 1.34667 46.04 3 46.04C4.42667 46.04 5.61333 45.04 5.92 43.7067H10.6667V53.7867C9.33333 54.0934 8.33333 55.28 8.33333 56.7067C8.33333 58.36 9.68 59.7067 11.3333 59.7067C12.9867 59.7067 14.3333 58.36 14.3333 56.7067C14.3333 55.28 13.3333 54.0934 12 53.7867ZM3 44.7067C2.55797 44.7067 2.13405 44.5311 1.82149 44.2186C1.50893 43.906 1.33333 43.4821 1.33333 43.04C1.33333 42.598 1.50893 42.1741 1.82149 41.8615C2.13405 41.549 2.55797 41.3734 3 41.3734C3.44203 41.3734 3.86595 41.549 4.17851 41.8615C4.49107 42.1741 4.66667 42.598 4.66667 43.04C4.66667 43.4821 4.49107 43.906 4.17851 44.2186C3.86595 44.5311 3.44203 44.7067 3 44.7067ZM11.3333 58.3734C10.8913 58.3734 10.4674 58.1978 10.1548 57.8852C9.84226 57.5727 9.66667 57.1487 9.66667 56.7067C9.66667 56.2647 9.84226 55.8408 10.1548 55.5282C10.4674 55.2156 10.8913 55.04 11.3333 55.04C11.7754 55.04 12.1993 55.2156 12.5118 55.5282C12.8244 55.8408 13 56.2647 13 56.7067C13 57.1487 12.8244 57.5727 12.5118 57.8852C12.1993 58.1978 11.7754 58.3734 11.3333 58.3734Z" />
    <path d="M57.0003 40.04C55.5737 40.04 54.387 41.04 54.0803 42.3733H47.3337V38.3733H49.907C55.4737 38.3733 60.0003 33.8867 60.0003 28.3733C60.0003 24.3 57.527 20.8 53.9937 19.24C53.9203 9.68 45.967 1 36.9003 1C31.0137 1 25.5203 4.04 22.407 8.96667C20.8438 7.71712 18.9015 7.03756 16.9003 7.04C11.827 7.04 8.03366 12.3867 8.00033 17.0933C3.72033 18.6667 0.666992 22.6733 0.666992 27.3733C0.666992 33.1533 5.28033 37.8933 11.1203 38.3333C11.187 38.36 11.2603 38.3733 11.3337 38.3733H16.027C16.3937 38.3733 16.6937 38.0733 16.6937 37.7067C16.6937 37.34 16.3937 37.04 16.027 37.04H12.0003C6.48699 37.04 2.00033 32.7067 2.00033 27.3733C2.00033 22.04 6.48699 17.7067 12.0003 17.7067C12.367 17.7067 12.667 17.4067 12.667 17.04C12.667 16.6733 12.367 16.3733 12.0003 16.3733C11.087 16.3733 10.207 16.4867 9.35366 16.6867C9.59366 11.96 13.4403 8.37333 16.9003 8.37333C18.8937 8.37333 20.7737 9.14667 22.1937 10.5533C22.4537 10.8133 22.8803 10.8133 23.1337 10.5533C23.2803 10.4067 23.3337 10.2067 23.3137 10.02C26.147 5.28 31.3337 2.34 36.8937 2.34C45.1003 2.34 52.3137 10.1067 52.647 18.7667C51.7737 18.52 50.8537 18.38 49.9003 18.38C49.5337 18.38 49.2337 18.68 49.2337 19.0467C49.2337 19.4133 49.5337 19.7133 49.9003 19.7133C54.7337 19.7133 58.6603 23.6 58.6603 28.38C58.6603 33.16 54.727 37.0467 49.9003 37.0467H43.9937C43.627 37.0467 43.327 37.3467 43.327 37.7133C43.327 38.08 43.627 38.38 43.9937 38.38H45.9937V43.0467C45.9937 43.4133 46.2937 43.7133 46.6603 43.7133H54.0737C54.3803 45.0467 55.567 46.0467 56.9937 46.0467C58.647 46.0467 59.9937 44.7 59.9937 43.0467C59.9937 41.3933 58.647 40.0467 56.9937 40.0467L57.0003 40.04ZM57.0003 44.7067C56.5583 44.7067 56.1344 44.5311 55.8218 44.2185C55.5093 43.906 55.3337 43.482 55.3337 43.04C55.3337 42.598 55.5093 42.174 55.8218 41.8615C56.1344 41.5489 56.5583 41.3733 57.0003 41.3733C57.4424 41.3733 57.8663 41.5489 58.1788 41.8615C58.4914 42.174 58.667 42.598 58.667 43.04C58.667 43.482 58.4914 43.906 58.1788 44.2185C57.8663 44.5311 57.4424 44.7067 57.0003 44.7067Z" />
    <path d="M30.6667 53.7867V33.7067C30.6667 33.34 30.3667 33.04 30 33.04C29.6333 33.04 29.3333 33.34 29.3333 33.7067V53.7867C28 54.0934 27 55.28 27 56.7067C27 58.36 28.3467 59.7067 30 59.7067C31.6533 59.7067 33 58.36 33 56.7067C33 55.28 32 54.0934 30.6667 53.7867ZM30 58.3734C29.558 58.3734 29.134 58.1978 28.8215 57.8852C28.5089 57.5727 28.3333 57.1487 28.3333 56.7067C28.3333 56.2647 28.5089 55.8408 28.8215 55.5282C29.134 55.2156 29.558 55.04 30 55.04C30.442 55.04 30.866 55.2156 31.1785 55.5282C31.4911 55.8408 31.6667 56.2647 31.6667 56.7067C31.6667 57.1487 31.4911 57.5727 31.1785 57.8852C30.866 58.1978 30.442 58.3734 30 58.3734ZM40 53.7867V49.7067C40 49.4667 39.8733 49.2467 39.6667 49.1267L35.3333 46.6534V33.7067C35.3333 33.34 35.0333 33.04 34.6667 33.04C34.3 33.04 34 33.34 34 33.7067V47.04C34 47.28 34.1267 47.5 34.3333 47.62L38.6667 50.0934V53.7867C37.3333 54.0934 36.3333 55.28 36.3333 56.7067C36.3333 58.36 37.68 59.7067 39.3333 59.7067C40.9867 59.7067 42.3333 58.36 42.3333 56.7067C42.3333 55.28 41.3333 54.0934 40 53.7867ZM39.3333 58.3734C38.8913 58.3734 38.4674 58.1978 38.1548 57.8852C37.8423 57.5727 37.6667 57.1487 37.6667 56.7067C37.6667 56.2647 37.8423 55.8408 38.1548 55.5282C38.4674 55.2156 38.8913 55.04 39.3333 55.04C39.7754 55.04 40.1993 55.2156 40.5118 55.5282C40.8244 55.8408 41 56.2647 41 56.7067C41 57.1487 40.8244 57.5727 40.5118 57.8852C40.1993 58.1978 39.7754 58.3734 39.3333 58.3734Z" />
    <path d="M49.3332 53.7867V49.5667C49.3332 49.3133 49.1865 49.08 48.9598 48.9667L39.9998 44.62V33.7067C39.9998 33.34 39.6998 33.04 39.3332 33.04C38.9665 33.04 38.6665 33.34 38.6665 33.7067V45.04C38.6665 45.2933 38.8132 45.5267 39.0398 45.64L47.9998 49.9867V53.7867C46.6665 54.0933 45.6665 55.28 45.6665 56.7067C45.6665 58.36 47.0132 59.7067 48.6665 59.7067C50.3198 59.7067 51.6665 58.36 51.6665 56.7067C51.6665 55.28 50.6665 54.0933 49.3332 53.7867ZM48.6665 58.3733C48.2245 58.3733 47.8006 58.1977 47.488 57.8852C47.1754 57.5726 46.9998 57.1487 46.9998 56.7067C46.9998 56.2646 47.1754 55.8407 47.488 55.5282C47.8006 55.2156 48.2245 55.04 48.6665 55.04C49.1085 55.04 49.5325 55.2156 49.845 55.5282C50.1576 55.8407 50.3332 56.2646 50.3332 56.7067C50.3332 57.1487 50.1576 57.5726 49.845 57.8852C49.5325 58.1977 49.1085 58.3733 48.6665 58.3733ZM20.6665 19.7067C21.7665 19.7067 22.6665 18.8067 22.6665 17.7067V15.7067C22.6665 14.6067 21.7665 13.7067 20.6665 13.7067C19.5665 13.7067 18.6665 14.6067 18.6665 15.7067V17.7067C18.6665 18.8067 19.5665 19.7067 20.6665 19.7067ZM19.9998 15.7067C19.9998 15.34 20.2998 15.04 20.6665 15.04C21.0332 15.04 21.3332 15.34 21.3332 15.7067V17.7067C21.3332 18.0733 21.0332 18.3733 20.6665 18.3733C20.2998 18.3733 19.9998 18.0733 19.9998 17.7067V15.7067ZM18.6665 25.04C18.6665 26.14 19.5665 27.04 20.6665 27.04C21.7665 27.04 22.6665 26.14 22.6665 25.04V23.04C22.6665 21.94 21.7665 21.04 20.6665 21.04C19.5665 21.04 18.6665 21.94 18.6665 23.04V25.04ZM19.9998 23.04C19.9998 22.6733 20.2998 22.3733 20.6665 22.3733C21.0332 22.3733 21.3332 22.6733 21.3332 23.04V25.04C21.3332 25.4067 21.0332 25.7067 20.6665 25.7067C20.2998 25.7067 19.9998 25.4067 19.9998 25.04V23.04ZM27.9998 23.04V25.04C27.9998 26.14 28.8998 27.04 29.9998 27.04C31.0998 27.04 31.9998 26.14 31.9998 25.04V23.04C31.9998 21.94 31.0998 21.04 29.9998 21.04C28.8998 21.04 27.9998 21.94 27.9998 23.04ZM30.6665 23.04V25.04C30.6665 25.4067 30.3665 25.7067 29.9998 25.7067C29.6332 25.7067 29.3332 25.4067 29.3332 25.04V23.04C29.3332 22.6733 29.6332 22.3733 29.9998 22.3733C30.3665 22.3733 30.6665 22.6733 30.6665 23.04ZM37.3332 23.04V25.04C37.3332 26.14 38.2332 27.04 39.3332 27.04C40.4332 27.04 41.3332 26.14 41.3332 25.04V23.04C41.3332 21.94 40.4332 21.04 39.3332 21.04C38.2332 21.04 37.3332 21.94 37.3332 23.04ZM39.9998 23.04V25.04C39.9998 25.4067 39.6998 25.7067 39.3332 25.7067C38.9665 25.7067 38.6665 25.4067 38.6665 25.04V23.04C38.6665 22.6733 38.9665 22.3733 39.3332 22.3733C39.6998 22.3733 39.9998 22.6733 39.9998 23.04ZM27.3332 13.7067C26.2332 13.7067 25.3332 14.6067 25.3332 15.7067V17.7067C25.3332 18.8067 26.2332 19.7067 27.3332 19.7067C28.4332 19.7067 29.3332 18.8067 29.3332 17.7067V15.7067C29.3332 14.6067 28.4332 13.7067 27.3332 13.7067ZM27.9998 17.7067C27.9998 18.0733 27.6998 18.3733 27.3332 18.3733C26.9665 18.3733 26.6665 18.0733 26.6665 17.7067V15.7067C26.6665 15.34 26.9665 15.04 27.3332 15.04C27.6998 15.04 27.9998 15.34 27.9998 15.7067V17.7067ZM37.3332 13.7067C36.2332 13.7067 35.3332 14.6067 35.3332 15.7067V17.7067C35.3332 18.8067 36.2332 19.7067 37.3332 19.7067C38.4332 19.7067 39.3332 18.8067 39.3332 17.7067V15.7067C39.3332 14.6067 38.4332 13.7067 37.3332 13.7067ZM37.9998 17.7067C37.9998 18.0733 37.6998 18.3733 37.3332 18.3733C36.9665 18.3733 36.6665 18.0733 36.6665 17.7067V15.7067C36.6665 15.34 36.9665 15.04 37.3332 15.04C37.6998 15.04 37.9998 15.34 37.9998 15.7067V17.7067ZM23.9998 19.7333C24.3665 19.7333 24.6665 19.4333 24.6665 19.0667V14.3733C24.6665 14.0067 24.3665 13.7067 23.9998 13.7067C23.6332 13.7067 23.3332 14.0067 23.3332 14.3733V19.0667C23.3332 19.4333 23.6332 19.7333 23.9998 19.7333ZM23.3332 26.3733C23.3332 26.74 23.6332 27.04 23.9998 27.04C24.3665 27.04 24.6665 26.74 24.6665 26.3733V21.68C24.6665 21.3133 24.3665 21.0133 23.9998 21.0133C23.6332 21.0133 23.3332 21.3133 23.3332 21.68V26.3733ZM27.3332 26.4V21.7067C27.3332 21.34 27.0332 21.04 26.6665 21.04C26.2998 21.04 25.9998 21.34 25.9998 21.7067V26.4C25.9998 26.7667 26.2998 27.0667 26.6665 27.0667C27.0332 27.0667 27.3332 26.7667 27.3332 26.4ZM33.9998 21.68C33.9998 21.3133 33.6998 21.0133 33.3332 21.0133C32.9665 21.0133 32.6665 21.3133 32.6665 21.68V26.3733C32.6665 26.74 32.9665 27.04 33.3332 27.04C33.6998 27.04 33.9998 26.74 33.9998 26.3733V21.68ZM35.3332 26.4C35.3332 26.7667 35.6332 27.0667 35.9998 27.0667C36.3665 27.0667 36.6665 26.7667 36.6665 26.4V21.7067C36.6665 21.34 36.3665 21.04 35.9998 21.04C35.6332 21.04 35.3332 21.34 35.3332 21.7067V26.4ZM31.3332 19.0667V14.3733C31.3332 14.0067 31.0332 13.7067 30.6665 13.7067C30.2998 13.7067 29.9998 14.0067 29.9998 14.3733V19.0667C29.9998 19.4333 30.2998 19.7333 30.6665 19.7333C31.0332 19.7333 31.3332 19.4333 31.3332 19.0667ZM41.3332 19.0667V14.3733C41.3332 14.0067 41.0332 13.7067 40.6665 13.7067C40.2998 13.7067 39.9998 14.0067 39.9998 14.3733V19.0667C39.9998 19.4333 40.2998 19.7333 40.6665 19.7333C41.0332 19.7333 41.3332 19.4333 41.3332 19.0667ZM33.3332 19.7333C33.6998 19.7333 33.9998 19.4333 33.9998 19.0667V14.3733C33.9998 14.0067 33.6998 13.7067 33.3332 13.7067C32.9665 13.7067 32.6665 14.0067 32.6665 14.3733V19.0667C32.6665 19.4333 32.9665 19.7333 33.3332 19.7333Z" />
    </g>
    </svg>
    </div>
    <div class="solution-content">
    <h4><a href="service-details.html">Digital Marketing</a></h4>
    <p>At Around Tech, we provide a complete range of digital marketing services designed to help businesses grow their online presence, increase customer engagement, and drive conversions.</p>
    <ul class="solution-feature">
    <li>
    <svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
    </svg>
    Web application development
    </li>
    <li>
    <svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
    </svg>
    Game development
    </li>
    </ul>
    </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Services Sections Ends -->

<!-- Portfolio Area Starts -->

<div class="home3-success-stories-area sec-mar">
<div class="container">
<div class="row mb-60 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
<div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-4">
<div class="section-title-3">
<h2>Successful Implementations</h2>
<p>"Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. These services can be tailored to fit a range of budgets, ensuring accessibility and value for clients of all sizes."</p>
</div>
<div class="view-all-btn">
<a class="primary-btn3" href="project.html">View All Project</a>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="swiper home3-success-stories-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="success-storie-card">
<div class="success-img">
<img class="img-fluid magnetic-item" src="assets/img/home-3/home3-suc-sto-01.png" alt>
</div>
<div class="success-content">
<span>Web development</span>
<h3><a href="project-details.html">Streamlining IT Infrastructure</a></h3>
<div class="view-btn">
<a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="success-storie-card">
<div class="success-img">
<img class="img-fluid magnetic-item" src="assets/img/home-3/home3-suc-sto-02.png" alt>
</div>
<div class="success-content">
<span>Web development</span>
<h3><a href="project-details.html">Transforming Customer Experience</a></h3>
<div class="view-btn">
<a href="#">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="success-storie-card">
<div class="success-img">
<img class="img-fluid magnetic-item" src="assets/img/home-3/home3-suc-sto-03.png" alt>
</div>
<div class="success-content">
<span>Web development</span>
<h3><a href="project-details.html">Scaling Agile Development</a></h3>
<div class="view-btn">
<a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="success-storie-card">
<div class="success-img">
<img class="img-fluid magnetic-item" src="assets/img/home-3/home3-suc-sto-04.png" alt>
</div>
<div class="success-content">
<span>Web development</span>
<h3><a href="project-details.html">Optimizing IT Operations</a></h3>
<div class="view-btn">
<a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="success-storie-card">
<div class="success-img">
<img class="img-fluid magnetic-item" src="assets/img/home-3/home3-suc-sto-05.png" alt>
</div>
<div class="success-content">
<span>Web development</span>
<h3><a href="project-details.html">Maximizing Efficiency with DevOps</a></h3>
<div class="view-btn">
<a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row pt-50">
<div class="col-lg-12 position-relative">
<div class="swiper-pagination11"></div>
</div>
</div>
</div>
</div>

<!-- Portfolio Area Ends -->


<!--  Testimonial Area Starts -->
<div class="home3-testimonil-area sec-mar">
<div class="container">
<div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
<div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
<div class="section-title-3">
<h2>Happy Customers</h2>
<p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
</div>
<div class="swiper-btn-group">
<div class="swiper-btn prevbtn2">
<i class="bi bi-arrow-left"></i>
</div>
<div class="swiper-btn nextbtn2">
<i class="bi bi-arrow-right"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="swiper home3-testimonial-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-card3">
<div class="quate-icon">
<img src="assets/img/home-4/left-quote.svg" alt>
</div>
<div class="testimonial-top">
<div class="review-left">
<img src="assets/img/home-4/trustpilot.svg" alt>
</div>
<div class="review-right">
<img src="assets/img/home-4/trastpilot-star.svg" alt>
</div>
</div>
<div class="testimonial-content">
<p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor
himenaeos. Praesent nec neque at dolor venenatis consectetur european gon
Donec lacinia placerat felis non aliquam.”</p>
</div>
<div class="testimonial-btm">
<div class="author-area">
<div class="author-content">
<h4>Mateo Daniel</h4>
<span>CEO At atlantis.com</span>
</div>
</div>
<div class="review-date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-img">
<img src="assets/img/home-3/h3-testi-01.png" alt>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card3">
<div class="quate-icon">
<img src="assets/img/home-4/left-quote.svg" alt>
</div>
<div class="testimonial-top">
<div class="review-left">
<img src="assets/img/home-4/google.svg" alt>
</div>
<div class="review-right">
<ul class="star">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
</div>
</div>
<div class="testimonial-content">
<p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor
himenaeos. Praesent nec neque at dolor venenatis consectetur european gon
Donec lacinia placerat felis non aliquam.”</p>
</div>
<div class="testimonial-btm">
<div class="author-area">
<div class="author-content">
<h4>Mateo Daniel</h4>
<span>CEO At atlantis.com</span>
</div>
</div>
<div class="review-date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-img">
<img src="assets/img/home-3/h3-testi-02.png" alt>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card3">
<div class="quate-icon">
<img src="assets/img/home-4/left-quote.svg" alt>
</div>
<div class="testimonial-top">
<div class="review-left">
<img src="assets/img/home-4/trustpilot.svg" alt>
</div>
<div class="review-right">
<img src="assets/img/home-4/trastpilot-star.svg" alt>
</div>
</div>
<div class="testimonial-content">
<p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor
himenaeos. Praesent nec neque at dolor venenatis consectetur european gon
Donec lacinia placerat felis non aliquam.”</p>
</div>
<div class="testimonial-btm">
<div class="author-area">
<div class="author-content">
<h4>Mateo Daniel</h4>
<span>CEO At atlantis.com</span>
</div>
</div>
<div class="review-date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-img">
<img src="assets/img/home-3/h3-testi-03.png" alt>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 

<!--  Testimonial Area Ends -->

<!-- Blogs Section Area Starts -->

<div class="home3-blog-area sec-mar">
    <div class="container">
    <div class="row mb-55  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="col-lg-12 d-flex justify-content-center">
    <div class="section-title-3 text-center">
    <h2>The Latest Article</h2>
    <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
    </div>
    </div>
    </div>
    <div class="row justify-content-center g-lg-4 gy-5">
    <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
    <div class="single-blog magnetic-item">
    <div class="blog-img">
    <img class="img-fluid" src="assets/img/home-3/home3-blog-01.png" alt>
    <div class="blog-tag">
    <a href="blog.html">Web development</a>
    </div>
    </div>
    <div class="blog-content">
    <ul class="blog-meta">
    <li><a href="blog.html">May 20, 2023</a></li>
    <li><a href="blog.html">Comment (3)</a></li>
    </ul>
    <h4><a href="blog-details.html">Donec finibus laoreet exte eu pellentesque. </a></h4>
    <div class="blog-footer">
    <div class="read-btn">
    <a href="blog-details.html">Read More
    <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
    </svg>
    </a>
    </div>
    <div class="social-area">
    <ul>
    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
    </ul>
    <span><img src="assets/img/home-3/plain-icon.svg" alt></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="single-blog magnetic-item">
    <div class="blog-img">
    <img class="img-fluid" src="assets/img/home-3/home3-blog-02.png" alt>
    <div class="blog-tag">
    <a href="blog.html">Cloud solutions</a>
    </div>
    </div>
    <div class="blog-content">
    <ul class="blog-meta">
    <li><a href="blog.html">May 20, 2023</a></li>
    <li><a href="blog.html">Comment (3)</a></li>
    </ul>
    <h4><a href="blog-details.html">feugiat varius mattis mass enim est egestas.</a></h4>
    <div class="blog-footer">
    <div class="read-btn">
    <a href="blog-details.html">Read More
    <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
    </svg>
    </a>
    </div>
    <div class="social-area">
    <ul>
    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
    </ul>
    <span><img src="assets/img/home-3/plain-icon.svg" alt></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
    <div class="single-blog magnetic-item">
    <div class="blog-img">
    <img class="img-fluid" src="assets/img/home-3/home3-blog-03.png" alt>
    <div class="blog-tag">
    <a href="blog.html">Web development</a>
    </div>
    </div>
    <div class="blog-content">
    <ul class="blog-meta">
    <li><a href="blog.html">May 20, 2023</a></li>
    <li><a href="blog.html">Comment (3)</a></li>
    </ul>
    <h4><a href="blog-details.html">Navigating the Journey off Cloud Solution.</a></h4>
    <div class="blog-footer">
    <div class="read-btn">
    <a href="blog-details.html">Read More
    <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
    </svg>
    </a>
    </div>
    <div class="social-area">
    <ul>
    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
    </ul>
    <span><img src="assets/img/home-3/plain-icon.svg" alt></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- Blogs Section Area Ends -->


<!-- Contact-us Area Starts -->

<div class="collaborate-section mb-130">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="collaborate-wrapper">
    <div class="section-title-5">
    <span>LET’S COLLABORATE</span>
    <h2>Ready to <br>
    <span>work with us?</span></h2>
    <div class="get-btn">
    <a class="primary-btn3" href="login.html">Login</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- Contact-us Area Ends -->

<!-- Footer Starts -->
<!-- <footer>
<div class="footer-top">
<div class="container">
<div class="row">
</div>
</div>
</div>
<div class="container">
<div class="row g-lg-4 gy-5">
<div class="col-lg-4 col-sm-6 d-flex">
<div class="footer-widget">
<div class="footer-contact mb-40">
<h4>
<svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
<path d="M12.9213 3.4249C11.7076 1.33021 9.55162 0.0504883 7.15416 0.00158203C7.05181 -0.000527344 6.9488 -0.000527344 6.84642 0.00158203C4.449 0.0504883 2.29306 1.33021 1.07923 3.4249C-0.161468 5.566 -0.195414 8.13787 0.988414 10.3047L5.94791 19.3823C5.95013 19.3863 5.95236 19.3904 5.95466 19.3944C6.17287 19.7736 6.56377 20 7.00037 20C7.43693 20 7.82783 19.7736 8.04599 19.3944C8.0483 19.3904 8.05052 19.3863 8.05275 19.3823L13.0122 10.3047C14.196 8.13787 14.162 5.566 12.9213 3.4249ZM7.00029 9.06252C5.44947 9.06252 4.18779 7.80084 4.18779 6.25002C4.18779 4.6992 5.44947 3.43752 7.00029 3.43752C8.55111 3.43752 9.81279 4.6992 9.81279 6.25002C9.81279 7.80084 8.55115 9.06252 7.00029 9.06252Z" />
</svg>
Address
</h4>
<a href="#">A929 , 9th floor
    Bhutani Alphathum , Sector-90
    Noida 201305</a>
</div>

<div class="footer-contact">
<h6>See Our New updates</h6>
<form>
<div class="form-inner">
<input type="text" placeholder="Email here...">
<button type="submit">
<svg width="17" height="17" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</button>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 d-flex justify-content-lg-start justify-content-sm-end">
<div class="footer-widget">
<div class="widget-title">
<h4>Our Solutions</h4>
</div>
<div class="menu-container">
<ul>
<li><a href="service.html">Web Development</a></li>
<li><a href="service.html">Mobile Development</a></li>
<li><a href="service.html">Cloud Services</a></li>
<li><a href="service.html">Network Connectivity</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-2 col-sm-6 d-flex justify-content-lg-center">
<div class="footer-widget">
<div class="widget-title">
<h4>Company</h4>
</div>
<div class="menu-container">
<ul>
<li><a href="about.html">About Us</a></li>
<li><a href="case-study.html">Case Study</a></li>
<li><a href="blog.html">News & Article</a></li>
<li><a href="team1.html">Our Team</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 d-flex justify-content-sm-end">
<div class="footer-widget">
<div class="widget-title">
<h4>Resources</h4>
</div>
<div class="menu-container">
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Support Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Pricing Plan</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="footer-btm">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer-btn-content">
<div class="copyright-area">
<p>©Copyright 2023 <a href="#">Around Tech Solutions</a> | Design By <a href="https://www.egenslab.com/">Egens Lab</a></p>
</div>
<div class="footer-social">
<ul>
<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
<li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</footer> -->

<?php include './assets/components/footer.php'; ?> 
<!-- Footer Ends -->

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/swiper-bundle.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/jquery.fancybox.min.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/simpleParallax.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>

<script src="assets/js/jquery.marquee.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/preloader.js"></script>
<script src="assets/js/custom.js"></script>
<script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
            });
            $(".marquee_text2").marquee({
            direction: "top",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
</body>
</html>