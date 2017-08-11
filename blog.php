<?php

require ('lib/db_config.php');
require ('lib/controler.php');
require ('lib/view.php');

date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y H:i');//get current date time 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blog - UFX Studio</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li class="active"><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="topSocial pull-right">
                    <ul>
                        <li><a class="facebook" href="https://www.facebook.com/universalfxstudio/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </header>
            <!-- Breadcrumb Section -->
            <section class="breadCrumArea">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Our <span>Blog</span></h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <li><a href="index.php">home</a><span>|</span></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Sidebar Section -->
            <section class="blogGridArea commonSection">
                <div class="container">
                    <div class="row">
                    <?php
                        ShowAllSingleBlog();
                    ?>
                       <!-- <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb1.jpg" alt="">
                                    <div class="postDate">
                                        <h1>18</h1>
                                        <p>October</p>
                                        <a href="#">7comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Sed diam nonumy</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Samantha Lane</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>7</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb2.jpg" alt="">
                                    <div class="postDate">
                                        <h1>11</h1>
                                        <p>October</p>
                                        <a href="#">12comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Eirmod tempor invidunt</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Jay Armstrong</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>5</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb3.jpg" alt="">
                                    <div class="postDate">
                                        <h1>09</h1>
                                        <p>October</p>
                                        <a href="#">17comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Eirmod tempor invidunt</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Jay Armstrong</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>5</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb4.jpg" alt="">
                                    <div class="postDate">
                                        <h1>02</h1>
                                        <p>October</p>
                                        <a href="#">18comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Sed diam nonumy</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Samantha Lane</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>7</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb5.jpg" alt="">
                                    <div class="postDate">
                                        <h1>27</h1>
                                        <p>September</p>
                                        <a href="#">21comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Sed diam nonumy</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Samantha Lane</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>7</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="blogCotent">
                                <div class="postThumb">
                                    <img src="images/blogGrid/thumb6.jpg" alt="">
                                    <div class="postDate">
                                        <h1>15</h1>
                                        <p>September</p>
                                        <a href="#">19comments</a>
                                    </div>
                                </div>
                                <div class="postContent two">
                                    <h3><a href="blogSingle.html">Eirmod tempor invidunt</a></h3>
                                    <p>
                                        Consetetur sadipscing elited diam nonumy eirmod tempor invidunt 
                                        utabore et dolore magna aliquyam erat, sed diam voluptua vero 
                                        eos et accusam et justo duo dolores et ea rebum.
                                    </p>
                                    <div class="postMeta">
                                        <div class="metaLeft pull-left">
                                            <i class="icon-user3"></i>
                                            <span>by</span>
                                            <a href="member.html">Jay Armstrong</a>
                                        </div>
                                        <div class="metaRight pull-right">
                                            <p><i class="icon-heart4"></i><span>5</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <a class="defaultButton" href="singleFolio.html">load more</a>
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
