<!DOCTYPE html>
<?php
    include("includes/db.php");
?>
<head>
<title>INSIGHT GROUP</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Style Sheets -->
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo_misc.css">
<link rel="stylesheet" href="css/templatemo_style.css">
<link rel="stylesheet" href="css/styles.css">
<!-- JavaScripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/jquery.singlePageNav.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.lightbox.js"></script>
<script src="js/templatemo_custom.js"></script>
<script src="js/responsiveCarousel.min.js"></script>
</head>
<body>
    <!-- header start -->
<div id="templatemo_home_page">
    <div class="templatemo_topbar">
      <div class="container">
        <div class="row">
          <div class="templatemo_titlewrapper"><img src="images/templatemo_logobg.png" alt="logo background">
            <div class="templatemo_title"><span>INSIGHT GROUP LTD</span></div>
          </div>
          <div class="clear"></div>
          <div class="templatemo_titlewrappersmall">Insight Group</div>
          <nav class="navbar navbar-default templatemo_menu" role="navigation">
            <div class="container-fluid"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only"></span><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div id="top-menu">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a class="menu" href="index.html">Home</a></li>
                    <li><a class="menu" href="services.html">Services</a></li>
                    <li><a class="menu" href="project.html">Projects</a></li>
                    <li><a class="menu" href="team.html">Our Team</a></li>
                    <li><a class="menu" href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
          </nav>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- header end -->
  <div class="clear"></div>
<!-- contact start -->
<div class="templatemo_contactwrapper" id="templatemo_contact_page">
  <div class="container">
    <div class="row">
      <h1 style="padding-top: 20px;">Contact</h1>
    </div>
  </div>
  <div class="templatemo_contactmap">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=300&amp;hl=en&amp;q=kigarama&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebayproxy.net/">pirate bay proxy</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>
  </div>
  <div class="container templatemo_contactmargin">
    <div class="row">
      <div class="col-md-3">
        <div class="templatemo_address_title">Mailing Address:</div>
        kk 782, Kicukiro, Kigarama, Rwampara.
        <div class="clear"></div>
        <div class="templatemo_address_left">Call us:</div>
        <div class="templatemo_address_right">+250 786 096 09<br>
          +250 7889 786 67</div>
        <div class="clear"></div>
        <div class="templatemo_address_left">Hot line:</div>
        <div class="templatemo_address_right">+5000</div>
        <div class="clear"></div>
        <div class="templatemo_address_left">Email us:</div>
        <div class="templatemo_address_right">jcqsdd@gmail.com<br>
          info@insightgroup.com</div>
      </div>
      <form action="contact.php" method="post" enctype="multipart/form-data">
        <div class="col-md-9">
          <div class="col-md-4">
            <input type="text" name="name" class="name" placeholder="Your Name">
          </div>
          <div class="col-md-4">
            <input type="text" name="email" class="email" placeholder="Your Email">
          </div>
          <div class="col-md-4">
            <input type="text" name="subject" class="subject" placeholder="Subject">
          </div>
          <div class="col-md-12">
            <textarea name="message" cols="1" rows="1" class="message" placeholder="Your message... "></textarea>
          </div>
          <div class="col-md-4">
            <input type="submit" name="send" value="Send Message" class="button templatemo_sendbtn">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- contact end -->
<!-- footer start -->
<div class="templatemo_footerwrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">Copyright &copy; 2021 <a href="index.html">Insight Group Ltd</a>
        </div>
      </div>
    </div>
  </div>
  <!-- footer end -->
</body>
</html>
<?php
  if(isset($_POST['send']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sendTo = "insert into contact(name,email,subject,message) values ('$name','$email','$subject','$message')";

    $sendToDb = mysqli_query($con, $sendTo);

    if($sendToDb)
    {
      echo "<script>alert('your message has been recorded successful')</script>";
      echo "<script>window.open('contact.php','_self')</script>";
    }
  }
?>