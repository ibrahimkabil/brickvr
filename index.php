<?php
   $useragent = $_SERVER['HTTP_USER_AGENT'];
   
   if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
   
       $mobile = 1;
   }
   ?>
<!doctype html>
<html itemscope itemtype="http://schema.org/Article">
   <meta itemprop="name" content="Brick Simple Virtual Reality">
   <meta itemprop="description" content="Coming Soon">
   <meta itemprop="image" content="share.png">
   <head>
      <meta charset="UTF-8">
      <meta name="author" content="BrickSimple LLC" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BrickSimple Virtual Reality</title>
      <!-- =========================
         STYLESHEETS      
         ============================== -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/jquery.vegas.min.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="assets/icon-fonts/styles.css">
      <link rel="stylesheet" href="css/pixeden-icons.css">
      <!-- CUSTOM STYLES -->
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/responsive.css">
      <!-- WEBFONT -->
      <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400' rel='stylesheet' type='text/css'>
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!-- JQUERY -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <!-- for Facebook -->          
      <meta property="og:title" content="Brick Simple Virtual Reality" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="share.png" />
      <meta property="og:url" content="http://www.bricksimple.com/vr" />
      <meta property="og:description" content="" />

	  <script src="slideshow/demo/js/hammer.min.js"></script>
      
      <script type="text/javascript" src="slideshow/js/better-simple-slideshow.min.js"></script>
      
      <link rel="stylesheet" type="text/css" href="slideshow/css/simple-slideshow-styles.css" media="screen" />
      
      <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />
      <style>
         <?php if ($mobile == 1) { ?>
         
         .wow {
         	visibility: visible !important;
         	-webkit-animation: none !important;
         	-moz-animation: none !important;
         	-o-animation: none !important;
         	-ms-animation: none !important;
         	animation: none !important;
         }   
         
         h2{
         	font-size:26px !important;
         	line-height: 25px !important;
         }      
    	 
    	.header{ min-height: 445px !important; } 
           
	    <?php }else{ ?>
	   
	    .header{ min-height: 745px !important; } 
	   
		<?php } ?>
         
        body{ background-image:url(images/grid-bg.jpg);  <?php if ($mobile != 1) { ?>background-size:cover;<?php } ?> background-attachment:fixed; }
     
     
      </style>
   </head>
   <body>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id))
             return;
         js = d.createElement(s);
         js.id = id;
         js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=525035370959811";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      
      <!-- =========================
         PRE LOADER       
         ============================== -->
      <div class="preloader" style='display:none;'>
         <div class="status">&nbsp;</div>
      </div>
      <!-- =========================
         HOME SECTION       
         ============================== -->
      <header id="home" class="header">
         <!-- TOP BAR -->
         <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container">
               <div class="navbar-header responsive-logo">
                  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <div class="navbar-brand">
                     <a href="#home"><img src="images/logo.png" alt="" style='margin-top:-20px;' ></a>
                  </div>
               </div>
               <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                  <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                     <li class='current'>
                        <a href="#portfolio">VR Portfolio</a>
                     </li>
                     <li>
                        <a href="#experience">Experience</a>
                     </li>
                     <li>
                        <a href="#contact">Contact</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- / END TOP BAR -->
         <section class="portfolio" id="portfolio" ></section>
         <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
         <div class="container" style='position:relative;z-index:1000; margin-bottom:20px;'>
           <br><br>
            <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-top:60px; line-height:64px; letter-spacing:1px;; text-transform: none; color:#FFFFFF;'></h2>
            <br>
            
              
           
      </header>
      <!-- 
      <div class="vr-slideshow" tabindex="1" autofocus="autofocus">
 <figure>
      <img src="images/screenshots/Porsche.png" width="100%" /><figcaption>"Medium" by <a href="https://www.flickr.com/photos/thomashawk/14586158819/">Thomas Hawk</a>.</figcaption> 
    </figure>
    <figure>
      <img src="images/screenshots/Sentinel.png" width="100%" /><figcaption>"Colorado" by <a href="https://www.flickr.com/photos/stuckincustoms/88370744">Trey Ratcliff</a>.</figcaption> 
    </figure>
    <figure>
      <img src="images/screenshots/NSquared.png" width="100%" /><figcaption>"Early Morning at the Monte Vista Wildlife Refuge, Colorado" by <a href="https://www.flickr.com/photos/davesoldano/8572429635">Dave Soldano</a>.</figcaption> 
    </figure>
    <figure>
      <img src="images/screenshots/SolarCar.png" width="100%" /><figcaption>"Sunrise in Eastern Colorado" by <a href="https://www.flickr.com/photos/35528040@N04/6673031153">Pam Morris</a>.</figcaption> 
    </figure>
