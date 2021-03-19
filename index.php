<?php

$dbhostname="localhost";
$dbusername="yassine";
$dbpassword="123";
$dbname="test";

$con = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

if (!$con){
    echo('Not Connected');
    die(print_r(mysqli_error($con)));
}

if (!mysqli_select_db($con,'test')){
    echo 'Database not selected';
}
$status="";

if(isset($_POST)) {
    session_start();

    $first = mysqli_real_escape_string($con, $_POST['firstname']);
    $last = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $facebook = mysqli_real_escape_string($con, $_POST['facebook']);
    $skills = mysqli_real_escape_string($con, $_POST['skills']);
    $expectations = mysqli_real_escape_string($con, $_POST['expectations']);
    $class = mysqli_real_escape_string($con, $_POST['class']);

    $sql = ("insert into members (firstname,lastname,email,facebook,skills,expectations,class) values ('$first','$last','$email','$facebook','$skills','$expectations','$class')");
    mysqli_query($con,$sql);
    if($sql)
       $status= "Done";
    else
        $status= "Please try again to register";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title> website OSSEC</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/osseclogo.jpg">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/ossec.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#register">Join us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/ossec.tn/?ref=bookmarks">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
               
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">OSSEC</span> Open Source Software Ensi Club</h1>
                            <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    

    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About us </h2>
                    <p class="p-heading p-large">OSSEC is a club founded in  2012 at national school of computer science( ENSI ).          
                        Our goal is to promote an open source culture among ENSI students which is essentially based on sharing and exchange. We thus aim to ensure a working and development environment that prepares our members for professional life.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>the axes</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Training</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Magazine</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Project</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->
   

    <!-- register -->
                    <div id="register" class="form-1">
                    <div class="wrapper" href="#register" style="background-image: url('images/bg-registration-form-1.jpg');">
                        <div class="inner">
                            <div class="image-holder">
                                <img src="images/registration-form-1.png" alt="">
                            </div>
                            <form method="post" action="" >
                                <h3>Registration Form</h3>
                                <div class="form-group">
                                    <input type="text"  name="firstname"  placeholder="First Name" class="form-control">
                                    <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" name="email" placeholder="Email Address" class="form-control">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" name="facebook" placeholder="Facebook URL" class="form-control">
                                    <i class="zmdi zmdi-facebook"></i>
                                </div>
                                <div class="form-wrapper">
                                    <select name="class" id="" class="form-control">
                                        <option value="" disabled selected>class</option>
                                        <option value="ii1">II1</option>
                                        <option value="ii2">II2</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>

                                </div>
                                <div class="form-wrapper">
                                    <input type="text" name="skills" placeholder="your skills" class="form-control">
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" name="expectations" placeholder="Your expectations" class="form-control">
                                </div>

                                <input class="btn-solid-reg page-scroll" type="submit" value="register">
                                <div class="form-status" >
                                    <?php echo $status; ?>
                                </div>

                            </form>

                        </div>

                    </div>

                    </div>

    <!-- end of register -->

    <!-- Request -->
    <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Login</h2>
                        <p>...</p>
                        <ul class="list-unstyled li-space-lg">
                            </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Request Form -->
                    <form method="post" action="test.php">
                        <div class="form-group">
                            <input type="text" class="form-control-input"  id="username" name="username" >
                            <label class="label-control" for="">user name</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input  class="form-control-input"  type="password" id="password" name="password" >
                            <label class="label-control" for="">password <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span></label>

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="text-center p-t-136">
                                <a class="txt2" href="#"> Create your Account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                        <input class="btn-solid-reg page-scroll"  type="submit" value="login">

                    </form>

                </div>

            </div>

        </div>

    </div>



                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->


    

    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/eya.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Eya Roouissi</strong></p>
                        <p class="job-title">Chairwomen</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/eya.rouissi99">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.linkedin.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/arij.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Arij El Korbi</strong></p>
                        <p class="job-title">Human resources adminstrator</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/arijelkorbi1">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.linkedin.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                            </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/khaled.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Khaled Krichen</strong></p>
                        <p class="job-title">vice-Chairmen</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/klod.krichen">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.linkedin.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/nermine.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Nermine Khaled</strong></p>
                        <p class="job-title">Media Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/nermine.kaled">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.linkedin.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                            </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
 
 <!-- Team Member -->
 <div class="team-member">
    <div class="image-wrapper">
        <img class="img-fluid" src="images/amine.jpg" alt="alternative">
    </div> <!-- end of image wrapper -->
    <p class="p-large"><strong>Med Amine Chargui</strong></p>
    <p class="job-title">Sponsoring Manager</p>
    <span class="social-icons">
        <span class="fa-stack">
            <a href="https://www.facebook.com/med.amine.chargui">
                <i class="fas fa-circle fa-stack-2x facebook"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
        </span>
        <span class="fa-stack">
            <a href="https://www.linkedin.com/">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
        </span>
        </span> <!-- end of social-icons -->
</div> <!-- end of team-member -->
<!-- end of team member -->
 <!-- Team Member -->
 <div class="team-member">
    <div class="image-wrapper">
        <img class="img-fluid" src="images/chaima.jpg" alt="alternative">
    </div> <!-- end of image wrapper -->
    <p class="p-large"><strong>Chaima Hafsi</strong></p>
    <p class="job-title">Design Manager</p>
    <span class="social-icons">
        <span class="fa-stack">
            <a href="https://www.facebook.com/profile.php?id=100009397351124">
                <i class="fas fa-circle fa-stack-2x facebook"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
        </span>
        <span class="fa-stack">
            <a href="https://www.linkedin.com/">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
        </span>
        </span> <!-- end of social-icons -->
</div> <!-- end of team-member -->
<!-- end of team member -->

<!-- Team Member -->
<div class="team-member">
    <div class="image-wrapper">
        <img class="img-fluid" src="images/salem1.jpg" alt="alternative">
    </div> <!-- end of image wrapper -->
    <p class="p-large"><strong>Salem Dhouimir</strong></p>
    <p class="job-title">Training and Project Manager</p>
    <span class="social-icons">
        <span class="fa-stack">
            <a href="https://www.facebook.com/salem.dhouimir">
                <i class="fas fa-circle fa-stack-2x facebook"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
        </span>
        <span class="fa-stack">
            <a href="https://www.linkedin.com/">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
        </span>
        </span> <!-- end of social-icons -->
</div> <!-- end of team-member -->
<!-- end of team member -->
<!-- Team Member -->
<div class="team-member">
    <div class="image-wrapper">
        <img class="img-fluid" src="images/mahrzia.jpg" alt="alternative">
    </div> <!-- end of image wrapper -->
    <p class="p-large"><strong>Mahrzia Jlassi</strong></p>
    <p class="job-title">Training and Project Manager</p>
    <span class="social-icons">
        <span class="fa-stack">
            <a href="https://www.facebook.com/jlassimahrzia?comment_id=Y29tbWVudDozNTMyNzA5MDMwMTQ5MzE4XzM1MzI3ODkzNzM0NzQ2MTc%3D">
                <i class="fas fa-circle fa-stack-2x facebook"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
        </span>
        <span class="fa-stack">
            <a href="https://www.linkedin.com/">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
        </span>
        </span> <!-- end of social-icons -->
</div> <!-- end of team-member -->
<!-- end of team member -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>Campus Universitaire de la Manouba، Manouba 2010</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">ossec@ensi-uma.tn</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.199061317309!2d10.06157721514497!3d36.81374957994574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd2d96d4a9d6c9%3A0xbbe38a2694938acf!2s%C3%89cole%20Nationale%20des%20Sciences%20de%20l&#39;Informatique!5e0!3m2!1sfr!2stn!4v1613768222949!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><allowfullscreen></allowfullscreen>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Official website <a class="turquoise" href="http://ossec.tn/">http://ossec.tn/ </a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/ossec.tn/?ref=bookmarks">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/open_source_software_ensi_club/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/company/5108000/admin/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    	
<!--===============================================================================================-->	

</body>
</html>