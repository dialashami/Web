<!DOCTYPE html>
<html>
<head>

</head>
<?php

require ("check.php");
if (isset($_POST['date'])){
    $date=$_POST['date'];
}
if (isset($_POST['time'])){
    $time=$_POST['time'];
}
if (isset($_POST['message'])){
    $message=$_POST['message'];
}

@ $db = new mysqli('localhost', 'root', '', 'project1');
if(isset($_POST['hair']))
{

    $course=$_POST['hair'];
    $chk="";
    foreach ($course as $chk1){
        $chk.=$chk1;

    }
    $sql="insert into reserve  value ('$date','$time','$chk','$message')";
    $sql2="insert into reservet  value ('$date','$time','$chk','$message')";
    if($db->query($sql)===true && $db->query($sql2)){

    }
    else{
        echo 'error';
    }
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <title>Beauty Center </title>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Dropdown Menu Bar</title> -->
    <link rel="stylesheet" href="style.css">
    <link href="Reservation.html">
    <script src="homepage.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Thanks for visiting">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 2.29.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|PT+Sans:400,400i,700,700i|Aref+Ruqaa:400,700|Advent+Pro:100,200,300,400,500,600,700">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "logo": "images/beauty.jpg"
        }</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">

</head>



<body>
<nav>
    <label class="logo">Beauty Center</label>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Products
                <i class="fas fa-caret-down"></i>
            </a>
            <ul>
                <li><a href="skin.php">Skin Care</a></li>
                <li><a href="hair.php">Hair Care</a></li>

            </ul>
        </li>

        <li><a href="#sec-8c43">Reserve</a></li>
        <li><a href="#hh">Contact</a></li>
        <li><a href="profile2.php">My profile</a></li>


    </ul>
</nav>
<section></section>
<div class="sliders">

    <div class="content">
        <div class="images">
            <video controls autoplay  >
                <source src="images/bride.mp4" type="video/mp4">
            </video>
            <!-- <img src="Images/makeup.jpg">
             <img src="Images/henna.jpg">
             <img src="Images/makeup-stock-getty.jpg">
             <img src="Images/Nail-Care.png">
             <img src="Images/hairstyle.jpg">
             <img src="Images/haircare.png">
             <img src="Images/skincare.jpg"> -->
        </div>
    </div>
    <script>
        var indexValue = 0;
        function slideShow(){
            setTimeout(slideShow, 2500);
            var x;
            const img = document.querySelectorAll("img");
            for(x = 0; x < img.length; x++){
                img[x].style.display = "none";
            }
            indexValue++;
            if(indexValue > img.length){indexValue = 1}
            img[indexValue -1].style.display = "block";
        }
        slideShow();
    </script>
</div>




