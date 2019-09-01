<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
</head>
<body>

  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.jpeg" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="flase" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="myNavbar">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html">Services</a>
              <li class="nav-item"><a class="nav-link" href="contact.html">Careers</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="login.html">Logout</a></li>


</ul>
<!--<ul class="nav-right text-center text-lg-right py-4 py-lg-0">
<li><a href="#">Get Ticket</a></li>
</ul>-->
</div>
</div>
</nav>
</div>
</header>


<?php 
include('db-connect.php');
$u=$_GET['username'];
$query = "select * from `apply` where username='$u'";
$run  = mysqli_query($conn,$query);
$num_row=mysqli_num_rows($run);
$data = mysqli_fetch_array($run); 
?>
<h3 class="text-center">Update Profile</h3>
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Apply For Job</strong>
            </div>
            <div class="card-body card-block">
              <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Full Name</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" hidden="" id="text-input" name="username" value="<?php echo $data['username'];?>" class="form-control">
                    <input type="text" id="text-input" name="name" placeholder="Full Name" value="<?php echo $data['name'];?>" class="form-control">
                    <small class="form-text text-muted">Required Field*</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">College Name</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="cname" placeholder="College Name" value="<?php echo $data['cname'];?>" class="form-control">
                    <small class="form-text text-muted">Required Field</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Contact No.</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="phone" placeholder="Contact Number" value="<?php echo $data['phone'];?>" class="form-control">
                    <small class="form-text text-muted">Required Field</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Skills</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="skills" placeholder="C,C++,PHP,Distributed" value="<?php echo $data['skills'];?>" class="form-control">
                    <small class="form-text text-muted">Required Field</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="email" placeholder="Enter Email" value="<?php echo $data['email'];?>" class="form-control">
                    <small class="help-block form-text">Please enter your email</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Resume Upload</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="resume" value="<?php echo $data['resume'];?>" class="form-control-file">
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                  <input type="reset" class="btn btn-danger btn-sm" value="Reset">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>About</h6>
          <p>
            The world has become so fast paced that people don’t want to stand by reading a page of information to be they would much rather look at a presentation and understand the message.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Navigation Links</h6>
          <div class="row">
            <div class="col">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About US</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Job Seeker</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="col-lg-3  col-md-6 col-sm-6">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="321" height="222" id="gmap_canvas" src="https://maps.google.com/maps?q=405%20Deepshikha%20building%20Rajendra%20place%20Delhi%20110008&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">Pureblack.de - Webseite erstellen lassen</a></div><style>.mapouter{position:relative;text-align:right;height:222px;width:321px;}.gmap_canvas {overflow:hidden;background:none!important;height:222px;width:321px;}</style></div>
      </div>-->
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
          Copyright &copy;All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">KINETIC IT SOLUTIONS</a>
        </p>
        <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-dribbble"></i></a>
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="vendors/jquery/jquery-3.2.1.min.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="js/jquery.ajaxchimp.min.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="js/mail-script.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="js/countdown.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script src="js/main.js" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="81fc68fe3459c1b97d9359f9-text/javascript"></script>
<script type="81fc68fe3459c1b97d9359f9-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="81fc68fe3459c1b97d9359f9-|49" defer=""></script></body>

</body>

<!-- Mirrored from colorlib.com/preview/theme/umeet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 15:29:20 GMT -->
</html>