</div>
-->
      <!-- / END HOME SECTION  -->
      <section class="experience" id="experience"></section>
      <section style='background:rgba(255,255,255,1); position:relative; z-index:50;height:<?php if ($mobile == 1) { ?>840
         <? } else { ?>850<? } ?>px;'>
      <div class="container" style='width:100%; text-align: left; '>
      <!-- SECTION HEADER -->
      <div class="section-header" style=' text-align: center;'>
      <center>  
      <?php if ($mobile == 1) { ?>
      <center>
      <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-top:60px; line-height:64px; letter-spacing:1px;; text-transform: none;'>Hardware Experience</h2>
      <br>
      <br>
      <center>
      <a href='https://www.oculus.com/en-us/' target='_blank'><img src='images/oculus_hardware.png' width=100% style='float:left'></a>     <br clear='all'>    <br clear='all'>     <br clear='all'>                  
      <a href='http://www.samsung.com/global/microsite/gearvr/' target='_blank'><img width=210 src='images/samsung_gear_vr.jpg' style='float:left; margin-left:40px;'></a><br><br>     
      <a href='https://www.google.com/get/cardboard/' target='_blank'><img width=230 src='images/google_cardboard.jpg' style='float:left; margin-left:25px;'></a>
      </center>
      </div>
      <br clear='all'>
      <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-bottom:20px; margin-top:50px; line-height:64px; letter-spacing:1px;; text-transform: none;'>Software Experience</h2>
      <br clear='all'>
      <div style="font-size:14px; line-height:37px; text-align:left; float:left;"><ul>
      <li>&#8226; Full stack of in-house talent to realize VR experiences. </li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; 3D artists, animators and models</li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Game developers with formal education (Digipen, Full Sail)</li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Software developers with deep Windows and Android experience </li>
      <li>&#8226; Real-world photosphere-driven experiences with navigation</li>
      <li>&#8226; Dynamic 3D model driven experiences </li>
      <li>&#8226; Particle effects, physics and modern game engine features</li>
      </ul>        
      </div>  
      <br clear='all'>
      <br clear='all'>
      <center>
      <a href='https://www.oculus.com/en-us/' target='_blank'><img width=230 src='images/oculus_vr_logo.jpg' style='margin-top:-40px;'></a>
      <a href='https://www.unity3d.com' target='_blank'><img src='images/unity_logo.jpg' width='180' style='margin-top:-40px;'>   </a>
      <br clear='all'> 
      <a href='https://www.unrealengine.com/what-is-unreal-engine-4' target='_blank'><img src='images/unreal.jpg' width='110' style='margin-top:-5px;'></a>
      <br clear='all'>
      <br clear='all'>                                       
      </center>
      <br clear='all'>
      <br>
      </div>
      </div>
      </div>
      </center>
      <?php } else { ?>
      <center>
      <div style='width:1020px'>
      <div class="col-md-12 wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.05s">
      <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-top:60px; line-height:64px; letter-spacing:1px;; text-transform: none;'>Hardware Experience</h2>
      <br>
      <br>
      <div style='margin-left:20px;'>
      <a href='https://www.oculus.com/en-us/' target='_blank'><img src='images/oculus_hardware.png' style='float:left'></a>                        
      <a href='http://www.samsung.com/global/microsite/gearvr/' target='_blank'><img src='images/samsung_gear_vr.jpg' style='float:left; margin-left:30px;'></a>
      <a href='https://www.google.com/get/cardboard/' target='_blank'><img src='images/google_cardboard.jpg' style='float:left; margin-left:30px;'></a>
      </div>
      </div>
      <div class="col-md-12 wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">
      <br clear='all'>
      <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-bottom:20px; margin-top:50px; line-height:64px; letter-spacing:1px;; text-transform: none;'>Software Experience</h2>
      <br clear='all'>
      <div style="font-size:20px; line-height:37px; text-align:left; width:650px; float:left;"><ul>
      <li>&#8226; Full stack of in-house talent to realize VR experiences. </li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; 3D artists, animators and models</li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Game developers with formal education (Digipen, Full Sail)</li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Software developers with deep Windows and Android experience </li>
      <li>&#8226; Real-world photosphere-driven experiences with navigation</li>
      <li>&#8226; Dynamic 3D model driven experiences </li>
      <li>&#8226; Particle effects, physics and modern game engine features</li>
      </ul>        
      </div>  
      <div style='float:right; width:220px;'>
      <a href='https://www.oculus.com/en-us/' target='_blank'><img width=230 src='images/oculus_vr_logo.jpg' style='margin-top:-40px;'></a>
      <a href='https://www.unity3d.com' target='_blank'><img src='images/unity_logo.jpg' width='180' style='margin-top:-40px;'>   </a>
      <br clear='all'>   
      <a href='https://www.unrealengine.com/what-is-unreal-engine-4' target='_blank'><img src='images/unreal.jpg' width='110' style='margin-top:-5px;'></a>
      <br clear='all'><br clear='all'>                                       
      </div><br clear='all'><br>
      </div>
      </div>
      </div>
      </center>
      <br>
      <? } ?>
      </center>
      </div>
      </section>
      <section class="contact-us" id="contact" style='background:rgba(0,0,0,.8); position:relative; z-index:50;'>
         <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
               <!-- SECTION TITLE -->
               <h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none;'>Contact Us</h2>
            </div>
            <!-- / END SECTION HEADER -->
            <!-- CONTACT FORM-->
            <div class="row" style='margin-top:-40px;'>
               <?php
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  
                      $headers = "From: noreply@bricksimple.com\r\n";
                      $headers .= "Reply-To: noreply@bricksimple.com \r\n";
                      $headers .= "MIME-Version: 1.0\r\n";
                      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                  
                      // send e-mail
                      mail('ibrahimkabil09@gmail.com', 'Message from BrickSimple.com', '<b>Name:</b> ' . $_POST['name'] . '<br><br><b>E-mail:</b>  ' . $_POST['email'] . '<br><br><b>Company:</b> ' . $_POST['company'] . '<br><br><b>Message:</b> ' . $_POST['message'], $headers);
                  
                      echo '<span style="font-size:28px; color:#FFFFFF;">Thank You!  Your message has been sent successfully.</span>';
                  } else {
                      ?>
               <form role="form" name='contact_form' class="contact-form" id="contact-form" method='POST' action='?message=1#contact'>
                  <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                     <div class="col-lg-4 col-sm-4">
                        <input type="text" name="name" placeholder="Name" class="form-control input-box" id="name">
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <input type="email" name="email" placeholder="E-mail" class="form-control input-box" id="email">
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <input type="text" name="company" placeholder="Company" class="form-control input-box" id="company">
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <textarea name="message" class="form-control textarea-box" placeholder="Message" id="message"></textarea>
                     </div>
                  </div>
                  <!-- IF MAIL SENT SUCCESSFULLY -->
                  <h4 class="success pull-left white-text">
                     Your message has been sent successfully.
                  </h4>
                  <!-- IF MAIL SENDING UNSUCCESSFULL -->
                  <h4 class="error pull-left white-text">
                     E-mail must be valid and message must be longer than 1 character.
                  </h4>
                  <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" type="submit" onclick='document.contact_form.submit();'>Send Message</button>
               </form>
               <?php } ?>
            </div>
            <!-- / END CONTACT FORM-->
         </div>
         <!-- / END CONTAINER -->
      </section>
      <!-- / END CONTACT US SECTION-->
      <!-- =========================
         FOOTER             
         ============================== -->
      <footer style='position:relative; z-index:500; background-color:#000000;'>
         <div class="container">
            <!-- COMPANY ADDRESS-->
            <div class="col-md-4 company-details">
               <div class="icon-top red-text">
                  <i class="icon-fontawesome-webfont-302"></i>
               </div>
               3601 Lyon Street<br>
               San Francisco, CA 94123
            </div>
            <!-- COMPANY EMAIL-->
            <div class="col-md-4 company-details">
               <div class="icon-top green-text">
                  <i class="icon-fontawesome-webfont-329"></i>
               </div>
               <a href='mailto:det@bricksimple.com' style='color:#939393;'>
                  E-mail Us
            </div>
            <div class="col-lg-3 col-sm-6 copyright">
            <ul class="social" style='margin-top:10px;'>
            <i><div style='margin-left:45px; margin-right:50px; width:30px; float:left;'><div  class="fb-share-button" data-href="http://www.bricksimple.com/" data-layout="button_count"></div></div></i>
            <i><div style='margin-top:5px; width:100px; float:left; margin-left:10px; margin-bottom:8px;'>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bricksimple.com" data-text="Brick Simple Virtual Reality" data-via="bricksimple">Tweet</a></div>
            <script>!function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
               if (!d.getElementById(id)) {
                   js = d.createElement(s);
                   js.id = id;
                   js.src = p + '://platform.twitter.com/widgets.js';
                   fjs.parentNode.insertBefore(js, fjs);
               }
               }(document, 'script', 'twitter-wjs');
            </script></i>
            <i><!-- Place this tag in your head or just before your close body tag. -->
            <!-- Place this tag where you want the +1 button to render. -->
            <br clear='all'><div style='margin-left:30px;'><div  class="g-plusone" data-size="medium" data-href="http://bricksimple.com"></div></div></i>
            </ul>
            </div>
         </div>
         <!-- / END CONTAINER -->
      </footer>
      <!-- / END FOOOTER  -->
      <!-- SCRIPTS -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/jquery.nav.js"></script>
      <script src="js/jquery.knob.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/jquery.vegas.min.js"></script>
      <script src="js/zerif.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
   </body>
</html>