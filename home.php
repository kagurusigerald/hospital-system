<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Welcome - <?php echo $userRow['email']; ?></title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
  <![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i>Hospital</b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav" >
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#aboutUs" class="scroll-link">About</a></li>
          <li><a href="#services" class="scroll-link">Services</a></li>
          <li><a href="#registration" class="scroll-link">Patient</a></li>
          <li><a href="#team" class="scroll-link">Appointment</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact</a></li>
          <li><a href="logout.php?logout">Log Out</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>

<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">Belief in recovery always while at <br /><font color="red" size="15px"><b> PATIENT CARE UGANDA</b></font></h1>
        <a href="#basics" class="arrow-link"> <i class="fa fa-arrow-circle-down fa-2x"></i> </a> 
        <!--<p>Awesome theme for your Business or Corporate site to showcase <br/>
          your product and service.</p>--> 
      </div>
    </div>
  </div>
</section>

<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2><b><font color="yellow">ABOUT US</font></h2>
      
    </div>
    <div class="row feature design">
      <div class="six columns right">
        <h3><font color="purple"></font></h3>
        <p>We are dedicated to helping you feel the way you want to feel – to help you live a long, healthy, happy life </p>
        <p>We believe health and happiness is our natural state – we were made for that. But in our experience very few women find that so easily. Almost always, it takes change, whether you start when you’re 25 or 85! </p>
      </div>
      <div class="six columns feature-media left"> <img src="images/feature-img-1.png" alt=""> </div>
    </div>
  </div>
</section>
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2><b><font color="yellow">OUR FACILITIES</font></h2>
      <p></p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/1.jpg" class="fancybox"> <img src="images/work/1.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
              <div class="overlay">  </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/6.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
              <div class="overlay"> </div>
              </a> </li>
             
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  </div></section>

<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2><b><font color="yellow">OUR SERVICES</font></h2>
      <p>Services that we offer to our esteemed customers (patients and many more)</p>
    </div>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-life-ring fa-2x circle"></i>
        <h3><span class="id-color">Cardio Monitoring</span></h3>
        <p>We do mind about continuous monitoring of the heart activity, generally by electrocardiography.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-plus-square fa-2x circle"></i>
        <h3><span class="id-color">Medical Treatment</span></h3>
        <p> We offer professional medical services such as first aid services to injured patients, pharmacuetical services</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-female fa-2x circle"></i>
        <h3><span class="id-color">Women Care Help</span></h3>
        <p>We work on pregnant women. we do admit them in respective and spacious wards with good facilities</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-child fa-2x circle"></i>
        <h3><span class="id-color">Child Care</span></h3>
        <p>We do offer child care services to children ranging from 1-12 years such as; Polio immunization</p>
      </div>
      <!-- end:--> 
    </div>
  </div>
  
  </div 
></section>



<section id="registration" class="registration-parlex" class="page-section colord">
  <div class="parlex-back">
    <div class="container">
     
      <div class="row mrgn30">
        <h2 align="center"><b><font color="yellow">ENTER PATIENT DETAILS</font></h2>
        <p>&nbsp;</p>
            
            <form name="form1" method="post" action="patient_process.php">
              <table width="2374" border="0">
                <tr>
                  <td width="157">&nbsp;</td>
                  <td width="342"><strong>PATIENT NAME:</strong></td>
                  <td colspan="2"><label for="textfield"></label>
                  <input type="text" name="pname" id="textfield"></td>
                  <td width="60" rowspan="6">&nbsp;</td>
                  <td width="463"><span class="form-group"><strong>
                    <label for="Regno">PATIENT REGISTRATION No:</label>
                  </strong></span></td>
                  <td width="557"><input type="text" name="regno" id="textfield6"></td>
                  <td width="245">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>EMAIL ADDRESS:</strong></td>
                  <td colspan="2"><input type="email" name="email" id="textfield2"></td>
                  <td><strong>DIAGNOSIS TEST:</strong></td>
                  <td><input type="text" name="test" id="textfield7"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span class="form-group"><strong>
                    <label for="address">PATIENT ADDRESS</label>
                  </strong></span><strong>:</strong></td>
                  <td colspan="2"><input type="text" name="address" id="textfield3"></td>
                  <td><span class="form-group"><strong>
                    <label for="date">REGISTRATION DATE</label>
                  :</strong></span></td>
                  <td><input type="text" name="date" id="textfield8"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>NATIONALITY:</strong></td>
                  <td colspan="2"><input type="text" name="name" id="textfield4"></td>
                  <td><span class="form-group"><strong>
                    <label for="city">CITY</label>
                  </strong></span><strong>:</strong></td>
                  <td><input type="text" name="city" id="textfield9"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>ID PASSPORT :</strong></td>
                  <td colspan="2"><input type="text" name="passport" id="textfield5"></td>
                  <td><strong>DATE OF BIRTH:</strong></td>
                  <td><input type="text" name="dob" id="dob"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td width="369">&nbsp;</td>
                  <td width="147"><label for="Submit"></label>
                 <button type="submit" class="btn btn-primary">SUBMIT</button></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </form>        
      </div>
    </div>
    
</section>

   <section id="team" class="page-section" >
  <div class="container">
    <div class="heading text-center"> 
      <div class="parlex-back">
    <div class="container">
     
      <div class="row mrgn30">
     
      <div class="row mrgn30">
        <h2 align="center"><b><font color="black">Appointement Forms</font></h2>
        <p>
        <form method="post" action="send_appointment.php">
                            <table width="2374" border="0">
                <tr>
                  <td width="157">&nbsp;</td>
                  <td width="342"><div align="left"><strong><span class="form-group">First Name</span>:</strong></div></td>
                  <td colspan="2"><label for="textfield"></label>
                  <input type="text" name="fname" id="textfield"></td>
                  <td width="60" rowspan="6">&nbsp;</td>
                  <td width="463"><span class="form-group"><strong>
                    <label for="Regno">Last Name:</label>
                  </strong></span></td>
                  <td width="557"><input type="text" name="lname" id="textfield6"></td>
                  <td width="245">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left"><strong>Age:</strong></div></td>
                  <td colspan="2"><input type="text" name="age" id="textfield2"></td>
                  <td><strong>Adress:</strong></td>
                  <td><input type="text" name="adress" id="textfield7"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span class="form-group"><strong><label for="address">                    </label>
                    </strong>
                    <label for="address"></label>
                    </span>
                    <label for="address">
                    <div align="justify"><strong>Contact</strong>:</div>
                    </label></td>
                  <td colspan="2"><input type="text" name="tel" id="textfield3"></td>
                  <td><span class="form-group"><strong>
                    <label for="date">Email</label>
                  :</strong></span></td>
                  <td><input type="email" name="email" id="textfield8"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left"><strong>Appointment Date:</strong></div></td>
                  <td colspan="2"><input type="text" name="date" id="textfield4"></td>
                  <td><span class="form-group"><strong>
                    <label for="city">Are You Humain?</label></strong></span><strong>:</strong></td>
                  <td><input type="text" name="humain" id="textfield9"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left"><strong>Nature of the problem:</strong></div></td>
                  <td colspan="2"><input type="text" name="nature" id="textfield5"></td>
                  <td><strong>DATE OF BIRTH:</strong></td>
                  <td><input type="text" name="dob" id="dob"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left"></div></td>
                  <td colspan="2">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left"></div></td>
                  <td width="369">&nbsp;</td>
                  <td width="147"><label for="Submit"></label>
                 <button type="submit" class="btn btn-primary">SUBMIT</button></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
      </form>
        
    </div>
    </div>
    
</section>


<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2><b><font color="yellow">CONTACT</font></h2>
          <p></p>
        </div>
      </div>
      <div class="row mrgn30">
         <form method="post" action="send_contact.php">
                            <label>Full Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="name" size="60" id="name" required data-validation-required-message="Please enter your name."></br></br>
                            <label>Phone Number:</label>&nbsp;&nbsp;&nbsp;
                            <input type="tel" name="phone" size="60" id="phone" required data-validation-required-message="Please enter your phone number."></br></br>
                            <label>Email Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="email" id="email" size="60" required data-validation-required-message="Please enter your email address."></br></br>
                            <label>Message:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <textarea rows="10" cols="59" name="comment" id="comment" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea></br></br>
                    <center><button type="submit" class="btn btn-primary">Send Message</button></center>
                </form>
       
      </div>
    </div>
    </section>


<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div>
  </div>
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved </a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>


<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
