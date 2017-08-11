<?php
if(isset($_GET['statusNewslette']))
{
    echo "<script>alert('Request Submited');</script>";
}
require ('lib/controler.php');
require ('lib/view.php');
require ('lib/db_config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Us - UFX Studio</title>
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
                    <h2><a href="index.php">UFX<span>Studio</span></a></h2>
                </div>
                <nav class="mainMenu pull-left">
                    <div class="menuButton hidden-lg hidden-md">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>                                                                                 
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="about.php">about</a></li>
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
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">About<span>Us</span></h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                <li><a href="index.php">Home</a><span>|</span></li><li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section -->
            <section class="aboutArea commonSection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-left wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="aboutImg">
                                <img alt="" src="images/about/thumb.jpg">
                            </div>
                            
                            <!--ul class="featuresList">
                                <li>Sed ut perspiciatis unde omnis natus error sit</li>
                                <li>Voluptatem accusantium doloremque</li>
                                <li>Laudantium, totam rem aperiam, eaque ipsa quae</li>
                            </ul-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-left wow zoomIn" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="panel-group myAccordion" id="accordion" role="tablist">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Our Vision
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            

                                            <p>
                                                
   <p>  Deliver exceptional visual communication and service that increases our clients’ value</p>

   <p>  Deliver extraordinary visual content and communication that sets UFX Studio apart from the rest and enhances our value to the customer</p>

    <p> Establish the UFX Studio’s signature as a benchmark and standard in the world of global visual communications



                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Our Mission
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                
    <p>Focus on satisfying the needs of our customers by delivering unique and highly effective solutions produced through the skills of a carefully selected team of accomplished artists, each with a unique profile and contribution.</p>

    <p>Consistently deliver the highest quality visual effects and 3D artwork.</p>

    <p>Exceed our customers’ expectations through personal commitment to outstanding service and follow-up.</p>

    <p>Provide an environment that enables our team to flourish and realize its artistic vision.</p>

    <p>Embrace and draw on the richness of diversity that different nationalities, cultures and ideas bring to our team.</p>

                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-lg-12 col-sm-12 col-xs-12 text-left wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
						
						<p>
						We’re Universal FX Studio. A full service media entertainment &amp; marketing company that brings all the elements of high 
						quality production together to make something really amazing. We love what we do. And what we do is to make awesome looking things.
						We provide Preproduction, production, post production, sound recording to music launch, advertising, design, media planning and buying,
						market research, digital and public relations services.
						We try to bring out stories by our quality of work that touches and connects human emotion, from a script to production to post processing
						we draw infinite possibilities, whatever your business UFX Studio help you to strengthen it, however you see your future we are here to 
						shape it, we work with customers in almost every sectors to help build them their market position, innovating designing and creating together.
						</p>
						<p>
						We believe in art of co-operation with a better together approach supported by wonderful employees who are talented and motivated in their individual fields.
						It takes flexibility and a high degree of responsiveness to make the shifting need in the market place that's why we work heavily in R&amp;D on every product and 
						that's why most of our services fit in customers' requirements. 
				
						</p>
						<p>
						
						We are also active in digital media such as Hollo ads (We offer futuristic solutions, merging holograms, stereoscopy and projection mapping to breathe life into
						your products and present them in a technological and innovative light.), graphics, 2d &amp; 3d animation, architectural visualization, production post production, social media promotions,
						website building and development, android apps building and development. Our technological innovation helps us to refine our products and greater outcomes. We take our client projects 
						as our projects and make it with all new innovative ideas unique from all and with modernize looks and feels. We put live into our projects. We also suggest our client to how to increase 
						their revenue how to utilize their media product in commercial field other than just storing them. and this way we try to keep a long term relation with our clients.
						and we provide you best(international) quality things with a genuine budget structure.


						
						
						</p>
						
						
						
						
						</div>
						
                    </div>
                </div>
            </section>
            <!-- Skill Section -->
            <section class="skillArea commonSection">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <h2 class="commonTittle white">Our<span>skills</span></h2>
                            <!--p class="subTittle">Lorem ipsum dolor amet consetetur sadipscing elitr</p-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="singleSkill">
                                <div class="skillOne cmskill" data-skills="0.98" data-gradientstart="#2577dd" data-gradientend="#00417b"><strong></strong></div>
                                <p>Creative</p>
                            </div>
                        </div>
						                        <div class="col-lg-3 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="singleSkill">
                                <div class="skillOne cmskill" data-skills="0.98" data-gradientstart="#2577dd" data-gradientend="#00417b"><strong></strong></div>
                                <p>Marketing,</br>Branding SMO</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="singleSkill">
                                <div class="skillTwo cmskill" data-skills="0.98" data-gradientstart="#2577dd" data-gradientend="#00417b"><strong></strong></div>
                                <p>Website,SEO</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="singleSkill">
                                <div class="skillThree cmskill" data-skills="0.99" data-gradientstart="#2577dd" data-gradientend="#00417b"><strong></strong></div>
                                <p>3D Visualisation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Section -->
            <section class="teamArea commonSection">
                <div class="container">
                    <div class="row">
                    	<h2 align="center">Members</h2>
                        <?php viewTeam(); ?>
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
                                    <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">+91 7685054368</h2>
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
