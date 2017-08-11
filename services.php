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
        <title>Our All Services - UFX Studio</title>
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
                        <li class="active"><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="topSocial pull-right">
                    <ul>
                        <li><a class="facebook" href="https://www.facebook.com/universalfxstudio/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                        <li><a class="admin" href="https://www.zoho.com/mail/login.html" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </header>
            <!-- Breadcrumb Section -->
            <section class="breadCrumArea">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Services</h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                <li><a href="index.php">Home</a><span>|</span></li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Sidebar Section -->
            <section class="blogSidebarArea commonSection">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-lg-3 col-sm-4 col-xs-12">
                            <div class="sidebar">
                                <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <form action="#" class="widgetForm">
                                        <input type="text" name="search" placeholder="Search...">
                                        <button type="submit"><i class="icon-search3"></i></button>
                                        <div class="clearfix"></div>
                                    </form>
                                </aside>
                                <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h4 class="widgetTitle">Categories</h4>
                                    <ul>
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">Media</a></li>
                                        <li><a href="#">Print</a></li>
                                    </ul>
                                </aside>
                                <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h4 class="widgetTitle">Most popular</h4>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget1.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="blogSingle.html">november 3, 2014</a>
                                            <p><a href="blogSingle.html">Stet clita kasd gubergren no takimata sanctus.</a></p>
                                        </div>
                                    </div>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget2.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="blogSingle.html">october 29, 2014</a>
                                            <p><a href="blogSingle.html">Lorem ipsum dolor amet consetetur.</a></p>
                                        </div>
                                    </div>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget3.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="blogSingle.html">october 13, 2014</a>
                                            <p><a href="blogSingle.html">Sadipscing elitr, sed diam nonumy eirmod.</a></p>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <div class="calendarWidget">
                                        <table>
                                            <caption>November '14</caption>
                                            <tbody><tr>
                                                    <th>M</th>
                                                    <th>t</th>
                                                    <th>w</th>
                                                    <th>t</th>
                                                    <th>f</th>
                                                    <th>s</th>
                                                    <th>s</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                    <td>7</td>
                                                    <td>8</td>
                                                    <td>9</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>12</td>
                                                    <td>13</td>
                                                    <td class="active">14</td>
                                                    <td>15</td>
                                                    <td>16</td>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>19</td>
                                                    <td>20</td>
                                                    <td>21</td>
                                                    <td>22</td>
                                                    <td>23</td>
                                                    <td>24</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>26</td>
                                                    <td>27</td>
                                                    <td>28</td>
                                                    <td>29</td>
                                                    <td>30</td>
                                                    <td>31</td>
                                                </tr>
                                            </tbody></table>
                                        <div class="calendarButton">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>-->
                        <div class="col-lg-12 col-sm-6 col-md-8 col-xs-12 col-lg-offset-1">
                            <?php
                                // Dynami Services Goes Here
                                showAllServices();
                            ?>


                            <div class="clearfix"></div>
                            <!--div class="loadMoreArea wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <a href="#" class="defaultButton">Load More</a>
                            </div-->
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
