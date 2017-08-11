<?php
require ('lib/controler.php');
require ('lib/view.php');
require ('lib/db_config.php');

if(isset($_GET['statusNewslette']))
{
    echo "<script>alert('Request Submited');</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UFX Studio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
        <link rel="stylesheet" type="text/css" href="css/rticons.css"/>
        <link rel="stylesheet" type="text/css" href="css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/js-image-slider.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link id="layout" rel="stylesheet" type="text/css" href="css/colorpreset/wide.css"/>
        <link id="colorChem" rel="stylesheet" type="text/css" href="css/colorpreset/light.css"/>
        <link id="colorsSet" rel="stylesheet" type="text/css" href="css/colorpreset/color1.css"/>

        <!--link rel="stylesheet" href="360/css/reset.css" media="screen" type="text/css" /-->
        <link rel="stylesheet" href="360/css/threesixty.css" media="screen" type="text/css" />

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!-- Favicon Icon -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
<style>
.fake_space {
    padding-bottom: 300px;
}
div#load_screen{
    background: #222222;
    opacity: 1;
    position: fixed;
    z-index:100000;
    top: 0px;
    width: 100%;
    height: 100%;
}

div#load_screen > div#loading{
    color:#222222;
    width:200px;
    height:150px;
    margin: 0 auto;
    position: relative;
    top:40%;
    vertical-align: middle;
    background-image:url('loading.gif');
    background-repeat:no-repeat;
}
</style>

    </head>
    <body>
    <div id="load_screen"><div id="loading">&nbsp;</div></div>
        
        <!--================= Box Div Start ==================-->
        <div class="boxWrapper">
            <!--================= Box Div Start ==================-->
            <!-- Header Area -->
            <header class="headerArea">
                <div class="logo pull-left">
                    <div class="logoImg">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <h2><a href="index.php">UFX<span> Studio</span></a></h2>
                </div>
                <nav class="mainMenu pull-left">
                    <div class="menuButton hidden-lg hidden-md">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>    
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="topSocial pull-right">
                    <ul>
                        <li><a class="facebook" title="Facebook" href="https://www.facebook.com/universalfxstudio/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" title="Google Plus" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                        <li><a class="admin" title="Webmail By Zoho" href="https://www.zoho.com/mail/login.html" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </header>
            <!-- Slider Section -->
            <section class="sliderArea" data-currentslide="activRev_1">
                <div class="tp-banner1">
                    <ul>
                        <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" >
                            <img src="images/home1/slider1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <div class="tp-caption lightgrey_divider lft fadeout"
                                 data-x="left"
                                 data-y="235"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <p class="redCaption">Media, advertisement and marketing</p>
                            </div>
                            <div class="tp-caption lightgrey_divider lfr fadeout"
                                 data-x="left"
                                 data-y="266"
                                 data-speed="1400" 
                                 data-start="1300" 
                                 data-easing="Power4.easeOut"> 
                                <h1 class="headCaption"><font style="font-family:AvantGardeMdITCTT;  color:#fff; font-width:bold;">Bringing brand</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font style="font-width:thin;">to life</font></span></h1>
                            </div>
                            <div class="tp-caption lightgrey_divider lfl fadeout"
                                 data-x="left"
                                 data-y="395"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeInOutElastic"><br><br><br>
                                <p class="capItalic">
                                    Our team is proud to deliver original <br>&amp; fresh marketing solution
                                </p><br>
                            </div>
                            <div class="tp-caption lightgrey_divider lfb fadeout"
                                 data-x="left"
                                 data-y="460"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <br><br><a href="corporate.php" class="sliderBtn"><i class="icon-bulb"></i><span>Learn More</span></a>
                            </div>
                            <div class="tp-caption lightgrey_divider lft resFix fadeout"
                                 data-x="right"
                                 data-y="75"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeOutBack">
                                <div class="sliderImg">
                                    <img src="images/home1/sldCap1.png" alt="ThemeWar">
                                </div>
                            </div>
                        </li>
                        <li  data-transition="curtain-3" data-slotamount="7" data-masterspeed="1000" >
                            <img src="images/home1/slider2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <div class="tp-caption lightgrey_divider lft fadeout"
                                 data-x="left"
                                 data-y="235"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <p class="redCaption">Media, advertisement and marketing</p>
                            </div>
                            <div class="tp-caption lightgrey_divider lfr fadeout"
                                 data-x="left"
                                 data-y="266"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <h1 class="headCaption"><font style="font-family:AvantGardeMdITCTT; font-width:bold; color:#fff;">Website Design</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font style="font-width:thin;">SEO &amp; SMO</font></span></h1>
                            </div>
                            <div class="tp-caption lightgrey_divider lfl fadeout"
                                 data-x="left"
                                 data-y="395"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeInOutElastic"><br><br><br><br><br>
                                <p class="capItalic">
                                We simply create better website for professional business Get
                                <br>Online, Get Found, We get it done.</p>
                            </div>
                            <div class="tp-caption lightgrey_divider lfb fadeout"
                                 data-x="left"
                                 data-y="460"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <br><br><a href="web.php" class="sliderBtn"><i class="icon-bulb"></i><span>Learn More</span></a>
                            </div>
                            <div class="tp-caption lightgrey_divider lft resFix fadeout"
                                 data-x="right"
                                 data-y="75"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeOutBack">
                                <div class="sliderImg two">
                                    <img src="images/home1/sldCap2.png" alt="ThemeWar">
                                </div>
                            </div>
                        </li>
                        <li  data-transition="slotslide-horizontal" data-slotamount="7" data-masterspeed="1000" >
                            <img src="images/home1/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <div class="tp-caption lightgrey_divider lft fadeout"
                                 data-x="left"
                                 data-y="235"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <p class="redCaption">media, advertisement and marketing</p>
                            </div>
                            <div class="tp-caption lightgrey_divider lfr fadeout"
                                 data-x="left"
                                 data-y="266"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <h1 class="headCaption"><font style="font-family:AvantGardeMdITCTT; font-width:bold; color:#fff;">3D Architectural</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font style="font-width:thin;">Visulization</font></span></h1>
                            </div>
                            <div class="tp-caption lightgrey_divider lfl fadeout"
                                 data-x="left"
                                 data-y="395"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeInOutElastic"><br><br><br><br><br>
                                <p class="capItalic">
                                    You imagine we will provide you with our virtual output.

                                </p>
                            </div>
                            <div class="tp-caption lightgrey_divider lfb fadeout"
                                 data-x="left"
                                 data-y="460"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="Power4.easeOut">
                                <br><br><a href="visualization.php" class="sliderBtn"><i class="icon-bulb"></i><span>Learn More</span></a>
                            </div>
                            <div class="tp-caption lightgrey_divider lft resFix fadeout"
                                 data-x="right"
                                 data-y="75"
                                 data-speed="1400"
                                 data-start="1300"
                                 data-easing="easeOutBack">
                                <div class="sliderImg three">
                                    <img src="images/home1/sldCap3.png" alt="ThemeWar">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Feature Section -->
            <section class="featureArea commonSection firstHome">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="featureImg">
                                <img src="images/home1/feature1.png" alt="">
                            </div>
                            <div class="featureContent">
                                <h3><a href="javascript:void(0);">Marketing<span><br> & Advertisement</span></a></h3>
                                <p>Media entertainment and marketing </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="featureImg">
                                <img src="images/home1/feature2.png" alt="">
                            </div>
                            <div class="featureContent">
                                <h3><a href="javascript:void(0);">Quality<span><br> & Creativity</span></a></h3>
                                <p>Quality and creativity is all we provide.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="featureImg">
                                <img src="images/home1/feature4.png" alt="">
                            </div>
                            <div class="featureContent">
                                <h3><a href="javascript:void(0);">Pre - Post <br><span>& VFX</span></a></h3>
                                <p>Preproduction to post-production & vfx
      Sound, Stage, one location 3d & 2D all in 1 place 
