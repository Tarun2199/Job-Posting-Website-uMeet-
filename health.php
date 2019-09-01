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
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="css/css/footer.css">
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
              <li class="nav-item"><a class="nav-link" href="login.html">Work with Us</a></li>


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
          if(isset($_GET['location'],$_GET['fsalary']))
            {  
               $location=$_GET['location'];
               $salary=$_GET['fsalary'];
               $query = "select * from `job` where sector='Healthcare' and `location`='$location' and (salary<='$salary')";
            }
         elseif(isset($_GET['location']))
            {
               $location=$_GET['location'];
               $query = "select * from `job` where sector='Healthcare' and `location`='$location'";
            }
         elseif(isset($_GET['fsalary']))
            {
               $salary=$_GET['fsalary'];
               $query = "select * from `job` where sector='Healthcare' and `salary`<='$salary'";
            }
         else
         {  
            $query = "select * from `job` where sector='Healthcare'";
         }
          $run  = mysqli_query($conn,$query);
          $num_row=mysqli_num_rows($run);
      ?>
      <section class="p-3">
         <div >
            <div>
               <div class="jsrp_base">
                  <div class="searchhead">
                     <div class="tophead">
                        <div class="jsrpCount">
                           <div class="num_key">
                              <h1>Pharma, healthcare & lifesciences Jobs</h1>
                           </div>
                        </div>
                        <div class="keywords"><em><strong>Industry:</strong>Pharma, healthcare & lifesciences</em>
                        </div>
                     </div>
                  </div>
                  <div class="search_Filter">
                     <form action="industry.php" method="get">
                        <div id="id_floater" class="floatleft">
                           <ul class="filters" id="id_filters">
                              <li class="main"><strong>Refine by</strong></li>
                              <li class="cls_filter_p" id="id_filter_salary">
                                 Salary<i class="cls_filter_count"></i>
                                 <div class="submenu">
                                    <span class="arrowup"></span>
                                    <ul class="cls_filter_jFSal">
                                       <li title="up to 2 Lakh"><input aria-label="up to 2 Lakh" type="checkbox" name="fsalary" class="check1_new floatleft cls_facets_checkbox" value="200000"><em>up to 2 Lakh <b>(5,268)</b></em></li>
                                       <li title="3 To 5 Lakh"><input aria-label="3 To 5 Lakh" type="checkbox" name="fsalary" class="check1_new floatleft cls_facets_checkbox" value="500000"><em>3 To 5 Lakh <b>(19,017)</b></em></li>
                                       <li title="6 To 8 Lakh"><input aria-label="6 To 8 Lakh" type="checkbox" name="fsalary" class="check1_new floatleft cls_facets_checkbox" value="800000"><em>6 To 8 Lakh <b>(21,830)</b></em></li>
                                       <li title="9 To 12 Lakh"><input aria-label="9 To 12 Lakh" type="checkbox" name="fsalary" class="check1_new floatleft cls_facets_checkbox" value="1200000"><em>9 To 12 Lakh <b>(16,925)</b></em></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="cls_filter_p" id="id_filter_location">
                                 Location<i class="cls_filter_count"></i>
                                 <div class="submenu location">
                                    <span class="arrowup"></span>
                                    <ul class="cls_filter_jFLoc">
                                       <li title="Bangalore"><input aria-label="Bangalore" type="checkbox" name="location" class="check1_new floatleft cls_facets_checkbox" value="Bangalore"><em>Bangalore <b></b></em></li>
                                       <li title="Delhi"><input aria-label="Delhi" type="checkbox" name="location" class="check1_new floatleft cls_facets_checkbox" value="Delhi"><em>Delhi <b></b></em></li>
                                       <li title="Noida"><input aria-label="Noida" type="checkbox" name="location" class="check1_new floatleft cls_facets_checkbox" value="Noida"><em>Noida <b></b></em></li>
                                       <li title="Gurgaon"><input aria-label="Gurgaon" type="checkbox" name="location" class="check1_new floatleft cls_facets_checkbox" value="Gurgaon"><em>Gurgaon <b></b></em></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="cls_filter_p"><input class="btn btn-danger" type="submit" name="submit" value="Submit"></li>
                           </ul>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- end of search head -->
               <div class="sort_search">
                  <div class="chkboxlen txmyjob cls_jobLists cls_noresult" itemscope="" itemtype="http://schema.org/ItemList">
                     <meta itemprop="numberOfItems" content="20">
                     <ul id="id_results">
                        <?php 

                        for ($i=0; $i <$num_row ; $i++) { 
                        $data = mysqli_fetch_array($run); 

                        ?>
                        <li class="search_listing cls_jobsnippet">
                           <ul>
                              <li class="typeofjob">
                                 <ul>
                                    <li class="premium_jobs">Premium</li>
                                 </ul>
                              </li>
                              <li class="search_listingleft search_listingleft_100">
                                 
                                 <a class="cls_searchresult_a acmplogo searchresult_link">
                                    <ul>
                                       <li class="snp cls_jobtitle">
                                          <h3 itemprop="name">
                                             <?php echo $data['jname']?>
                                          </h3>
                                       </li>
                                       <li class="time share_links jobDate" style="display: inline-block;"><?php echo $data['date']?></li>
                                       <li class="snp_cnm cls_cmpname cls_jobcompany">
                                          <?php echo $data['cname']?>
                                       </li>
                                       <li class="snp_yoe_loc jobList-year-loc"><span class="snp_yoe cls_jobexperience">
                                          <?php echo $data['experience']?> Yrs Experience
                                          </span><em class="snp_loc">
                                          Job Location: <?php echo $data['location']?>
                                          </em>
                                       </li>
                                       <li class="srcresult">
                                          <?php echo $data['description']?>
                                       </li>
                                       <li class="srcresult">
                                          Salary: Rs <?php echo $data['salary']?>
                                       </li>
                                    </ul>
                                 </a>
                                 <div class="sk jsrp cls_jobskill"><span>Skills :</span><span><?php echo $data['skills']?></span></div>
                              </li>
                              <li class="apply">
                                 <div class="cls_linkonhover">
                                    <div class="applybuttonparichay padL0"><a href="apply.php?cname=<?php echo $data['cname'];?>">
                                       Apply
                                       </a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <?php } ?>
                        <li>
                        </li>
                        <li></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>
      <footer>
   <div class="ft">
      <div id="footer">
         <div class="footer">
            <div class="footer">
               <ul>
                  <li class="fullwidth"><strong>Job seekers</strong></li>
                  <li><a id="id_browsejob" target="_blank" href="/job-search/"> Browse Jobs</a></li>
                  <li><a id="id_jobsearchfooter" href="/job-search/"> Job Search</a></li>
                  <li><a id="id_registernow" href="/registration/parser/"> Register Now</a></li>
                  <li><a id="id_loginnow" href="/myshine/login/"> Login</a></li>
                  <li><a id="id_createjobalert" href="/job-alerts/create/"> Create Free Job Alert</a></li>
               </ul>
               <ul>
                  <li class="fullwidth"><strong style="margin-top:5px;">Employers</strong></li>
                  <li><a id="id_recruiterindia" target="_blank" href="https://recruiter.shine.com?utm_source=shine&amp;utm_medium=footer&amp;utm_campaign=Candidate"> Recruiter India</a></li>
                  <li><a id="id_postfreejob" target="_blank" href="https://recruiter.shine.com/online-package/personaldetail/?package_id=31&amp;utm_source=shine&amp;utm_medium=footer&amp;utm_campaign=Candidate"> Post Jobs</a></li>
                  <li><a id="id_accessdatabase" target="_blank" href="https://recruiter.shine.com/online-package/?utm_source=shine&amp;utm_medium=footer&amp;utm_campaign=Candidate">Access Database</a></li>
                  <h1 style="color:#ffff;margin-left: 3%;">Powerd By Kinetic It Solution</h1>
               </ul>
            </div>
         </div>
         <div class="banner_728"></div>
      </div>
      <div class="clear1 clearfont">&nbsp;</div>
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
      <script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="81fc68fe3459c1b97d9359f9-|49" defer=""></script>
  </body>
</html>