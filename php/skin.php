<?php
$scan=60;
$namecan='candy';
$s1=20.00;
$name='clear';
$s2=25.00;
$name2='Number one';
$sand=25;
$nameand='curl & shine';
$s3=40.00;
$name3='Milk Cream';
$s4=25.00;
$name4='Pantiene3';
$s5=37.00;
$name5='Mielle';
$name6='Pantiene1';
$s6='30';
$namer='rose';
$sr=35;
$namen='no-nothing';
$sn=25;
$sn2=60;
$namen2='no-npthing2';
$nameo='olive';
$so=23;
$nameh='Travel Buddies';
$sh='36';
$namem='Maritta';
$sm=37;
$namema='marina cream';
$sma=35;
$z=1;
$type='skin';
if(isset($_POST['add120'])  ){

        @ $db = new mysqli('localhost', 'root', '', 'project1');
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database. Please try again later.";
            exit;
        }
        $sum = "SELECT * FROM card ";
        $res1 = $db->query($sum);
        $fi = $res1->num_rows + 1;

        $query = "insert into card (price,name,quantity,type) values('" . $s1 . "', '" . $name . "', '" . $z . "', '" . $type . "')";

    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s1."', '".$name."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);

    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();
}
if(isset($_POST['candy'])){
    if(isset($_POST['quantity'])) {
        $quan =(int)$_POST['quantity'];
        $quantity= $_SESSION['quan'];
        @ $db = new mysqli('localhost', 'root', '', 'project1');

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database. Please try again later.";
            exit;
        }
        $sum = "SELECT quantity,price,name FROM card ";

        $res1 = $db->query($sum);
        $fi = $res1->num_rows + 1;
        $query = "insert into card (quantity,price,name) values('". $quantity . "', '" . $scan . "', '" . $namecan . "')";
        $query2 = "insert into cardtotal (price,name,quantity,type) values('".$scan."', '".$namecan ."', '".$z ."', '".$type ."')";
        $re2=$db->query($query2);
        $result = $db->query($query);
        if ($result) {

        }
        else { echo 'alert ("An error has occurred. The item was not added.")'; }
        $db->close();

    }}
