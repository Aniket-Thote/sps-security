<?php

if(isset($_POST['submit']))

{

	$fname = $_POST['fname'] ; 

	$lname = $_POST['lname'];

	$mobile = $_POST['mobile'];

	$email = $_POST['email'];

	$subject = $_POST['subject'];

	

	$to = 'contact@spspvt.com';

	$subject = "Contact";			

	

	$message = '<body style="margin:0; padding:10px 0;color:#333;" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

				<br>

					<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

						<tr>

							<td align="center" valign="top" bgcolor="#ffffff" style="background-color: #ffffff;">

						  		<table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#ffffff">

									<tr>

										<td class="container-padding" bgcolor="#ffffff" style="border:1px solid #000;background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 14px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;">

									  		<br>

											<h1 style=" margin:0 0 5px 0; padding:0; width:100%;  display:block;"><img src="images/logo.png" alt=""></h1>     												

											<br><br>

											<table width="100%" cellpadding="3" cellspacing="3">

												<tr>

													<th align="left" width="25%">Name:</th>

													<td width="75%">'.$fname.' '.$lname.'</td>

												</tr>

												<tr>

													<th align="left" width="25%">Mobile Number:</th>

													<td width="75%">'.$mobile.'</td>

												</tr>

												<tr>

													<th align="left" width="25%">Email:</th>

													<td width="75%">'.$email.'</td>

												</tr>

												<tr>

													<th align="left" width="25%">Message:</th>

													<td width="75%">'.$subject.'</td>

												</tr>

												

											</table>

											<br><br> 

											<p>Sincerely,

											<br /><br />

											Singh Protective Service Pvt. Ltd,<br>

											

											</p>

											<br>

   										</td>

   									</tr>

								</table>

							</td>

						</tr>

					</table>

				</body>';

					// Always set content-type when sending HTML email

			//echo $message ; exit;

					$headers = 'From:  spspvt175@gmail.com' . "\r\n" ;



					$headers .='Reply-To: '. $email . "\r\n" ;



					$headers .= "Return-Path: ". $email . "\r\n";

					$headers .='X-Mailer: PHP/' . phpversion();

					$headers .= "MIME-Version: 1.0\r\n";



					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   



					mail($to,$subject,$message,$headers);

}

?>

<!DOCTYPE html>

<html>



<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">



    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/revolution-slider.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->

    <link rel="icon" href="images/favicon.png" type="image/x-icon">



   	<title>Contact</title>     

        

    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/owl.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">



    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>

* {

  box-sizing: border-box;

}



/* Style inputs */

input[type=text], input[type=number], input[type=email], textarea {

  width: 100%;

  padding: 8px;

  border: 1px solid #ccc;

  margin-top: 6px;

  margin-bottom: 10px;

  resize: vertical;

}



input[type=submit] {

  background-color: #4CAF50;

  color: white;

  padding: 12px 15px;

  border: none;

  cursor: pointer;

}



input[type=submit]:hover {

  background-color: #45a049;

}



/* Create two columns that float next to eachother */

.column {

  float: right;

  width: 100%;

  margin-top: 6px;

  padding: 20px;

}



/* Clear floats after the columns */

.row:after {

  content: "";

  display: table;

  clear: both;

}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */

@media screen and (max-width: 600px) {

  .column, input[type=submit] {

    width: 100%;

    margin-top: 0;

  }

}

</style>

</head>