</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <div class="featureImg">
                                <img src="images/home1/feature3.png" alt="">
                            </div>
                            <div class="featureContent">
                                <h3><a href="javascript:void(0);">Website <br><span>Building</span></a></h3>
                                <p>The company provides end to end solution in the field of website designing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Section -->
                <div class="caroselArea wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="imageCaros center">
                        <?php
                            showImageSlider();
                        ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Testimonial Section -->
                <div class="testimonialFirstHome">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
                                <div class="singleTesti wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h2>UNIVERSAL<img class="testiImg" src="images/logoBig.png">FX<span>&nbsp;STUDIO</span></h2>
                                </div>
                                <div class="quote wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                    <p class="quotation">The only moto we have is to provide best quality services and so we take your brand as our brand.</p>
                                    <div class="clientTestiImg">
                                        <img src="images/home/testi1.jpg" alt="">
                                    </div>
                                    <p class="name">-  <span>UFX</span> Studio  -</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Old 3D Holographics -
            <section class="serviceArea commonSection">
                <div class="container">
                    <div class="row">
					<h2 align="center" class="singleTesti2">3D HOLOGRAPHIC <span>DEVICES</span> </h2>
					<div id="threesixty">
        <div id="spinner">
            <span>0%</span>
        </div>
        <ol id="threesixty_images"></ol>
    </div>