if(isset($_POST['and']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sand."', '".$nameand ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sand."', '".$nameand ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['marina']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sma."', '".$namema ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sma."', '".$namema ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['mar']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;


    $query = "insert into card (price,name,quantity) values ('".$sm."', '".$namem ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sm."', '".$namem ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['hala']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sh."', '".$nameh ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sh."', '".$nameh ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['olive']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$so."', '".$nameo ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$so."', '".$nameo ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['noth']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sn."', '".$namen ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sn."', '".$namen ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['noth']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sn2."', '".$namen2 ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sn2."', '".$namen2 ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['rose']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity) values('".$sr."', '".$namer ."', '".$z ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$sr."', '".$namer ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}

if(isset($_POST['n1']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;

    $query = "insert into card (price,name,quantity,type) values('".$s6."', '".$name6 ."', '".$z ."', '".$type ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s6."', '".$name6 ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['add37']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;
    $query = "insert into card (price,name,quantity,type) values('".$s5."', '".$name5 ."', '".$z ."', '".$type ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s5."', '".$name5 ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['add35']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;
    $query = "insert into card (price,name,quantity,type) values('".$s4."', '".$name4 ."', '".$z ."', '".$type ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s4."', '".$name4 ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['add25']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;
    $query = "insert into card (price,name,quantity,type) values('".$s2."', '".$name2 ."', '".$z ."', '".$type ."')";

    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s2."', '".$name2 ."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);

    if ($result && $re2) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}
if(isset($_POST['add40']) ){
    @ $db= new mysqli('localhost', 'root', '', 'project1');
    if (mysqli_connect_errno())
    { echo "Error: Could not connect to database. Please try again later."; exit;
    }
    $sum="SELECT * FROM card ";
    $res1=$db->query($sum);
    $fi=$res1->num_rows+1;
    $query = "insert into card (price,name,quantity,type) values('".$s3."', '".$name3 ."', '".$z ."', '".$type ."')";
    $query2 = "insert into cardtotal (price,name,quantity,type) values('".$s3."', '".$name3."', '".$z ."', '".$type ."')";
    $re2=$db->query($query2);
    $result = $db->query($query);
    if ($result) {

    }
    else { echo 'alert ("An error has occurred. The item was not added.")'; }
    $db->close();

}


?>

<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- This site is optimized with the Yoast SEO Premium plugin v15.1.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Skic Care </title>
   <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.colorlib.com\/tyche\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
        !function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">

        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel='stylesheet' id='sb_instagram_styles-css'  href='css1/s1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'  href='https://demo.colorlib.com/tyche/wp-includes/css/dist/bloc
    k-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-vendors-style-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/packages/woocommerce-
    blocks/build/vendors-style.css?ver=3.4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/css/woocommerce-layou
    t.css?ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=4.6.1' type='text/css' media='only screen and (max-
    width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=4.6.1' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link crossorigin="anonymous" rel='stylesheet' id='google-fonts-css'  href='//fonts.googleapis.com/css?family=Karla%3A400%2C700&#038;ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='https:top-car/demo.colorlib.com/tyche/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='owlCarousel-css'  href='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/vendors/owl-carousel/owl.carousel.min.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='owlCarousel-theme-css'  href='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/vendors/owl-carousel/owl.theme.default.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css'  href='https://demo.colorlib.com/tyche/wp-includes/css/dashicons.min.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='tyche-css'  href='https://demo.colorlib.com/tyche/wp-content/themes/tyche/style.css?ver=5.5.3' type='text/css' media='all' />
    <!!--  --><link rel='stylesheet' id='tyche-style-css'  href='css/s1.css' type='text/css' media='all' />
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/vendors/owl-carousel/owl.carousel.min.js?ver=1.3.3' id='owlCarousel-js'></script>
    <script type='text/javascript' id='tyche-scripts-js-extra'>
        /* <![CDATA[ */

        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/js/functions.js?ver=5.5.3' id='tyche-scripts-js'></script>
    <link rel="https://api.w.org/" href="https://demo.colorlib.com/tyche/wp-json/" /><link rel="alternate" type="application/json" href="https://demo.colorlib.com/tyche/wp-json/wp/v2/pages/2" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.colorlib.com/tyche/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.colorlib.com/tyche/wp-includes/wlwmanifest.xml" />
    <link rel='shortlink' href='https://demo.colorlib.com/tyche/' />
    <link rel="alternate" type="application/json+oembed" href="https://demo.colorlib.com/tyche/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.colorlib.com%2Ftyche%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo.colorlib.com/tyche/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.colorlib.com%2Ftyche%2F&#038;format=xml" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>

    <script
            type="text/javascript">var ajaxurl = 'https://demo.colorlib.com/tyche/wp-admin/admin-ajax.php';</script>

    <!-- There is no amphtml version available for this URL. --><style id="kirki-inline-styles"></style></head>

<body class="home page-template-default page page-id-2 wp-custom-logo theme-tyche woocommerce-no-js elementor-default elementor-kit-1236">

<div id="page" class="site">

    <!-- Top Header Bar -->
    <header class="top-header-bar-container">
        <div class="container">
            <div class="row" >
                <div class="col-md-12">
                    <ul class="top-header-bar">
                        <!-- Email -->
                        <li class="top-email">
                            <i class="fa fa-envelope-o"></i> beautyCenter@gmail.com					</li>
                        <!-- / Email -->
                        <!-- Cart -->
                        <li class="top-cart" style="color:#f08080">

                            <a href="css1\cart.php" ><i class="fa fa-shopping-cart"></i> My Cart- &#036; </a>
                        </li> <!-- / Cart -->
                    </ul>
                </div>
            </div>
        </div>
    </header><!-- /Top Header Bar -->
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding container">
            <div class="row">
                <div class="col-sm-4 header-logo">
                </div>

            </div>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="desktop-menu" class="sf-menu"><li ><a title="Home" href="home.php">Home</a></li>
                             </ul>
                        <button href="#" id="mobile-menu-trigger"> <i class="fa fa-bars"></i> </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main Slider -->
    <section class="main-slider">
        <div class="owl-carousel owl-theme" id="main-slider">
            <div class="item">
                <img width="1600" height="300" src="img/s1.jpg" sizes="(max-width: 1600px) 100vw, 1600px" /><div class="hero-caption left hidden-xs hidden-sm">
                    <div class="btn-group">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-bar hidden-xs" style="color:#f08080">
            <div class="container" style="color:#f08080">
                <ul class="main-slider-info"style="color:#f08080">
                    <li class="col-sm-4 col-xs-12" style="color:#f08080">
                        <div class="main-slider-info-cell" style="color:#f08080">
                            <div class="cell-icon">
                                <i class="dashicons dashicons-admin-site"></i>
                            </div>
                            <div class="cell-content" >
							<span class="cell-caption">
								Paiement when						</span> <span class="cell-subcaption">
								Recieving							</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-4 col-xs-12">
                        <div class="main-slider-info-cell" >
                            <div class="cell-icon">
                                <i class="dashicons dashicons-smartphone"></i>
                            </div>
                            <div class="cell-content">
							<span class="cell-caption">
								CALL US ANYTIME							</span> <span class="cell-subcaption">
								+9720569236758							</span>
                            </div>

                        </div>
                    </li>
                    <li class="col-sm-4 col-xs-12">
                        <div class="main-slider-info-cell">
                            <div class="cell-icon">
                                <i class="dashicons dashicons-location-alt"></i>
                            </div>
                            <div class="cell-content">
                                <span class="cell-caption">OUR LOCATION</span> <span class="cell-subcaption">
							Palestine-Nablus-Ma'Jeen Street						</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- / Main Slider -->

    <div class="site-content">

        <!-- Content Area #1 -->
        <section class="content-area-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="tyche_products-3" class="tyche-products primary widget widget_tyche_products"><h3 class="widget-title"><span>Lotion Cream</span></h3>
                            <div class="row tyche-product-slider-container">
                                <div class="tyche-product-slider-navigation hidden-xs">
                                    <a class="prev" href="#"><i class="fa fa-angle-left"></i> < </a>
                                    <a class="next" href="#"><i class="fa fa-angle-right"></i> > </a>
                                </div>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="owl-carousel tyche-product-slider" data-attr-elements="3">
                                        <div class="item">
                                            <div
                                                    class="tyche-product primary">
                                                <div class="tyche-product-image">

                                                    <span class="onsale">Sale!</span>

                                                    <img width="255" height="320" src="img/s88.jpg"  class="attachment-shop_catalog size-shop_catalog" alt="" />						</div>
                                                <div class="tyche-product-body">
                                                    <h3><a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Clear </a></h3>

                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span  class="woocommerce-Price-currencySymbol">&#36;</span>20.00</bdi></span></ins></span>
                                                    <form action="skin.php" method="post">
                                                        <input type="submit" value="Add to cart" rel="nofollow" name = "add120" id ="add120" href="?add-to-cart=17" data-quantity="1" data-product_id="17" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button primary"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div
                                                    class="tyche-product primary">
                                                <div class="tyche-product-image">

                                                    <span class="onsale">Sale!</span>

                                                    <img width="255" height="320" src="img/s112.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></div>
                                                <div class="tyche-product-body">
                                                    <h3><a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"> Number one </a></h3>
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span></ins></span>
                                                    <form action="skin.php" method="post">
                                                        <input type="submit" id="add25" name="add25" value="Add to cart" rel="nofollow" href="?add-to-cart=17" data-quantity="1" data-product_id="17" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button primary"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div
                                                    class="tyche-product primary">
                                                <div class="tyche-product-image">

                                                    <img width="255" height="320" src="img/s113.jpg"  class="attachment-shop_catalog size-shop_catalog" alt="" />						</div>
                                                <div class="tyche-product-body">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Milk Cream</a></h3>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>40.00</bdi></span></span>
                                                    <form action="skin.php" method="post">
                                                        <input type="submit" id="add40" name="add40" value="Add to cart" rel="nofollow" href="?add-to-cart=15" data-quantity="1" data-product_id="15" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button primary"><span class="fa fa-shopping-cart"></span></input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 hidden-xs">
                                    <div class="tyche-banner"
                                         style=".background-image:url(img/s4.jpg)">
                                        <div class="tyche-banner-caption">
                                            <span class="first_line"> Dry </span>
                                            <span class="second_line"> Skin  </span>
                                            <span class="third_line"> GoodBye </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div id="tyche_products-4" class="tyche-products secondary widget widget_tyche_products"><h3 class="widget-title"><span> Serum </span></h3>
                            <div class="row tyche-product-slider-container">
                                <div class="tyche-product-slider-navigation hidden-xs">
                                    <a class="prev" href="#"><i class="fa fa-angle-left"></i> < </a>
                                    <a class="next" href="#"><i class="fa fa-angle-right"></i> > </a>
                                </div>
                                <div class="col-sm-3 hidden-xs">
                                    <div class="tyche-banner"
                                         style="background-image:url(img/s4.jpg)">
                                        <div class="tyche-banner-caption">
                                            <span class="first_line">  </span>
                                            <span class="second_line"> Top </span>
                                            <span class="third_line"> brands </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="owl-carousel tyche-product-slider" data-attr-elements="3">
                                        <div class="item">
                                            <div class="tyche-product secondary">
                                                <div class="tyche-product-image">

                                                    <span class="onsale">Sale!</span>

                                                    <img width="255" height="320" src="img/ss.jpg"  class="attachment-shop_catalog size-shop_catalog" alt="" />						</div>
                                                <div class="tyche-product-body">
                                                    <h3><a class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Pantene3</a></h3>

                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span></ins></span>

                                                    <form action="skin.php" method="post">
                                                        <input type="submit" id="add35" value="Add to cart" name="add35" rel="nofollow" href="?add-to-cart=25" data-quantity="1" data-product_id="25" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button secondary"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tyche-product secondary">
                                                <div class="tyche-product-image">
                                                    <img width="255" height="320" src="img/ss1.jpg"  class="attachment-shop_catalog size-shop_catalog" alt="" />						</div>
                                                <div class="tyche-product-body">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Mielle</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</bdi></span></span>

                                                    <form action="skin.php" method="post">
                                                        <input type="submit" id="add37" value="Add to cart" name="add37" rel="nofollow" href="?add-to-cart=23" data-quantity="1" data-product_id="23" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button secondary"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tyche-product secondary">
                                                <div class="tyche-product-image">

                                                    <img width="255" height="320" src="img/ss3.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" />						</div>
                                                <div class="tyche-product-body">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Pantene1</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>30.00</bdi></span></span>

                                                    <form action="skin.php" method="post">

                                                        <input type="submit" value="Add to cart" name="n1" id="n1" rel="nofollow" href="?add-to-cart=21" data-quantity="1" data-product_id="21" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button secondary"><span class="fa fa-shopping-cart"></span></input>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>				</div>
                </div>
            </div>
        </section>	<!-- / Content Area #1 -->

        <!-- Content Area #2 -->
        <section class="content-area-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div id="tyche_products-5" class="tyche-products green widget widget_tyche_products"><h3 class="widget-title"><span>MOST WANTED</span></h3>
                            <div class="tyche-product-list-container">

                                <div class="tyche-product-list">
                                    <div class="tyche-product green">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">
                                                    <img width="160" height="120" src="img/s77.jpg"  class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Rose </a></h3>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></span>
                                                    <form action="skin.php" method="post">
                                                        <input name="rose" id="rose" value="Add to cart" type="submit" rel="nofollow" href="?add-to-cart=31" data-quantity="1" data-product_id="31" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button green"><span class="fa fa-shopping-cart"></span></input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product green">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/s8.jpg"  class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">no-nothing</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span></span>

                                                    <form action="skin.php" method="post">
                                                        <input name="noth" id="noth" type="submit" value="Add to cart" rel="nofollow" href="?add-to-cart=29" data-quantity="1" data-product_id="29" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button green"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product green">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/s99.jpg"  class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">no-nothing2</a></h3>
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>70.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>60.00</bdi></span></ins></span>
                                                    <form action="skin.php" method="post">
                                                        <input value="Add to cart" type="submit" name="noth2" id="noth2" rel="nofollow" href="?add-to-cart=27" data-quantity="1" data-product_id="27" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button green"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>					</div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div id="tyche_products-6" class="tyche-products blue widget widget_tyche_products"><h3 class="widget-title"><span>Lotion</span></h3>
                            <div class="tyche-product-list-container">

                                <div class="tyche-product-list">
                                    <div class="tyche-product blue">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/g1.jpg" class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />		</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Olive</a></h3>

                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>23.00</bdi></span></ins></span>

                                                    <form action="skin.php" method="post">
                                                        <input name="olive" type="submit" id="olive" value="Add to cart" rel="nofollow" href="?add-to-cart=37" data-quantity="1" data-product_id="37" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button blue"><span class="fa fa-shopping-cart"></span></a>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product blue">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/g2.jpg"  class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Travel Buddies</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>36.00</bdi></span></span>

                                                    <form action="skin.php" method="post">
                                                        <input value="Add to cart" type="submit" name="hala" id="hala" rel="nofollow" href="?add-to-cart=35" data-quantity="1" data-product_id="35" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button blue"><span class="fa fa-shopping-cart"></span> Add to cart</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product blue">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/g33.jpg"  class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Maritta</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>37.00</bdi></span></span>

                                                    <form action="skin.php" method="post">
                                                        <input type="submit" value="Add to cart" name="mar" id="mar" rel="nofollow" href="?add-to-cart=33" data-quantity="1" data-product_id="33" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button blue"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>					</div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div id="tyche_products-7" class="tyche-products black widget widget_tyche_products"><h3 class="widget-title"><span>ON SALE</span></h3>
                            <div class="tyche-product-list-container">

                                <div class="tyche-product-list">
                                    <div class="tyche-product black">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/s77.jpg" class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Marina Cream</a></h3>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></span>
                                                    <form action="skin.php" method="post">
                                                        <input name="marina" id="marina" value="Add to cart" type="submit" rel="nofollow" href="?add-to-cart=64" data-quantity="1" data-product_id="64" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button black"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product black">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/s8.jpg" class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">curl & shine</a></h3>

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span></span>

                                                    <form action="skin.php" method="post">
                                                        <input type="submit" value="Add to cart" name="and" id="and" rel="nofollow" href="?add-to-cart=62" data-quantity="1" data-product_id="62" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button black"><span class="fa fa-shopping-cart"></span> </input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tyche-product black">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="tyche-product-image">

                                                    <img width="160" height="120" src="img/s77.jpg" class="attachment-tyche-product-layout-c size-tyche-product-layout-c wp-post-image" alt="" srcset="img/s99.jpg 160w, https://demo.colorlib.com/tyche/wp-content/uploads/sites/64/2017/06/cute-955782_1920-300x225.jpg 300w, https://demo.colorlib.com/tyche/wp-content/uploads/sites/64/2017/06/cute-955782_1920-768x576.jpg 768w, https://demo.colorlib.com/tyche/wp-content/uploads/sites/64/2017/06/cute-955782_1920-1024x768.jpg 1024w, https://demo.colorlib.com/tyche/wp-content/uploads/sites/64/2017/06/cute-955782_1920.jpg 1920w" sizes="(max-width: 160px) 100vw, 160px" />						</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="tyche-product-body text-left">
                                                    <h3><a  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Candy </a></h3>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>60.00</bdi></span></span>
                                                  <form method="post" action="skin.php">
                                                    <span class="quantity">
                                                    <label class="screen-reader-text" for="quantity">Quantity</label>
                                                    <input name="quantity"
                                                            type="number"
                                                            id="quantity"
                                                            class="input-text qty text"
                                                            step="1"
                                                            min="0"
                                                            max=""
                                                            value="1"
                                                            title="Qty"
                                                            size="1"
                                                            placeholder=""
                                                            inputmode="numeric" /> </span>
                                                  </form>
                                                    <form action="skin.php" method="post">
                                                        <input name="candy" id="candy" value="Add to cart" type="submit" rel="nofollow" href="?add-to-cart=56" data-product_id="56" data-product_sku="" class="ajax_add_to_cart add_to_cart_button button black"><span class="fa fa-shopping-cart"></span></input>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- #content -->


    <!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://demo.colorlib.com/tyche/wp-admin/admin-ajax.php";
    </script>
    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })()
    </script>
    <style type="text/css">.saboxplugin-wrap{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;border:1px solid #eeeeee;width:100%;clear:both;display:block;overflow:hidden;word-wrap:break-word;position:relative}  .saboxplugin-wrap .saboxplugin-gravatar{float:left;padding:20px}  .saboxplugin-wrap .saboxplugin-gravatar img{max-width:100px;height:auto;border-radius:0;}  .saboxplugin-wrap .saboxplugin-authorname{font-size:18px;line-height:1;margin:20px 0 0 20px;display:block}  .saboxplugin-wrap .saboxplugin-authorname a{text-decoration:none}  .saboxplugin-wrap .saboxplugin-authorname a:focus{outline:0}  .saboxplugin-wrap .saboxplugin-desc{display:block;margin:5px 20px}  .saboxplugin-wrap .saboxplugin-desc a{text-decoration:underline}  .saboxplugin-wrap .saboxplugin-desc p{margin:5px 0 12px}  .saboxplugin-wrap .saboxplugin-web{margin:0 20px 15px;text-align:left}  .saboxplugin-wrap .sab-web-position{text-align:right}  .saboxplugin-wrap .saboxplugin-web a{color:#ccc;text-decoration:none}  .saboxplugin-wrap .saboxplugin-socials{position:relative;display:block;background:#fcfcfc;padding:5px;border-top:1px solid #eee}  .saboxplugin-wrap .saboxplugin-socials a svg{width:20px;height:20px}  .saboxplugin-wrap .saboxplugin-socials a svg .st2{fill:#fff; transform-origin:center center;}  .saboxplugin-wrap .saboxplugin-socials a svg .st1{fill:rgba(0,0,0,.3)}  .saboxplugin-wrap .saboxplugin-socials a:hover{opacity:.8;-webkit-transition:opacity .4s;-moz-transition:opacity .4s;-o-transition:opacity .4s;transition:opacity .4s;box-shadow:none!important;-webkit-box-shadow:none!important}  .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-color{box-shadow:none;padding:0;border:0;-webkit-transition:opacity .4s;-moz-transition:opacity .4s;-o-transition:opacity .4s;transition:opacity .4s;display:inline-block;color:#fff;font-size:0;text-decoration:inherit;margin:5px;-webkit-border-radius:0;-moz-border-radius:0;-ms-border-radius:0;-o-border-radius:0;border-radius:0;overflow:hidden}  .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey{text-decoration:inherit;box-shadow:none;position:relative;display:-moz-inline-stack;display:inline-block;vertical-align:middle;zoom:1;margin:10px 5px;color:#444;fill:#444}  .clearfix:after,.clearfix:before{content:' ';display:table;line-height:0;clear:both}  .ie7 .clearfix{zoom:1}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-twitch{border-color:#38245c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-addthis{border-color:#e91c00}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-behance{border-color:#003eb0}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-delicious{border-color:#06c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-deviantart{border-color:#036824}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-digg{border-color:#00327c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-dribbble{border-color:#ba1655}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color   .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-flickr{border-color:#003576}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-github{border-color:#264874}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-google{border-color:#0b51c5}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-googleplus{border-color:#96271a}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-html5{border-color:#902e13}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-instagram{border-color:#1630aa}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-linkedin{border-color:#00344f}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-pinterest{border-color:#5b040e}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-reddit{border-color:#992900}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-rss{border-color:#a43b0a}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-sharethis{border-color:#5d8420}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-skype{border-color:#00658a}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-soundcloud{border-color:#995200}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-spotify{border-color:#0f612c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stackoverflow{border-color:#a95009}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-steam{border-color:#006388}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-user_email{border-color:#b84e05}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stumbleUpon{border-color:#9b280e}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-tumblr{border-color:#10151b}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vimeo{border-color:#0d7091}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-windows{border-color:#003f71}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-whatsapp{border-color:#003f71}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-wordpress{border-color:#0f3647}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-yahoo{border-color:#14002d}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-youtube{border-color:#900}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-xing{border-color:#000202}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mixcloud{border-color:#2475a0}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vk{border-color:#243549}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-medium{border-color:#00452c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-quora{border-color:#420e00}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-meetup{border-color:#9b181c}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-goodreads{border-color:#000}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-snapchat{border-color:#999700}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-500px{border-color:#00557f}  .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mastodont{border-color:#185886}  .sabox-plus-item{margin-bottom:20px}@media screen and (max-width:480px){.saboxplugin-wrap{text-align:center}  .saboxplugin-wrap .saboxplugin-gravatar{float:none;padding:20px 0;text-align:center;margin:0 auto;display:block}  .saboxplugin-wrap .saboxplugin-gravatar img{float:none;display:inline-block;display:-moz-inline-stack;vertical-align:middle;zoom:1}  .saboxplugin-wrap .saboxplugin-desc{margin:0 10px 20px;text-align:center}  .saboxplugin-wrap .saboxplugin-authorname{text-align:center;margin:10px 0 20px}}  body .saboxplugin-authorname a,body .saboxplugin-authorname a:hover{box-shadow:none;-webkit-box-shadow:none}  a.sab-profile-edit{font-size:16px!important;line-height:1!important}  .sab-edit-settings a,a.sab-profile-edit{color:#0073aa!important;box-shadow:none!important;-webkit-box-shadow:none!important}  .sab-edit-settings{margin-right:15px;position:absolute;right:0;z-index:2;bottom:10px;line-height:20px}  .sab-edit-settings i{margin-left:5px}  .saboxplugin-socials{line-height:1!important}  .rtl .saboxplugin-wrap .saboxplugin-gravatar{float:right}  .rtl .saboxplugin-wrap .saboxplugin-authorname{display:flex;align-items:center}  .rtl .saboxplugin-wrap .saboxplugin-authorname .sab-profile-edit{margin-right:10px}  .rtl .sab-edit-settings{right:auto;left:0}  img.sab-custom-avatar{max-width:75px;}  .saboxplugin-wrap .saboxplugin-desc a, .saboxplugin-wrap .saboxplugin-desc  {color:0 !important;}  .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey {color:0; fill:0;}  .saboxplugin-wrap .saboxplugin-authorname a,.saboxplugin-wrap .saboxplugin-authorname span {color:0;}  .saboxplugin-wrap {margin-top:0px; margin-bottom:0px; padding: 0px 0px }  .saboxplugin-wrap .saboxplugin-authorname {font-size:18px; line-height:25px;}  .saboxplugin-wrap .saboxplugin-desc p, .saboxplugin-wrap .saboxplugin-desc {font-size:14px !important; line-height:21px !important;}  .saboxplugin-wrap .saboxplugin-web {font-size:14px;}  .saboxplugin-wrap .saboxplugin-socials a svg {width:18px;height:18px;}</style><script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {"apiSettings":{"root":"https:\/\/demo.colorlib.com\/tyche\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
        /* ]]> */
    </script>
    <script type='text/javascript'  id='contact-form-7-js'></script>
    <script type='text/javascript' id='wpzerospam-js-extra'>
        /* <![CDATA[ */
        var wpzerospam = {"key":"5e)V3PN9UquoxJAQ5VExL$psIdWxQYT3dlemrLcUjLZqSFi@Zass$9b^XNhQ@5JJ"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/zero-spam/assets/js/wpzerospam.js?ver=4.10.2' id='wpzerospam-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/zero-spam/integrations/contact-form-7/js/cf7.js?ver=4.10.2' id='wpzerospam-integration-cf7-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.colorlib.com\/tyche\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.6.1' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.6.1' id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_c7ba160b83b4cf4fe4c311fa6b89b05c","fragment_name":"wc_fragments_c7ba160b83b4cf4fe4c311fa6b89b05c","request_timeout":"5000"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.6.1' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/js/skip-link-focus-fix.js?ver=5.5.3' id='tyche-skip-link-focus-fix-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-content/themes/tyche/assets/vendors/menu/menu.min.js?ver=5.5.3' id='tyche-multilang-menu-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/tyche/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
    <script>window.GA_ID='';</script><script src='https://demo.colorlib.com/tyche/wp-content/plugins/flying-analytics/js/minimal-analytics.js' defer></script>
</body>

</html>