<body>

    <div class="page-wrapper">

        <!-- Main Header-->

        <header class="main-header">

            <!--<div class="header-top">

                <div class="auto-container clearfix">

                    <!--Top Left-->

                    <!--<div class="top-left pull-left">

                        <div class="social-links">

                            <a href="#"><span class="fa fa-facebook-f"></span></a>

                            <a href="#"><span class="fa fa-twitter"></span></a>

                            <a href="#"><span class="fa fa-linkedin"></span></a>

                        </div>

                    </div>-->

                    <!--Top Right-->

                    <!--<div class="top-right pull-right">

                        <!--Links Nav-->

                        <!--<ul class="links-nav">

                            <li><a href="#magazineModal" data-toggle="modal">E-MAGAZINE</a></li>

                            <li><a href="https://www.bombayintelligence.com/index.php/gallery/all">Gallery</a></li>

                            <li><a href="https://www.bombayintelligence.com/index.php/faq/">FAQ’S</a></li>

                        </ul>

                    </div>

                </div>

            </div>-->

            <!--Header-Upper-->

            <div class="header-upper">

                <div class="auto-container">

                    <div class="clearfix">

                        <div class="pull-left logo-outer">

                            <div class="logo">

                                <a href="index.html">

                                    <img src="images/logo.png" alt="">

                                    <span>SINGH PROTECTIVE SERVICES<br>

                                        <center> SECURITY PVT LTD.</center>

                                    </span>

                                </a>

                            </div>

                        </div>

                        <div class="pull-right upper-right clearfix ">

                            <!--Info Box-->

                            <div class="upper-column info-box hidden-xs">

                                <div class="icon-box"><img src="images/icons/clock.png" width="50px" height="50px"></div>

                                WORKING HOURS

                                <div class="light-text">24 X 7</div>

                            </div>

                            <!--Info Box-->

                            <div class="upper-column info-box hidden-xs">

                                <div class="icon-box"><span class="flaticon-technology-1"></span></div>

                                CUSTOMER SUPPORT

                                <div class="light-text">9730921927</div>

                            </div>

                            <!--Info Box-->

                            <div class="upper-column info-box hidden-xs">

                                <div class="icon-box"><img src="images/icons/email.png" width="40px" height="40px"></div>

                                MAIL US

                                <div class="light-text"> 

									

									<div><a href="mailto:admin@spspvt.com">admin@spspvt.com</a></div>

									

								</div>

                            </div>

                            <div class="clearfix"></div>

                            

                        </div>

                    </div>

                </div>

            </div>

            <!--Header-Lower-->

            <div class="header-lower">

                <div class="auto-container">

                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->

                        <nav class="main-menu">

                            <div class="navbar-header">

                                <!-- Toggle Button -->

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div class="navbar-collapse collapse clearfix">

                                <ul class="navigation clearfix">

                                    <li class="home"><a href="index.html">Home</a></li>

                                    <li class="dropdown abtUs"><a>About Us</a>

                                        <ul>

                                            <li><a href="companyprofile.html">Company Profile</a></li>

                                            <li><a href="directors.html">Board of Directors</a></li>

                                            <li><a href="training.html">Training & Orientation</a></li>

                                            <li><a href="license.html">License & Registrations</a></li>

                                            <li><a href="appreciation.html">Appreciation & Accreditation</a></li>

                                        </ul>

                                    </li>

                                    <li class="dropdown srvicesmenu">

                                        <a href="#">Services</a>

                                        <ul>

											<li><a href="services.html#commercialsecurity">Commercial Security Services</a></li>

											<li><a href="services.html#industrialsecurity">Industrial Security Services</a></li>

											<li><a href="services.html#residentialsecurity">Residential Security Services</a></li>

											<li><a href="services.html#socialevents">Special Event Security Services</a></li>

											<li><a href="services.html#intelligenceservices">Intelligence Services</a></li>

											<li><a href="services.html#vipprotection">VIP Protection</a></li>

											<li><a href="services.html#electronicsecurity">Electronic Security</a></li>

											<li><a href="services.html#banksecurity">Bank Security</a></li>

                                        </ul>

                                    </li>

                                    <!--<li class="spsnetwork"><a href="network.html">Network</a></li>-->

                                    <li class="spscustomer"><a href="customers.html">Customers</a></li>

                                    <li class="spsOperation"><a href="operations.html">Operations</a></li>

                                    <li class="spsInfra"><a href="infrastructure.html">Infrastructure</a></li>

                                    <li class="spsContact"><a href="contact.php">Contact Us</a></li>

                                </ul>

                            </div>

                        </nav>

                        <!-- Main Menu End-->



                    </div>

                </div>

            </div>

            <!--Sticky Header-->

            <!--<div class="sticky-header">

                <div class="auto-container clearfix">

                    <div class="logo pull-left">

                        <a href="index.php" class="img-responsive"><img src="images/logo.png" width="55" alt="Bristol"></a>

                    </div>

                    <div class="right-col pull-right">

                        <nav class="main-menu">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div class="navbar-collapse collapse clearfix">

                                <ul class="navigation clearfix">

                                    <li class="home"><a href="index.html">Home</a></li>

                                    <li class="dropdown abtUs"><a>About Us</a>

                                        <ul>

                                            <li><a href="companyprofile.html">Company Profile</a></li>

                                            <li><a href="directors.html">Board of Directors</a></li>

                                            <li><a href="training.html">Training & Orientation</a></li>

                                            <li><a href="licence.html">License & Registrations</a></li>

                                            <li><a href="appreciation.html">Appreciation & Accreditation</a></li>

                                        </ul>

                                    </li>

                                    <li class="dropdown srvicesmenu">

                                        <a href="#">Services</a>

                                        <ul>                                            

											<li><a href="commercialsecurity.html">Commercial Security Services</a></li>

											<li><a href="industrialsecurity.html">Industrial Security Services</a></li>

											<li><a href="residentialsecurity.html">Residential Security Services</a></li>

											<li><a href="socialevents.html">Special Event Security Services</a></li>

											<li><a href="securityaudit.html">Security Audit</a></li>

											<li><a href="securityconsultancy.html">Security Consultancy</a></li>

											<li><a href="intelligenceservices.html">Intelligence Services</a></li>

											<li><a href="surveillance.html">Surveillance</a></li>

											<li><a href="vipprotection.html">VIP Protection</a></li>

											<li><a href="cashvanservices.html">Cash Van Services</a></li>

											<li><a href="electronicsecurity.html">Electronic Security</a></li>

											<li><a href="banksecurity.html">Bank Security</a></li>

											<li><a href="dogsecurity.html">Dog Squad</a></li>

											<li><a href="antecedentsverification.html">Antecedents Verification</a></li>

											<li><a href="mortgagedvehicle.html">Mortgaged Vehicle Seizure</a></li>

											<li><a href="facilityattendant.html">Facility / Attendant Services</a></li>

											<li><a href="utilityservices.html">Utility Services</a></li>

                                        </ul>

                                    </li>

                                    <li class="bisnetwork"><a href="network.html">Network</a></li>

                                    <li class="trainingOri"><a href="https://www.bombayintelligence.com/index.php/training/index">Training & Orientation</a></li>

                                    <li class="biscustomer"><a href="customers.html">Customers</a></li>

                                    <li class="bisOperation"><a href="operations.html">Operations</a></li>

                                    <li class="bisInfra"><a href="infrastructure.html">Infrastructure</a></li>

                                    <li class="bisCsr"><a href="https://www.bombayintelligence.com/index.php/csr">CSR</a></li>

                                    <li class="bisCareer"><a href="https://www.bombayintelligence.com/index.php/career">Career</a></li>

                                    <li class="bisContact"><a href="contact.php">Contact Us</a></li>

                                </ul>

                            </div>

                        </nav>

                    </div>

                </div>

            </div>-->

            <!--End Sticky Header-->

        </header>

        <!--End Main Header -->

      <!-- Modal Contact -->

  

