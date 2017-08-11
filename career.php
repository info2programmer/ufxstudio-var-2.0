<?php

require ('lib/db_config.php');
require ('lib/controler.php');

date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y H:i');//get current date time 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio - UFX Studio</title>
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
		.required{
		margin-top:10px;
			}</style>

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
                        <li ><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li class="active"><a href="career.php">Career</a></li>
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
                            <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">career </h1>
                            <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                <li><a href="#">home</a><span>|</span></li>
                               
                                <li>career</li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                                    $tempName=$_FILES['cvlink']['tmp_name'];
                                    $realname=$_FILES['cvlink']['name'];


                                   /* echo $_POST['name'];echo $_POST['emalil'];echo $_POST['phone'];echo $_POST['AppliedFor'];echo $_POST['Exp'];echo $_POST['Qulification'];echo $_POST['Institute'];echo $_POST['PassingYear'];echo $_POST['PreviousCompany'];echo $_POST['JobRole'];echo $_POST['AdditionalMassage'];echo $_POST['Percentage'];echo $tempName;echo $realname;*/
                                   SubmitCareerForm($_POST['name'],$_POST['emalil'],$_POST['phone'],$_POST['AppliedFor'],$_POST['Exp'],$_POST['Qulification'],$_POST['Institute'],$_POST['PassingYear'],$_POST['Percentage'],$_POST['PreviousCompany'],$_POST['JobRole'],$_POST['AdditionalMassage'],$tempName,$realname);
                                }
                            ?>
                                <h1>Career <span>Form</span></h1>
                                
                                <form method="post" action="career.php" enctype="multipart/form-data" >
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Name:</label>
                                        <input type="text" class="form-control" name="name" placeholder="your name">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Email:</label>
                                        <input type="text" class="form-control" name="emalil"  placeholder="your email">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Phone No:</label>
                                        <input type="text" class="form-control" name="phone" placeholder="your phone">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-4 text-left">
                                        <label >Post Applied For:</label>

                                        <select class="form-control" name="AppliedFor">
                                            <option value="Graphics Designer">Graphics Designer</option>
                                            <option value="Web Designer">Web Designer</option>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="3D Animator">3D Animator</option>
                                            <option value="Maya Animator">Maya Animator</option>
                                            <option value="Video Editor">Video Editor</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-4 text-left">
                                        <label >Year Of Exp:</label>
                                        <select name="Exp" class="form-control">
                                            <option value="6 Months+">6 Months+</option>
                                            <option value="1 Year+">1 Year+</option>
                                            <option value="2 Years+">2 Years+ </option>
                                            <option value="4 Years+ ">4 Years+ </option>
                                            <option value="5 Years+">5 Years+ </option>
                                            <option value="10 Years+">10 Years+ </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-4 text-left">
                                        <label >Highest Qulification:</label>
                                        <select name="Qulification" class="form-control">
                                            <option value="10+2">10+2</option>
                                            <option value="BA">BA</option>
                                            <option value="BSC">BSC</option>
                                            <option value="MA">MA</option>
                                            <option value="MSc">MSc</option>
                                            <option value="BCA">BCA</option>
                                            <option value="MCA">MCA</option>
                                            <option value="BBA">BBA</option>
                                            <option value="MBA">MBA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Institute Name:</label>
                                        <input type="text" name="Institute" class="form-control"  placeholder="your institute name">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 text-left">
                                        <label >Passing Year:</label>
                                        <input type="text" name="PassingYear" class="form-control"  placeholder="year">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 text-left">
                                        <label >Marks Percentage:</label>
                                        <input type="text" class="form-control" name="Percentage"  placeholder="marks">
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Previous Company Name:</label>
                                        <input type="text" class="form-control" name="PreviousCompany"  placeholder="company name">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Job Role:</label>
                                        <input type="text" name="JobRole" class="form-control"  placeholder="your role">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 text-left">
                                        <label >Additional Massage:</label>
                                        <textarea name="AdditionalMassage" class="form-control" rows="5"> </textarea>
                                        
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >Upload CV:</label>
                                        <input type="file" name="cvlink" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 text-left">
                                        <label >&nbsp;</label>
                                        <button name="submit" class="form-control btn-info">SUBMIT</button>
                                    </div>



                                    
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
    </body>
</html>