<section id="Reserve" data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body"><header class="u-clearfix u-gradient u-header u-header" id="sec-8c43"><div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-center u-custom-font u-heading-font u-text u-text-body-alt-color u-text-1"><span class="u-file-icon u-icon u-icon-rectangle u-icon-1"><img src="images/logo.jpg" alt=""></span>&nbsp; &nbsp;Make your reservation
            </p>
        </div>
    </header>
    <section class="u-clearfix u-valign-bottom u-section-1" id="carousel_8a28">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-col">
                    <div class="u-align-justify u-container-style u-grey-10 u-layout-cell u-left-cell u-right-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="u-form u-form-1">
                                <form action="home.php" method="POST" class="u-clearfix u-form-spacing-26 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form-1">
                                    <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-1">
                                        <label for="date-c63d" class="u-custom-font u-form-control-hidden u-label u-label-1">Date</label>

                                        <input type="date" placeholder="" id="date" name="date" class="u-custom-font u-font-playfair-display u-gradient u-input u-input-rectangle u-input-1" required="">
                                    </div>

                                    <div class="u-form-group u-form-group-2">
                                        <label for="text-c743" class="u-custom-font u-form-control-hidden u-label u-label-2"></label>
                                        <input type="text" placeholder="time" id="time" name="time" class="u-custom-font u-font-playfair-display u-gradient u-input u-input-rectangle u-input-2" required="required" maxlength="100">
                                    </div>

                                    <div class="u-form-checkbox u-form-group u-form-group-3">
                                        <input type="checkbox" name="hair[]" value="hair,">
                                        <label for="checkbox-7fee" class="u-custom-font u-label u-label-3">Hair Cutting&nbsp; &nbsp; &nbsp; &nbsp; 35 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-4">
                                        <input type="checkbox" name="hair[]" value="protien,">
                                        <label for="checkbox-2084" class="u-custom-font u-label u-label-4">Protien&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 300-500 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-5">
                                        <input type="checkbox"  name="hair[]" value="makeup,">
                                        <label for="checkbox-9eca" class="u-custom-font u-label u-label-5">MakeUp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100-150 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-6">
                                        <input type="checkbox"  name="hair[]" value="henna,">
                                        <label for="checkbox-976c" class="u-custom-font u-label u-label-6">Henna&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;50-100 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-7">
                                        <input type="checkbox"  name="hair[]" value="hairdressing,">
                                        <label for="checkbox-3303" class="u-custom-font u-label u-label-7">Hairdressing&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100-150 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-8">
                                        <input type="checkbox"  name="hair[]" value="Hair coulring,">
                                        <label for="checkbox-58e2" class="u-custom-font u-label u-label-8">Hair Couloring&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100-200 ₪<br>
                                        </label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-9">
                                        <input type="checkbox"  name="hair[]" value="Eyelashes,">
                                        <label for="checkbox-de6e" class="u-custom-font u-label u-label-9">Eyelashes &amp; Eyebrows&nbsp; &nbsp; &nbsp;100 ₪<br>
                                        </label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-10">
                                        <input type="checkbox"  name="hair[]" value="nail,">
                                        <label for="checkbox-8139" class="u-custom-font u-label u-label-10">Nail Polish&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-group-11">
                                        <input type="checkbox"  name="hair[]" value="Hard Gels,">
                                        <label for="checkbox-e52f" class="u-custom-font u-label u-label-11">Builder &amp; Hard Gels&nbsp; &nbsp; &nbsp; &nbsp; 70 ₪</label>
                                    </div>
                                    <div class="u-form-checkbox u-form-group u-form-partition-factor-2 u-form-group-12">
                                        <input type="checkbox" name="hair[]" value="Skin care,">
                                        <label for="checkbox-9f0b" class="u-custom-font u-label u-label-12">Skin Care &amp; Spa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;200 ₪<br>
                                        </label>
                                    </div>

                                    <div class="u-form-group u-form-message u-form-group-13">
                                        <label for="message-5de2" class="u-custom-font u-form-control-hidden u-label u-label-13">Message</label>
                                        <textarea placeholder="Details" rows="4" cols="50" id="message" name="message" class="u-custom-font u-font-playfair-display u-gradient u-input u-input-rectangle u-input-3"></textarea>
                                    </div>

                                    <div class="u-align-left u-form-group u-form-submit u-form-group-14">
                                        <input type="submit" name="submit" value="Save"  class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-font-playfair-display u-radius-30 u-text-grey-90 u-btn-1"></a>
                                        <input type="submit" value="submit" class="u-form-control-hidden">

                                    </div>
                                </form>


                                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                                <input type="hidden" value="" name="recaptchaResponse">

                            </div>
                            <div class="u-container-style u-group u-shape-rectangle u-group-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">
                                <div class="u-container-layout u-container-layout-2">
                                    <div class="u-carousel u-gallery u-layout-carousel u-lightbox u-no-transition u-show-text-always u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-ceb8">
                                        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="5" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                            <li data-u-target="#carousel-ceb8" data-u-slide-to="6" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                                        </ol>


                                        <div class="u-carousel-inner u-gallery-inner" role="listbox">

                                            <div class="u-active u-carousel-item u-gallery-item">
                                                <div class="u-back-slide">
                                                    <img class="u-back-image u-expanded" src="images/make.jpeg" alt="">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-1">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Make Up <br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item">
                                                <div class="u-back-slide">
                                                    <img class="u-back-image u-expanded" src="images/a91f8500-bb7b-4542-bf0b-37863f6ead83.jpg">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-2">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Nail treatment </p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item" data-image-width="750" data-image-height="721">
                                                <div class="u-back-slide">
                                                    <img class="u-back-image u-expanded" src="images/hennaa.jpeg">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-3">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Henna</p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item" data-image-width="750" data-image-height="605">
                                                <div class="u-back-slide">
                                                    <img class="u-back-image u-expanded" src="images/skincare.jpg">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-4">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Skin care</p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item" data-image-width="750" data-image-height="732">
                                                <div class="u-back-slide u-uploaded-video u-back-slide-5" data-image-width="750" data-image-height="732">
                                                    <img src="images/protine.jpeg" alt="" data-image-width="2000" data-image-height="1333" class="u-back-image u-expanded">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-5">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Hair Protien</p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item" data-image-width="614" data-image-height="382">
                                                <div class="u-back-slide">
                                                    <img class="u-back-image u-expanded" src="images/eyeb.jpg">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-6">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Eyelashes Extention</p>
                                                </div>
                                            </div>
                                            <div class="u-carousel-item u-gallery-item" data-image-width="750" data-image-height="750">
                                                <div class="u-back-slide u-back-slide-7" data-image-width="750" data-image-height="750">
                                                    <img src="images/tint.jpeg" alt="" data-image-width="2000" data-image-height="1333" class="u-back-image u-expanded">
                                                </div>
                                                <div class="u-over-slide u-valign-top u-over-slide-7">
                                                    <h3 class="u-gallery-heading"></h3>
                                                    <p class="u-align-left u-custom-font u-gallery-text u-text-palette-2-dark-1" style="font-family: &quot;Advent Pro&quot;; font-weight: 400; text-transform: none; background-image: none;">Hair Tint </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-hover-palette-2-light-2 u-icon-circle u-opacity u-opacity-70 u-spacing-11 u-text-white u-carousel-control-1" href="#carousel-ceb8" role="button" data-u-slide="prev">
                        <span aria-hidden="true">
                          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-"></path></svg>
                        </span>
                                            <span class="sr-only">
                          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                        </span>
                                        </a>
                                        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-hover-palette-2-light-2 u-icon-circle u-opacity u-opacity-70 u-spacing-11 u-text-white u-carousel-control-2" href="#carousel-ceb8" role="button" data-u-slide="next">
                        <span aria-hidden="true">
                          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                        </span>
                                            <span class="sr-only">
                          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-gradient u-layout-cell u-left-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="u-align-center u-container-style u-group u-white u-group-2">
                                <div id ="hh"class="u-container-layout u-container-layout-4">
                                    <h6 class="u-text u-text-default u-text-1">call us</h6>
                                    <p class="u-large-text u-text u-text-default u-text-variant u-text-2">+9720569236758</p>
                                    <h6 class="u-text u-text-default u-text-3">location</h6>
                                    <p class="u-large-text u-text u-text-default u-text-variant u-text-4">Ma'jeen Street, Nablus,<br>Palestine
                                    </p>
                                    <h6 class="u-text u-text-default u-text-5">business hours</h6>
                                    <p class="u-large-text u-text u-text-default u-text-variant u-text-6">Sat – Fri,&nbsp;<br>10 am – 8 pm<br>Exept Monday
                                    </p>
                                </div>
                            </div>
                            <h3 class="u-text u-text-default u-text-7">Get in touch</h3>
                            <h6 class="u-text u-text-8">Hey! We are looking forward to make a great style to you !</h6>
                            <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                <a class="u-social-url" target="_blank" href="https://www.facebook.com/Jasmina-Beauty-Center-207491226807138"><span class="u-icon u-icon-circle u-social-facebook u-social-type-fill u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4aae"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-4aae"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M71.6,34.3h-8.2c-1.3,0-3.2,0.7-3.2,3.5v7.6h11.3l-1.3,12.9h-10V95H45V58.3h-7.2V45.4H45v-8.3c0-6,2.8-15.3,15.3-15.3l11.2,0V34.3z "></path></svg></span>
                                </a>
                                <a class="u-social-url" target="_blank" href="https://twitter.com/Danashami_"><span class="u-icon u-icon-circle u-social-twitter u-social-type-fill u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d99d"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-d99d"><path d="M56.1,0C25.1,0,0,25.1,0,56.1s25.1,56.1,56.1,56.1s56.1-25.1,56.1-56.1S87.1,0,56.1,0z M83.8,47.3 c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2c-7.6,0-14.6-2.2-20.6-6c1,0.1,2.1,0.2,3.2,0.2c6.3,0,12.1-2.1,16.7-5.7 c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1c0-0.1,0-0.1,0-0.2 c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14c-0.2-1-0.3-2-0.3-3.1 c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4c2.7-0.3,5.3-1,7.7-2.1 C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
                                </a>
                                <a class="u-social-url" target="_blank" href="https://www.instagram.com/_jasmina_beauty_center/"><span class="u-icon u-icon-circle u-social-instagram u-social-type-fill u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c6f5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-c6f5"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M90.6,73.4c0,9.6-7.8,17.5-17.5,17.5H38.6c-9.6,0-17.5-7.9-17.5-17.6V38.8c0-9.6,7.8-17.5,17.5-17.5h34.5c9.6,0,17.5,7.8,17.5,17.5 V73.4z"></path><path d="M73.1,28.9H38.6c-5.4,0-9.9,4.4-9.9,9.9v34.5c0,5.4,4.4,9.9,9.9,9.9h34.5c5.4,0,9.9-4.4,9.9-9.9V38.8 C83,33.4,78.6,28.9,73.1,28.9z M55.9,74C46,74,38,66,38,56.1c0-9.9,8-17.9,17.9-17.9c9.9,0,17.9,8,17.9,17.9 C73.8,66,65.8,74,55.9,74z M74.3,41.9c-2.3,0-4.2-1.9-4.2-4.2s1.9-4.2,4.2-4.2c2.3,0,4.2,1.9,4.2,4.2S76.6,41.9,74.3,41.9z"></path><path d="M55.9,45.8c-5.7,0-10.4,4.6-10.3,10.3c0,5.7,4.6,10.3,10.3,10.3s10.3-4.6,10.3-10.3 C66.2,50.4,61.6,45.8,55.9,45.8z"></path></svg></span>
                                </a>
                                <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-type-fill u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-31ac"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-31ac"><path d="M65.9,55.7l-17.6-8.9c-0.5-0.2-1,0.1-1,0.6v17.3c0,0.5,0.5,0.9,1,0.6L65.9,57C66.4,56.8,66.4,56,65.9,55.7z"></path><path d="M56.1,1.1c-30.4,0-55,24.6-55,55c0,30.4,24.6,55,55,55c30.4,0,55-24.6,55-55C111.1,25.7,86.5,1.1,56.1,1.1z M88.3,65.5 c0,7.4-6,13.4-13.4,13.4H37.3c-7.4,0-13.4-6-13.4-13.4V46.7c0-7.4,6-13.4,13.4-13.4h37.6c7.4,0,13.4,6,13.4,13.4V65.5z"></path></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-clearfix u-custom-color-4 u-footer" id="sec-c4a1"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0">
                <img src="images/beauty.png" class="u-logo-image u-logo-image-1" data-image-width="118.2037">
            </a>
            <h1 class="u-text u-text-1">Thanks for visiting</h1>
        </div></footer>
</section>


</section>
</body>
</html>
