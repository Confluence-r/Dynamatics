<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$content=" From: $name \n Email: $email \n Number: $number \n Message: $message \n \n *This is an automatic mail onbehalf of recipient submitting form on dynamatics.com ";
$recipient = "amar.hm@dynamatics.net";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../style.css" rel="stylesheet">
  <title>Success</title>
  <link rel="icon" sizes="57x57" href="/../assests/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
  <style>
    @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
  </style>
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
       <a href="../"><img class="logo" src="../assests/logo.png" width="11%"></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="../">HOME</a>
        </li>
        <li>
          <a href="../About-Us">ABOUT US</a>
        </li>
        <li>
          <a >BUSINESS<i class="arrow down"></i></a>
          <ul class="nav-dropdownn">
            <li>
              <a>HYDRAULICS<i class="arrow right"></i></a>
            <ul class="nav-dropdownl" style=" ">
              <li>
             <a href="../Hydraulics#India">Dynamatic Hydraulics?? India</a>
           </li>
           <li>
             <a href="../Hydraulics#Uk">Dynamatic Hydraulics?? UK</a>
            
            </li></ul>
             <li>
              <a>AEROSPACE<i class="arrow right"></i></a>
            <ul class="nav-dropdownl" style=" ">
              <li>
             <a href="../Oldland#India">Dynamatic-Oldland Aerospace??, India</a>
           </li>
           <li>
             <a href="../Oldland#Uk">Dynamatic-Oldland Aerospace??, UK</a>
            
            </li>
            </ul>
            <li>
              <a href="../Homeland">HOMELAND & SECURITY</a>
            </li>
 <li>
              <a >AUTOMOTIVE & METALLURGY<i class="arrow right"></i></a>
            <ul class="nav-dropdownl" style=" ">
              <li>
             <a href="../Automotive#Jkm">JKM Ferrotech Limited, India</a>
           </li>
           <li>
            <a href="../Automotive#Eisenwerk">Eisenwerk Erla GmbH, Germany</a>
            
            </li>
            </ul>
 <li>
              <a >MEDICAL<i class="arrow right"></i></a>
            <ul class="nav-dropdownl" style=" ">
              <li>
             <a href="../Dynamatic Medical">Dynamatic Medical???</a>
           </li>
           
            </ul>
            
            <li>
              <a href="../Engineering">ENGINEERING SERVICES</a>
            </li>
          </ul>
        </li>
        
        <li>
          <a >INVESTORS DESK<i class="arrow down"></i></a>
          <ul class="nav-dropdown">
            <li>
              <a href="../Investors/Reports/">Annual Reports</a>
            </li>
             <li>
              <a href="../Investors/Fillings/">Fillings</a>
            </li>
             <li>
              <a href="../Investors/Earnings/">Earnings</a>
            </li>
            <li>
              <a href="http://dynamatics.com/downloads/dynamatic_corporate_structure_2020.pdf" target="_blank">Corporate Structure</a>
            </li>
           
          </ul>
        </li>
        <li>
          <a href="../Careers">CAREERS</a>
        </li>
        <li>
          <a href="https://news.dynamatics.biz">NEWS & EVENTS</a>
        </li>
        <li>
        <a href="http://dynamatics.com/index.shtml" id="CLASSIC"><span> <i class="arrow left"></i> BACK TO CLASSIC</span></a>
      </li>
      </ul>
    </nav>
  </div>
</section>  

<br><br><br><br>
  <div class="background-success">
     <div style="background-color: #333333;"><br><br><br>  
                    
    <div style="text-align: center;" ><img src="../assests/logo.png" width="100px"></div>
    <h1 style="text-align: center; color: white;" class="site-header__title" data-lead-id="site-header-title" style="color: #cccccc;">THANK YOU!</h1>
  </header>
  <div class="main-content" style="padding: 10px;">
    <i class="fa fa-check main-content__checkmark fa-3x" id="checkmark" style="color: white; display: flex; justify-content: center; align-content: center;"></i><br>
    <p class="main-content__body" data-lead-id="main-content-body" style="text-align: center; color: #cccccc;"> Thank you for reaching out. We will get back to you as soon as possible.</p><br><br><br>
  </div>
  </div>
</div>

<footer style="position: fixed;bottom: 0;left: 0; right: 0; " >
  <div>
  <p><i class="far fa-copyright"></i> All Rights Reserved by Dynamatic Technologies Limited</p></div>
<div style="display: flex;justify-content: center;align-content: center;">
  <a href="https://www.facebook.com/DynamaticTechnologies/"><i class="fab fa-facebook-square"></i></a>
  <a href="https://twitter.com/DynamaticTech?lang=en"><i class="fab fa-twitter-square"></i></a>
  <a href="https://www.linkedin.com/company/dynamatic-technologies-limited/"><i class="fab fa-instagram-square"></i></a>
  <a href="https://www.youtube.com/channel/UCQapJnt3Gzd-zDlVF-qJ_vw"><i class="fab fa-youtube-square"></i></a>
</div>
</footer>
<!-- Script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
</script>
</body>
</html>
';
?>

