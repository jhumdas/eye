<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assests-Eyes</title>
    <link href="assets/css/style.css" rel="stylesheet" type="">
    <link href="assets/css/titas.css" rel="stylesheet" type="">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>



<section class="header">
    <div class="Cust_container">
        <div class="row" style="align-items:center;">
            <div class="col-lg-3 col-md-3 col-6">
                <div class="logo">
                    <img src='assets/imgaes/logo.png' alt='' />
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-6">
                <ul class="navMenu">
                    <li><a href='#'>Home</a></li>
                    <li><a href='About.php'>About</a></li>
                    <li><a href='HVAC.php'>Industry</a></li>
                    <li><a href='#'>FAQs</a></li>
                    <li><a href='#'>Blog</a></li>
                    <li><a href='#'>Contact Us</a></li>

                </ul>
                <div class="toggole" onclick="openSidebar ()">
                    <a href="#"><i class="fa-solid fa-bars-staggered"></i></a>
                </div>

                <div class="mobile_sidebar" id="mobile_sidebar">
                    <a href="#" class="closeBtn" onclick="closeSidebar ()"><i class="fa-solid fa-rectangle-xmark"></i></a>
                    <ul class="nav_Menu">
                        <li><a href='#'>Home</a></li>
                        <li><a href='#'>About</a></li>
                        <li><a href='#'>Industry</a></li>
                        <li><a href='#'>FAQs</a></li>
                        <li><a href='#'>Blog</a></li>
                        <li><a href='#'>Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<body>