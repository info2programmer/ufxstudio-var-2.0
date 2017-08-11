<?php
require ('lib/db_config.php');
require ('lib/controler.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us - UFX Studio</title>
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
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
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
            <section class="breadCrumAreaNew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">contact <span>us</span></h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                <li><a href="#">home</a><span>|</span></li>
                                <li>contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Map Section -->
            <section class="mapArea wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <img src="images/contact-logo.jpg" class="img-responsive">
            </section>
            
            <!-- Contact Section -->
            <section class="contactArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="career">
                            <?php
                                if(isset($_POST['submit']))
                                {
                                    submitContact($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['skype'],$_POST['reqfor'],$_POST['message']);
                                }
                            ?>
                                <form method="post" action="contact.php" >
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Name:</label>
                                        <input type="text" required class="form-control" name="name"  placeholder="your name">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Email:</label>
                                        <input type="email" name="email" required class="form-control" placeholder="your email">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Phone No:</label>
                                        <input type="text" name="phone" required class="form-control"  placeholder="your phone">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Skype Name:</label>
                                        <input type="text" name="skype" class="form-control"  placeholder="your phone">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Reason for contact us:</label>

                                        <select class="form-control" name="reqfor">
                                            <option value="General Enquiry">General Enquiry</option>
                                            <option value="Complane">Complane</option>
                                            <option value="Suggestion">Suggestion</option>
                                            <option value="Others">Others</option>
                                            
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Massege:</label>
                                        <textarea name="message" class="form-control" required rows="8"> </textarea>
                                        
                                    </div>
                                    <button name="submit" class="btn btn-info">SUBMIT</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Old Contact Section>
            <section class="contactArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="contactForm">
                                <h1>Contact <span>Form</span></h1>
                                <form method="post" action="#" id="unContactForm">
                                    <input class="required" type="text" placeholder="Full name" name="con_name">
                                    <input class="required" type="email" placeholder="Email address" id="contact_email" name="email_address">
                                    <input class="required" type="text" placeholder="Phone No" name="con_name">
                                    <input class="required" type="email" placeholder="Skype" id="contact_email" name="email_address">
                                    <div class="clearfix"></div>
                                    <textarea class="required" placeholder="Message" name="message"></textarea>
                                    <button type="submit" id="unConSubmit">send</button>
                                </form>
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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>

        <script>
window.addEventListener("load", function(){
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57c024982b03647ba16bd63a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>
