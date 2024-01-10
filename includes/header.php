<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assests-Eyes</title>
    <link rel="icon" type="image/x-icon" href="../assets/imgaes/favicon.ico">
    <link href="assets/css/style.css" rel="stylesheet" type="">
    <link href="assets/css/titas.css" rel="stylesheet" type="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>



<section class="header" id="header">
    <div class="Cust_container">
        <div class="row" style="align-items:center;">
            <div class="col-lg-3 col-md-3 col-6">
                <div class="logo">
                    <a href="index.php"><img src='assets/imgaes/logo.png' alt='' /></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-6">
                <ul class="navMenu">
                    <li><a href='index.php' class="sarNavLink">Home</a></li>
                    <li><a href='About.php' class="sarNavLink">About</a></li>
                    <li>
                        <div class="dropdown">
                            <button onclick="myheaderFunction()" class="dropbtn dropbtnHead induClrBtn">Industry <span class="clsSpan"><i class="fa-solid fa-angle-down"></i></span></button>
                            <div id="myheaderDropdown" class="dropdown-content">
                                <a href="HVAC.php">HVAC</a>
                                <!--<a href="#">Lorem Ipsum</a>-->
                                <!--<a href="#">Lorem Ipsum</a>-->
                            </div>
                        </div>
                    </li>
                    <li><a href='FAQ.php' class="sarNavLink">FAQs</a></li>
                    <li><a href='blog.php' class="sarNavLink">Blog</a></li>
                    <li><a href='contact.php' class="sarNavLink">Contact Us</a></li>

                </ul>
                <div class="toggole" onclick="openSidebar ()">
                    <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                </div>

                <div class="mobile_sidebar" id="mobile_sidebar">
                    <div class="sidebarHeader">
                        <a href="index.php" class="sidebarLogo">
                            <img src='assets/imgaes/logo.png' alt='' />
                            </a>
                    <a href="#" class="closeBtn" onclick="closeSidebar ()"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <ul class="nav_Menu">
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='About.php'>About</a></li>
                        <li>
                            <div class="dropdown">
                                <button onclick="mysidebarFunction()" class="dropbtn dropbtnSide">Industry <span class="clsSideSpan"><i class="fa-solid fa-angle-down"></i></span></button>
                                <div id="mysidebarDropdown" class="dropdown-content">
                                    <a href="HVAC.php">HVAC</a>
                                </div>
                            </div>
                        </li>
                        <li><a href='FAQ.php'>FAQs</a></li>
                        <li><a href='blog.php'>Blog</a></li>
                        <li><a href='contact.php'>Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<body>
    <script>
        document.querySelector('.dropbtnSide').addEventListener('click', function(){
            if(document.getElementById('mysidebarDropdown').classList.contains('show')){
        document.querySelector('.clsSideSpan').innerHTML='<i class="fa-solid fa-angle-up"></i>';
    }else{
        document.querySelector('.clsSideSpan').innerHTML='<i class="fa-solid fa-angle-down"></i>';
    }
        })
    </script>