<div class="fake_space"><br><br><br><br><br><br><br></div>
<div class="row text-center threesixo">
    <div class="col-sm-2 col-sm-offset-1 text-center">
    <div class="glassicon text-center">
        <i class="fa fa-dot-circle-o"></i>
     </div>
        <h4>360<sup>o</sup>, 270<sup>o</sup>, 180<sup>o</sup> <br> Views are available.</h4>
    </div>
    <div class="col-sm-2 text-center">
    <div class="glassicon text-center">
        <i class="fa fa-desktop"></i>
    </div>
        <h4>Full HD <br>720p & 1080p.</h4>
    </div>
    <div class="col-sm-2 text-center">
    <div class="glassicon text-center">
        <i class="fa fa-volume-up"></i>
        </div>
        <h4>Build in <br>Speakers.</h4>
    </div>
    <div class="col-sm-2 text-center">
    <div class="glassicon text-center">
        <i class="fa fa-tablet"></i> 
        </div>
        <h4>Normal and <br>Interactive.</h4>
    </div>
    <div class="col-sm-2 text-center">
        <div class="glassicon text-center"><i class="fa fa-phone"></i></div>
        <h4>Installation &amp; <br>support.</h4>
    </div>
</div>

                        <!--div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="singleService first">
                                <div class="serviceContent pull-left text-right">
                                    <h4><a href="#"> 360<sup>o</sup> <span>  Views are available</span></a></h4>
                                    <p></p>
                                </div>
                                <div class="serviceIcon pull-right">
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                            </div>
                            <div class="singleService">
                                <div class="serviceContent pull-left text-right">
                                    <h4><a href="#">Full  HD<br><span>720p | 1080p </span></a></h4>
                                    <p></p>
                                </div>
                                <div class="serviceIcon pull-right">
                                    <i class="fa fa-desktop"></i>
                                </div>
                            </div>
                            <div class="singleService">
                                <div class="serviceContent pull-left text-right">
                                    <h4><a href="#">Build in  <br><span>speakers</span></a></h4>
                                    <p></p>
                                </div>
                                <div class="serviceIcon pull-right">
                                    <i class="fa fa-volume-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
						<h2 align="center" style="color:#fff; z-index:999;">3D HOLOGRAPHIC DEVICES </h2></br></br>
                            <div class="serviceImg">
                                <img src="images/home1/mobile.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="singleService first">
                                <div class="serviceIcon pull-left">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="serviceContent pull-right text-left">
                                    <h4><a href="#">Normal  <br><span>and Interactive</span></a></h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="singleService right">
                                <div class="serviceIcon pull-left">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <div class="serviceContent pull-right text-left">
                                    <h4><a href="#">3D Modeling <br><span>and creative</span></a></h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="singleService">
                                <div class="serviceIcon pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="serviceContent pull-right text-left">
                                    <h4><a href="#">Installation  <br> <span>and support</span></a></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div--
                    </div>
                </div>
            </section>-->
            <!-- Portfolio Section -->
            <section class="tabsGroupArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="tabsContent">
                                <!-- Nav tabs -->
                                <ul class="tabNavs text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" role="tablist">
                                    <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab"><span><i class="icon-bulb"></i></span>About</a></li>
                                    <li role="presentation"><a href="#testimonials" aria-controls="testimonials" role="tab" data-toggle="tab"><span><i class="icon-bubble"></i></span>Testimonials</a></li>
                                    <li role="presentation"><a href="#member" aria-controls="member" role="tab" data-toggle="tab"><span><i class="icon-diamond2"></i></span>Members</a></li>
                                    <li role="presentation"><a href="#newsletter" aria-controls="newsletter" role="tab" data-toggle="tab"><span><i class="icon-pen2"></i></span>Newsletters</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                    <div role="tabpanel" class="tab-pane active firstTab" id="about">
                                        <div class="row">
                                            <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                                                <div class="singleTabContent text-right">
                                                    <h2>PRODUCTION</h2>
                                                    <p>ideology, script, storyboarding, pre -  post production we are here for all your needs</p>
                                                </div>
                                                <div class="singleTabContent text-right">
                                                    <h2>GRAPHICS & ANIMATION</h2>
                                                    <p>Stet clita kasd gubergren, no sea takimata sanctus ipsum</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-12 posRele">
                                                <div class="aboutTabImg">
                                                    <img src="images/home/tabImg.png" alt="" />
                                                </div>
                                                <a href="#" class="allFeatureBtn text-center">
                                                    All Features
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-xs-12">
                                                <div class="singleTabContent text-left">
                                                    <h2>Website building</h2>
                                                    <p>Ease of use Feature set and flexibility
                                                        Designs Customer support Price
                                                    </p>
                                                </div>
                                                <div class="singleTabContent text-left">
                                                    <h2>Social Media Promotion</h2>
                                                    <p>Social media is no longer about the stuff that you make but about the story that you tell.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane secondTab" id="testimonials">
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
                                                <div id="testiCarousel" class="carousel slide" data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#testiCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#testiCarousel" data-slide-to="1"></li>
                                                        <li data-target="#testiCarousel" data-slide-to="2"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <?php testimonial(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane thirdTab" id="member">
                                        <div class="row">
                                          <?php viewTeam(); ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane forthTab" id="newsletter">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                                                <div class="subsForm">
                                                    <h4>Sign up to <span>our newsletter</span></h4>
                                                    <form action="news.php" method="get">
                                                        <input type="email" name="email" id="subs_email"> 
                                                        <input type="hidden" name="getvalue" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">  
                                                        <button name='Submit' type="submit"><i class="icon-pen2"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- CLIENTS -->
        <section class="module module-parallax bg-light-60" data-background="images/section-3.jpg">

            <div class="container">

                <div class="row">
<br><br><br>
                <h3 class="text-center" style="font-size: 24px; text-transform:uppercase;">Our Valuable Clients</h3>
<br><br><br>
                    <!-- Owl-carousel start -->
                    <div class="slider-clients owl-carousel text-center">

                       <?php viewClientlist(); ?>

                    </div>
                    <!-- Owl-carousel end -->

                </div>

            </div>

        </section>
        <!-- /CLIENTS -->





            <!-- Blog Section >
            <section class="blogArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h2 class="commonTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">recent<span>posts</span></h2>
                            <p class="subTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">Sed diam nonumy eirmod tempor invidunt</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center">
                            <div class="blogCotent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <div class="postThumb first">
                                    <img src="images/home1/blog1.jpg" alt="">
                                    <div class="postDate">
                                        <h1>18</h1>
                                        <p>October</p>
                                        <a href="#">7 comments</a>
                                    </div>
                                </div>
                                <div class="postContent">
                                    <h3><a href="blogSingle.html">Consetetur sadipscing elitr</a></h3>
                                    <p>
                                        Stet clita kasd gubergren no takimoata sanctus est lorem 
                                        ipsum dolor sit amet lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center">
                            <div class="blogCotent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <div class="postThumb right">
                                    <img src="images/home1/blog2.jpg" alt="">
                                    <div class="postDate">
                                        <h1>09</h1>
                                        <p>October</p>
                                        <a href="#">5 comments</a>
                                    </div>
                                </div>
                                <div class="postContent">
                                    <h3><a href="blogSingle.html">Sed diam nonumy</a></h3>
                                    <p>
                                        Consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                        invidunt ut labore et dolore magna aliquyam erat, 
                                        sed diam voluptua.
                                    </p>
                                </div>
                            </div>
                            <div class="blogCotent last wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <div class="postThumb right">
                                    <img src="images/home1/blog3.jpg" alt="">
                                    <div class="postDate">
                                        <h1>02</h1>
                                        <p>October</p>
                                        <a href="#">12 comments</a>
                                    </div>
                                </div>
                                <div class="postContent">
                                    <h3><a href="blogSingle.html">Eirmod tempor invidunt</a></h3>
                                    <p>
                                        At vero eos et accusam et justo duo dolores et ea rebum. 
                                        cl gubergren no sea takimata sanctus est
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section-->
            <!-- Subscribe Section -->
            <section class="subscribeArea">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <div class="subsForm">
                                <h4 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Sign up to <span>our newsletter</span></h4>
                               <form action="news.php" method="get">
                                    <input type="email" name="email" id="subs_email"> 
                                    <input type="hidden" name="getvalue" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"> 
                                    <button name='Submit' type="submit"><i class="icon-pen2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Section -->
            <footer class="footerArea">
                <section class="footerTop commonSection">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                                <div class="footerContent">
                                    <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"> +91 7685054368</h2>
                                    <a class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms" href="mailto:info@ufxstudio.com">info@ufxstudio.com</a>
                                    <!--p class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">Kolkata, India</p-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="copyRight">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <p>Copyright &copy; 2016 | UFX Studio</p>
                                <p style="display:none"><img src="http://hitwebcounter.com/counter/counter.php?page=6564658&style=0001&nbdigits=7&type=ip&initCount=300" border="0" height="50px" width="200px"></p>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
            <!--================= Box Div End ==================-->
        </div>
        <!--================= Box Div End ==================-->
        <!--================= Back To Top ==================-->
        <a href="#" id="backto"><img src="images/backto.png" alt=""></a>
        <!-- Include All JS -->
        <script src="360/js/heartcode-canvasloader-min.js"></script>
        <script src="360/js/jquery-1.7.min.js"></script>
        <script src="360/js/threesixty.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/mixer.js"></script>
        <script type="text/javascript" src="js/appear.js"></script>
        <script type="text/javascript" src="js/circle-progress.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/directionHover.js"></script>
        <script type="text/javascript" src="js/js-image-slider.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script>
window.addEventListener("load", function(){
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);
});
</script>

