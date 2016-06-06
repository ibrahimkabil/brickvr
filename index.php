<?php
	
   // mobile detection	
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
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


      <title>BrickSimple Virtual Reality</title>
      
      <!-- =========================
         STYLESHEETS      
         ============================== -->
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/jquery.vegas.min.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="assets/icon-fonts/styles.css">
      <link rel="stylesheet" href="css/pixeden-icons.css">
      
      <!-- CUSTOM STYLES -->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/styles.css">
      
      
      <!-- WEBFONT -->
      <!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400' rel='stylesheet' type='text/css'> -->
      
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      
      <!-- JQUERY -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <!-- Favicon -->
      <link rel="icon" type="image/png" href="images/favicon.ico">
      
      <!-- GOOGLE ANALYTICS -->
      <script type="text/javascript">

         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-21680160-1']);
         _gaq.push(['_trackPageview']);

         (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();

      </script>


      <!-- for Facebook -->          
      <meta property="og:title" content="Brick Simple Virtual Reality" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="images/BrickVR-Logo.jpg" />
      <meta property="og:url" content="http://www.brickvr.com" />
      <meta property="og:description" content="BrickVR is the in-house Virtual Reality and Augmented Reality content development unit of BrickSimple. We work both to the benefit of our clients and our marketing/advertising agency partners. BrickVR creates applications and experiences that exploit the unique opportunity of VR/AR to engage people in a whole new way." />

	  <!-- Responsive Slideshow -->
      <script src="slideshow/dist/slippry.min.js"></script>
	  <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="slideshow/demo/demo.css">
      <link rel="stylesheet" href="slideshow/dist/slippry.css">

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
         	font-size:30px !important;
         	line-height: 30px !important;
         }      
    	 
    	 .bullet{
    	 	margin-bottom:15px; 
    	 }
    	 
		<?php } ?>
         
    	body{ /*background-image:url(images/grid-bg.jpg);*/  <?php if ($mobile != 1) { ?>background-size:cover;<?php } ?> background-attachment:fixed; }
     	
     	.header{ padding: 0px !important; }
     	
     	.slideshow-wrapper{ opacity:0; }
     	
     	.sy-pager{ display:none; }
     	
     	nav li{ padding:10px }
     	
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
      
      <script>
      
			$(function() {
				var slideshow = $("#slideshow").slippry({
					 transition: 'fade',
					 useCSS: true,
					 speed: 1000,
					 pause: 3000,
					 auto: true,
					 preload: 'visible',
					 autoHover: false
				});
				
				$(".slideshow-wrapper").animate({'opacity':1});

			});
			
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
         <div class="VRLogo"></div>
         <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container">
               <div class="navbar-header responsive-logo">
                  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!-- <div class="navbar-brand">
                     <a href="http://bricksimple.com/"><img id="logo" src="images/logoCombined-small.png" alt="" style='' ></a>
                  </div> -->
               </div>
               <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                  <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                     <li class='current'>
                        <a href="#home">Home</a>
                     </li>
                     <li>
                        <a href="#about-us">About Us</a>
                     </li>
                     <li>
                        <a href="#experience">Experience</a>
                     </li>
                     <li>
                        <a href="#vr-player">VR Player</a>
                     </li>
                     <li>
                        <a href="#contact">Contact</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- / END TOP BAR -->

         <section id="video" class="video">
            <div class="section-container wow fadeInUp animated animated">
            <div class="wrapper">
               <div id="videoHolder" class="videoContainer">
                  <img class="ratio" src="http://placehold.it/16x9"/>
                  <iframe id="demoreel" src="https://www.youtube.com/embed/vfj0u1pKyxI?rel=0&amp;&enablejsapi=1&controls=0&showinfo=0&loop=1&playlist=vfj0u1pKyxI&autoplay=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>
               </div>
            </div>
            
            </div>
         </section>		
           
      </header>

		
      <!-- / END HOME SECTION  -->
      <section class="about-us wow fadeInUp animated" id="about-us">
         <div class="section-container wow fadeInUp animated animated">
            <h2 class="white-text">About Us</h2>
            <div class="text-container">
               <p>BrickVR is the in-house Virtual Reality and Augmented Reality content development unit of BrickSimple. We work both to the benefit of our clients and our marketing/advertising agency partners. BrickVR creates applications and experiences that exploit the unique opportunity of VR/AR to engage people in a whole new way.</p>
            </div>
         </div>
      </section>

      <section class="experience wow fadeInUp animated" id="experience">
         <div class="section-container">
            <h2 class="">Working Experience</h2><br>
            <div class="text-container">
               <p class="">BrickVR has proven application experience in Pharmaceuticals/Medical Devices/Health Care, Retail, Real Estate, Live Events, Museums, Gaming, Education, and Engineering.</p>
            </div>
            <center>
               <div class="logoContainer">
                  <a class="unity" href='https://www.unity3d.com' target='_blank'></a>   
                  <a class="unreal" href='https://www.unrealengine.com/what-is-unreal-engine-4' target='_blank'></a>
                  <a class="oculus" href='https://www.oculus.com/en-us/' target='_blank'></a>
               </div>
            </center>
            <br>
            <div class="text-container">
               <p class="">We have worked with a wide range of VR platforms from mobile VR devices like Gear VR to room-scale experiences on the HTC Vive. BrickVR has a full stack of in-house talent including 3D artists, animators, and modelers, and game developers with formal education (Digipen, Full Sail). Our BrickVR team has deep proficiences in Unity, Unreal, Windows, Android, iOS experience along with device-native software platforms. From real world 360/3D photography to full-room experiences with navigation, dynamic 3D model driven experiences, particle effects, physics and modern game engine features, our team is able to deliver the full stack of skills necessary to bring these experiences to life.</p>
               <br>
               <p class="">Beyond VR, BrickVR has unparalleled AR experience including Microsoft HoloLens (wave 1 developer), Vuzix iWear, and ODG devices. During the Google Glass era, we established a reputation as one of the best known glassware developers in the world. One of our projects, working artist David Datuna, is the subject of an award-winning documentary being released in Summer, 2016.</p>
            </div>
            <br><br>
         </div>
      </section>
      <section class="slideshow-wrapper wow fadeInUp animated">
         <article class="slideshow-block">
            
         <ul id="slideshow">
            <!-- add additional images by inserting a new <li> -->
            <li><img src="images/screenshots/Sentinel.jpg"></li>
            <li><img src="images/screenshots/Panasonic.png"></li>
            <li><img src="images/screenshots/Porsche.png"></li>
            <li><img src="images/screenshots/NSquared.jpg"></li>
            <li><img src="images/screenshots/Bowling1.png"></li>
            <li><img src="images/screenshots/Dodgeball.png"></li>
            <li><img src="images/screenshots/Porsche1.png"></li>
            <li><img src="images/screenshots/Porsche2.png"></li>
            <li><img src="images/screenshots/TE1.png"></li>
            <li><img src="images/screenshots/TE2.png"></li>
            <li><img src="images/screenshots/Detailer3.png"></li>
         </ul>
         
         </article>
      
      </section>
      <section class="experience vr wow fadeInUp animated" id="vr">
         <div class="section-container">
            <div class="headset-container">
               <center>
                  <a href='https://www.google.com/get/cardboard/' target='_blank'><img width='100%' src='images/google-cardboard.png'></a>       
                  <a href='http://www.samsung.com/global/microsite/gearvr/' target='_blank'><img width='100%' src='images/samsung-gear-vr.png'></a>
                  <a href='https://www.oculus.com/en-us/' target='_blank'><img src='images/oculus_hardware.png' width='100%'></a>
                  <a href='https://www.htcvive.com/us/' target='_blank'><img width='100%' src='images/htc_vive.png'></a>
                  <a href='https://www.microsoft.com/microsoft-hololens' target='_blank'><img width='100%' src='images/hololens.png'></a>
               </center>
            </div>
         </div>
      </section>

      <section id="vr-player" class="vr-player wow fadeInUp animated" style='padding-bottom:60px;'>
         <div class="section-container">
            <h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none;'>BrickSimple White Label <span style="color: #DF0808;">VR Player</span></h2>
            <div class="VRPlayerIMG"></div>
            <div class="text-container">
               <br><p>The BrickVR White Label VR Player&#8482; allows marketing/advertising agencies and brands to manage and distribute privately-branded virtual reality video experiences. Using our player, you fully control the integrity your brand and capture unique analytics. Our player allows you to provide your clients and customers within your own private experience instead of directing them to a third party player. Please <a href="#contact">contact us</a> for details.</p>
            </div>
         </div>
      </section>
         <!-- =========================
         FOOTER             
         ============================== -->
      <footer id="contact" class="wow fadeInUp animated" style='position:relative; z-index:500;'>
      <?php if ($mobile == 1) { ?>
         <div class="container mobile">
         <div class="section-header">
               <!-- SECTION TITLE -->
               <h2 style='font-weight:500; font-size:50px; text-transform: none;'>Contact Us</h2>
            </div>
         <center>
            <div class="row contact">
              <div class="column"><div class="caption">Give us a call</div><a id="call-us" href="tel:+2152491940">215.249.1940</a></div>
              <div class="column"><div class="caption">Work with us</div><a>projects@bricksimple.com</a></div>
              <div class="column"><div class="caption">Work for us</div><a>jobs@bricksimple.com</a></div>
            </div>
            <div id="address-wrapper" class="row contact">
              <div class="column"><div class="caption">East Coast</div><a id="east-link" href="https://www.google.com/maps/place/Brick+Simple+LLC/@40.3093762,-75.1305716,17z/data=!3m1!4b1!4m2!3m1!1s0x89c6a822130829e9:0x7cc801f0ab27eb97" target="_blank">BrickSimple<br> 22 S Main St Suite 225<br> Doylestown, PA 18901</a></div>
              <div class="column"><div class="caption">West Coast</div><a id="west-link" href="https://www.google.com/maps/place/Innovation+Hangar/@37.8037879,-122.4488872,17z/data=!3m1!4b1!4m2!3m1!1s0x808586d4e40e90f1:0xa182534413cb67e4" target="_blank">BrickSimple<br> The Innovation Hangar<br> 3601 Lyon Street<br> San Francisco, CA 94123</a></div>
            </div>
            <div class="row footer">
              <div id="copyright" class="nine columns u-pull-right">Copyright © 2016 BrickSimple LLC. All Rights Reserved</div>
            </div>
            <center>
         </div>
      <?php } else { ?>
         <div class="container">
            <div class="section-header">
               <!-- SECTION TITLE -->
               <h2 style='font-weight:500; font-size:50px; text-transform: none;'>Contact Us</h2>
            </div>
            <div class="row contact">
              <div class="one-third column"><div class="caption">Give us a call</div><a id="call-us" href="tel:+2152491940">215.249.1940</a></div>
              <div class="one-third column"><div class="caption">Work with us</div><a>projects@bricksimple.com</a></div>
              <div class="one-third column"><div class="caption">Work for us</div><a>jobs@bricksimple.com</a></div>
            </div>
            <div id="address-wrapper" class="row contact">
              <div class="one-half column"><div class="caption">East Coast</div><a id="east-link" href="https://www.google.com/maps/place/Brick+Simple+LLC/@40.3093762,-75.1305716,17z/data=!3m1!4b1!4m2!3m1!1s0x89c6a822130829e9:0x7cc801f0ab27eb97" target="_blank">BrickSimple<br> 22 S Main St Suite 225<br> Doylestown, PA 18901</a></div>
              <div class="one-half column"><div class="caption">West Coast</div><a id="west-link" href="https://www.google.com/maps/place/Innovation+Hangar/@37.8037879,-122.4488872,17z/data=!3m1!4b1!4m2!3m1!1s0x808586d4e40e90f1:0xa182534413cb67e4" target="_blank">BrickSimple<br> The Innovation Hangar<br> 3601 Lyon Street<br> San Francisco, CA 94123</a></div>
            </div>
            <div class="row footer">
              <div id="copyright" class="nine columns u-pull-right">Copyright © 2016 BrickSimple LLC. All Rights Reserved</div>
            </div>
         </div>
      <? } ?>
         <!-- / END CONTAINER -->
      </footer>
      <!-- / END FOOOTER  -->
      <!-- SCRIPTS -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/jquery.nav.js"></script>
      <script src="js/jquery.knob.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <!-- <script src="js/smoothscroll.js"></script> -->
      <script src="js/jquery.vegas.min.js"></script>
      <script src="js/zerif.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
   </body>
</html>