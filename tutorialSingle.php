<!DOCTYPE html>
<html>
    <head>
        <title>TopBiz - Responsive Corporate HTML5 Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
        <link rel="stylesheet" type="text/css" href="css/rticons.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/js-image-slider.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link id="layout" rel="stylesheet" type="text/css" href="css/colorpreset/wide.css"/>
        <link id="colorChem" rel="stylesheet" type="text/css" href="css/colorpreset/light.css"/>
        <link id="colorsSet" rel="stylesheet" type="text/css" href="css/colorpreset/color1.css"/>

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!-- Favicon Icon -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <style>
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
        <!-- Start Loader >
        <div class="loaderWrap">
            <div id='loader'>
                <div class='diamond'></div>
                <div class='diamond'></div>
                <div class='diamond'></div>
            </div>
        </div>
        <!-- End Loader -->
        
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
                        <li class="hasChild"><a href="index.html">Home</a>
                            <ul class="dropMenu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                                <li><a href="index3.html">Home Three</a></li>
                                <li><a href="index4.html">Home Four</a></li>
                                <li><a href="dark.html">Dark Version</a></li>
                                <li><a href="box.html">Box Version</a></li>
                            </ul>
                        </li>
                        <li class="active hasChild"><a href="folio1.html">Gallery</a>
                            <ul class="dropMenu">
                                <li><a href="folio1.html">Folio 1</a></li>
                                <li><a href="folio2.html">Folio 2</a></li>
                                <li><a href="folio3.html">Folio 3</a></li>
                                <li><a href="folioSingle.html">Folio Single</a></li>
                            </ul>
                        </li>
                        <li class="hasChild"><a href="blogGrid.html">Blog</a>
                            <ul class="dropMenu">
                                <li><a href="blogGrid.html">Blog Grid</a></li>
                                <li><a href="blogSidebar.html">Blog Sidebar</a></li>
                                <li><a href="blogSingle.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="hasChild"><a href="#">Pages</a>
                            <ul class="dropMenu">
                                <li><a href="member.html">member</a></li>
                                <li><a href="404.html">404</a></li>
                                <li class="hasChild"><a href="event.html">event</a>
                                    <ul class="dropSub">
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="eventSingle.html">Event Single</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="topSocial pull-right">
                    <ul>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </header>
            <!-- Breadcrumb Section -->
            <section class="breadCrumArea">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Portfolio <span>item</span></h1>
                            <ul>
                        <li><a class="facebook" href="https://www.facebook.com/universalfxstudio/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                        <li><a class="admin" href="https://www.zoho.com/mail/login.html" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio Item Section -->
            <section class="folioItemArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <div class="folioItem">
                                <div class="folioItemImg wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <div id="sliderFrame">
                                        <div id="slider">
                                            <img src="images/folioSingle/thumb.jpg" alt="">
                                            <img src="images/folioSingle/thumb2.jpg" alt="">
                                            <img src="images/folioSingle/thumb3.jpg" alt="">
                                            <img src="images/folioSingle/thumb4.jpg" alt="">
                                            <img src="images/folioSingle/thumb5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="folioItemContent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h2>Item Title</h2>
                                    <p class="potCategory"><a href="#">webdesign</a><span>,</span><a href="#">media</a></p>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
                                        quae ab illo inventore veritatis et quasi architecto beatae vitae 
                                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
                                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro 
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt 
                                        ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim 
                                        ad minima veniam, quis nostrum exercitationem ullam corporis 
                                        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                                    </p>
                                    <div class="folioSocial text-center">
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid folioItemPage">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="folioImg">
                                <img src="images/folio3/1.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio1h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="folioImg">
                                <img src="images/folio3/2.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio6h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="folioImg">
                                <img src="images/folio3/3.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio9h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <div class="folioImg">
                                <img src="images/folio3/4.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio10h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="folioImg">
                                <img src="images/folio3/5.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio3h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="folioImg">
                                <img src="images/folio3/6.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio7h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="folioImg">
                                <img src="images/folio3/7.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio11h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 noPadding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <div class="folioImg">
                                <img src="images/folio3/8.jpg" alt="">
                                <div class="folioHover2 dirHov">
                                    <a href="images/home1/folio5h.jpg" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                    <a href="#" class="detailsLink"><i class="icon-location"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Subscribe Section -->
            <section class="subscribeArea">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <div class="subsForm">
                                <h4 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Sign up to <span>our newsletter</span></h4>
                                <form action="#" id="subscribeForm" method="post" class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                    <input type="email" name="sub_email" id="subs_email">
                                    <button type="submit"><i class="icon-pen2"></i></button>
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/mixer.js"></script>
        <script type="text/javascript" src="js/appear.js"></script>
        <script type="text/javascript" src="js/circle-progress.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/directionHover.js"></script>
        <script type="text/javascript" src="js/js-image-slider.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>

        <script>
window.addEventListener("load", function(){
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);
});
</script>
    </body>
</html>