<script type="text/javascript">
    
    $('#myCarousel-2').carousel({
  interval: 5000
})

$('.carousel-2 .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
<script type="text/javascript">
    /* ---------------------------------------------- /*
         * Parallax
        /* ---------------------------------------------- */

        if (mobileTest === true) {
            $('.module-parallax').css({'background-attachment': 'scroll'});
        } else {
            $('#hero.module-parallax').parallax('50%', 0.2);
        }
</script>

<script type="text/javascript">
    
    /* ---------------------------------------------- /*
         * Owl sliders
        /* ---------------------------------------------- */

        $('.slider-testimonials').owlCarousel({
            stopOnHover:     !0,
            singleItem:      !0,
            autoHeight:      !0,
            slideSpeed:      400,
            paginationSpeed: 1000,
            goToFirstSpeed:  2000,
            autoPlay:        3000,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });

        $('.slider-clients').owlCarousel({
            stopOnHover:     !0,
            singleItem:      !1,
            autoHeight:      !0,
            navigation:      !0,
            pagination:      !1,
            slideSpeed:      400,
            paginationSpeed: 1000,
            goToFirstSpeed:  2000,
            autoPlay:        3000,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });

        $('.slider-content-box').owlCarousel({
            stopOnHover:     !0,
            singleItem:      !1,
            autoHeight:      !0,
            navigation:      !1,
            pagination:      !1,
            slideSpeed:      400,
            items:           3,
            paginationSpeed: 1000,
            goToFirstSpeed:  2000,
            autoPlay:        3000,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });

        $('.slider-images').owlCarousel({
            stopOnHover:     !0,
            singleItem:      !0,
            autoHeight:      !0,
            navigation:      !0,
            slideSpeed:      400,
            paginationSpeed: 1000,
            goToFirstSpeed:  2000,
            autoPlay:        3000,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });
</script>

    </body>
</html>
