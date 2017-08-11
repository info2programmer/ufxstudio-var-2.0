<?php
require ('lib/db_config.php');
require ('lib/controler.php');
require ('lib/view.php');
$string=$_GET['Blog'];

if(strlen($string)>0)
{
    $GlobalVariabe=ShowAllDynamicBlog($_GET['Blog']);
}
else
{
    header('Location:Blog.php');
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $GlobalVariabe['BlogName']; ?> | Blog - UFX Studio</title>
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
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><?php echo $GlobalVariabe['BlogName']; ?></h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                <li><a href="#">home</a><span>|</span></li>
                                <li><a href="#">blog</a><span>|</span></li>
                                <li><?php echo $GlobalVariabe['BlogName']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Post Page Section -->
            <section class="blogSidebarArea commonSection postPage">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8 col-xs-12">
                            <div class="blogSidbarPost">
                                <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><a href="javascript:void(0);"><?php echo $GlobalVariabe['BlogName']; ?></a></h2>
                                <p class="blogAuthor wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">Blog Posted by <a href="javascript:void(0);">Admin</a></p>
                                <ul class="blogCategory wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                                    <li><i class="icon-calendar3"></i><a href="javascript:void(0);"><?php   echo $GlobalVariabe['BlogDate']; ?></a></li>
                                    <li class="categorys"><i class="icon-pen2"></i><span>Posted in</span> <a href="javascript:void(0);"><?php   echo $GlobalVariabe['BlogIn']; ?></a> </li>
                                    
                                </ul>
                                <!--div class="blogPostThumb wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                                    <img alt="" src="images/blogSingle/thumb1.jpg">
                                </div-->
                                <div class="blogPostContent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <?php echo $GlobalVariabe['Discription'];  ?>


                                    <br/><br/>
                                    <a class="btn btn-info" target="_blank" href="http://www.ufxstudio.com">Goto Website</a>
                                    
                                </div>
                            </div>

                            <!--div class="quote">
                                <p class="quotation">
                                    Lorem ipsum dolor siamet consetetur sadipscing elised diam nonumy 
                                    eirmod tempor inviduntut labore et dolore magna aliquyam erat.
                                </p>
                                <p class="name">-  <span>Jason</span> Willis  -</p>
                            </div-->
                            
                            
                            <!--div class="commentsSection wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <h1>Comments</h1>
                                <ol>
                                    <li>
                                        <div class="commentWrap">
                                            <div class="commenterImg">
                                                <img src="images/blogSingle/comment1.jpg" alt="">
                                            </div>
                                            <div class="fullComment">
                                                <div class="commentMeta">
                                                    <p class="pull-left">Abu Stanley, October 15, 2014</p>
                                                    <a class="pull-right" href="#">reply</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus 
                                                    qui blanditiis praesentium voluptatum deleniti atque 
                                                    corrupti quos dolores quas molestias excepturi.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="commentWrap">
                                                    <div class="commenterImg">
                                                        <img src="images/blogSingle/comment2.jpg" alt="">
                                                    </div>
                                                    <div class="fullComment">
                                                        <div class="commentMeta">
                                                            <p class="pull-left">May, October 15, 2014</p>
                                                            <a class="pull-right" href="#">reply</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <p>
                                                            At vero eos et accusamus et iusto odio dignisimos ducimus qui blanditiis 
                                                            praesentium deleniti atque quos dolores quas molestias 
                                                            excepturi.
                                                        </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="commentWrap">
                                                            <div class="commenterImg">
                                                                <img src="images/blogSingle/comment3.jpg" alt="">
                                                            </div>
                                                            <div class="fullComment">
                                                                <div class="commentMeta">
                                                                    <p class="pull-left">Mart Jameson, October 15, 2014</p>
                                                                    <a class="pull-right" href="#">reply</a>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <p>
                                                                    At vero eos et accusamus et iusto odio 
                                                                    dignissimos ducimus quiditiis praesentium 
                                                                    voluptatum deleniti atque.
                                                                </p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="commentWrap">
                                            <div class="commenterImg">
                                                <img src="images/blogSingle/comment4.jpg" alt="">
                                            </div>
                                            <div class="fullComment">
                                                <div class="commentMeta">
                                                    <p class="pull-left">Abu Stanley, October 15, 2014</p>
                                                    <a class="pull-right" href="#">reply</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus 
                                                    qui blanditiis praesentium voluptatum deleniti atque 
                                                    corrupti quos dolores quas molestias excepturi.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="commentWrap">
                                                    <div class="commenterImg">
                                                        <img src="images/blogSingle/comment5.jpg" alt="">
                                                    </div>
                                                    <div class="fullComment">
                                                        <div class="commentMeta">
                                                            <p class="pull-left">May, October 15, 2014</p>
                                                            <a class="pull-right" href="#">reply</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <p>
                                                            At vero eos et accusamus iusto odio dignissimos ducimus 
                                                            blanditiis praesentium deleniti atque 
                                                            corrupti quos dolores quas molestias excepturi.
                                                        </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div-->
                            <!--<div class="commentForm wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                <h1>Leave Comment</h1>
                                <form action="#" method="post">
                                    <input type="text" placeholder="Full name">
                                    <input type="email" placeholder="Email address">
                                    <div class="clearfix"></div>
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit">Leave a comment</button>
                                </form>
                            </div>-->
                        </div>
                        <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                            <div class="sidebar">
                                <aside class="widget tags wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h4 class="widgetTitle">Tags</h4>
                                    <a class="active" href="blogSingle.html">All</a>
                                    <a href="javascript:void(0);" class="tags">Web Design</a>
                                    <a href="javascript:void(0);" class="tags">Branding</a>
                                    <a href="javascript:void(0);" class="tags">Media</a>
                                    <a href="javascript:void(0);" class="tags">Photography</a>
                                    <a href="javascript:void(0);" class="tags">Print</a>
                                    <a href="javascript:void(0);" class="tags">Marketing</a>
                                </aside>
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
                                <!--aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <h4 class="widgetTitle">Most popular</h4>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget1.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="#">november 3, 2014</a>
                                            <p><a href="#">Stet clita kasd gubergren no takimata sanctus.</a></p>
                                        </div>
                                    </div>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget2.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="#">october 29, 2014</a>
                                            <p><a href="#">Lorem ipsum dolor amet consetetur.</a></p>
                                        </div>
                                    </div>
                                    <div class="sidePost">
                                        <div class="sidePostImg">
                                            <img src="images/blogSidebar/widget3.jpg" alt="">
                                        </div>
                                        <div class="sidePostCont">
                                            <a href="#">october 13, 2014</a>
                                            <p><a href="#">Sadipscing elitr, sed diam nonumy eirmod.</a></p>
                                        </div>
                                    </div>
                                </aside-->
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