<style>

  .spsContact{ background-color: #961312}

</style>       



        <!--INFRASTRUCTURE Section-->

        <section class="advantage-section backgroundPattern">

            <div class="auto-container">

                <!--Sec Title Two-->

                <div class="sec-title-two">

                    <h2>CONTACT</h2>

                </div>

                <!--End Sec Title Two-->

                <div class="row clearfix">



                    <div class="col-md-12 col-sm-12">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1988345997756!2d79.06577761440928!3d21.144483989194665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0f4d03da763%3A0xf720ee7f6cffd35d!2s3%2C+VIP+Rd%2C+Gorepeth%2C+Nagpur%2C+Maharashtra+440010!5e0!3m2!1sen!2sin!4v1565424363714!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

					

                </div>

				

				<div class="row clearfix">



                    <div class="col-md-6 col-sm-6">

						<h2>Corporate Office:</h2>

						<div class="text" style="position: relative; color: #2f3542; font-size: 17px; text-align: justify; line-height: 27px;">

							Address: Plot No.504 highway castle Society near Maruti Seva Amravati road, Nagpur.

							<br>

							Phone No.: +91 712 2532588

							<br>

							Mobile No.: +91 8888884580, 8380090911, 21, 31, 41, 51, 61

							<br>

							Email: admin@spspvt.com

							<br>

							Web: www.spspvt.com

							

						</div>

						<h2>Our Branches:</h2>

						<div class="text" style="position: relative; color: #2f3542; font-size: 17px; text-align: justify; line-height: 27px;">

							Raipur (CG) | Anuppur (MP) | Allahabad (UP) | Pune (MS) | Aurangabad

						</div>

					</div>

					

					<div class="col-md-6 col-sm-6">

						<div class="column">

						  <form action="" method="post">

							<label for="fname">First Name</label>

							<input type="text" id="fname" name="fname" placeholder="Your name.." required>

							<label for="lname">Last Name</label>

							<input type="text" id="lname" name="lname" placeholder="Your last name.." required>

							<label for="mobile">Mobile No.</label>

							<input type="number" id="mobile" name="mobile" placeholder="Your Mobile Number." required minlength="10">

							<label for="email">Email</label>

							<input type="email" id="email" name="email" placeholder="Your Email..">

							<label for="subject">Message</label>

							<textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>

							<input type="submit" value="Submit" name="submit">

						  </form>

						</div>

					</div>

				</div>

            </div>

        </section>

        <!--End INFRASTRUCTURE Section-->

		

	





        <!--Main Footer-->

        <footer class="main-footer"  id="main-footer">

            

            <!--Footer Bottom-->

            <div class="footer-bottom">

                <div class="auto-container">

                    <div class="row clearfix">

                        <!--column-->

                        <div class="column col-md-6 col-sm-6 col-xs-12">

                            <div class="copyright">&copy; 2019 Singh Protective Service Pvt. Ltd. All Rights Reserved.</div>

                        </div>

                        <div class="column col-md-6 col-sm-6 col-xs-12 text-right">

                            <div class="copyright">Designed and Developed By Raj Wakodikar.</div>

                        </div>

                        

                    </div>

                </div>

            </div>

        </footer>



    <!--Scroll to top-->

    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>



    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/revolution.min.js"></script>

    <script src="js/jquery.fancybox.pack.js"></script>

    <script src="js/jquery.fancybox-media.js"></script>

    <script src="js/owl.js"></script>

    <script src="js/wow.js"></script>

    <script src="js/script.js"></script>



    <script src="js/jquery.validate.min.js"></script>

 	<script src="js/additional-methods.min.js"></script>



    <script src='https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



    <script>

        function valWindowSize() {

            "use strict";

            var width = $(window).width();

            if (width < 768) {

                $('ul[data-id="menu"]').removeClass();

                $('ul[data-id="menu"]').addClass('nav navbar-nav');

            } else {

                $('ul[data-id="menu"]').removeClass();

                $('ul[data-id="menu"]').addClass('nav nav-tabs');

            }

        }



        $(document).ready(function () {

            $('.marquee').marquee({

                pauseOnHover: true

            });

            

        });



        $(document).on('ready', function () {

            "use strict";

            fakewaffle.responsiveTabs(['xs', 'sm']);



            $(window).on('resize', function () {

                valWindowSize();

            });

        });

        

         $(window).load(function() {

          $('.post-module').hover(function() {

            $(this).find('.description').stop().animate({

              height: "toggle",

              opacity: "toggle"

            }, 300);

          });

        });



      



    </script>

</body>

</html>