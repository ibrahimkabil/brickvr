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
      <meta property="og:image" content="images/screenshots/Logo.jpg" />
      <meta property="og:url" content="http://www.brickvr.com" />
      <meta property="og:description" content="BrickVR is the in-house Virtual Reality and Augmented Reality content development unit of BrickSimple. We work both to the benefit of our legacy clients and our marketing/advertising agency partners. Our philosophy is to create experiences and other market-focused content that remain interesting long after the transcendent uniqueness of the VR/AR technology itself has become conventional." />

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
         	line-height: 25px !important;
         }      
    	 
    	 .bullet{
    	 	margin-bottom:15px; 
    	 }
    	 
		<?php } ?>
         
    	body{ /*background-image:url(images/grid-bg.jpg);*/  <?php if ($mobile != 1) { ?>background-size:cover;<?php } ?> background-attachment:fixed; }
     	
     	.header{ padding: 0px !important; }
     	
     	.slideshow-wrapper{ margin-top:100px; opacity:0; }
     	
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
                     <a href="http://bricksimple.com/"><img src="images/logo.png" alt="" style='margin-top:-20px;' ></a>
                  </div>
               </div>
               <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                  <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                     <li class='current'>
                        <a href="#portfolio">Home</a>
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
         <section class="portfolio" id="portfolio" ></section>

       	<section class="slideshow-wrapper">
			<article class="slideshow-block">
				
			<ul id="slideshow">
				<!-- <li><img src="images/screenshots/Logo.jpg"></li> -->
				<li><img src="images/screenshots/Sentinel.jpg"></li>
				<li><img src="images/screenshots/Panasonic.jpg"></li>
				<li><img src="images/screenshots/Porsche.jpg"></li>
				<li><img src="images/screenshots/NSquared.jpg"></li>
			</ul>
			
			</article>
		
		</section>		
           
      </header>

		
      <!-- / END HOME SECTION  -->
      <section class="about-us" id="about-us">
      <div class="wow fadeInUp animated animated">
         <h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none;'>About Us</h2>
         <div class="text-container">
            <p>BrickVR is the in-house Virtual Reality and Augmented Reality content development unit of BrickSimple. We work both to the benefit of our legacy clients and our marketing/advertising agency partners. Our philosophy is to create experiences and other market-focused content that remain interesting long after the  transcendent uniqueness of the VR/AR technology itself has become “conventional.”</p>
            <br>
            <p>Markets where we have demonstrated experience include Pharmaceuticals/Medical Devices/Health Care, Retail, Real Estate, Live Events, Museums, Gaming, Education, Military, and Engineering. Software platforms include Unity, Unreal Engine and Wikitude.</p>
            <br>
            <p>VR hardware platforms range from Google Cardboard and Samsung Gear VR to HTC Vive, Oculus Rift and Sony PSVR. BrickVR has a full stack of in-house talent including 3D artists, animators, and modelers, game developers with formal education (Digipen, Full Sail), and software developers with deep Unity, Unreal, Wikitude, Windows, Android, iOS experience along with device-native software platforms. We are currently working on real-world photosphere and full-room experiences with navigation, dynamic 3D model driven experiences, particle effects, physics and modern game engine features.</p>
            <br>
            <p>AR platforms include Microsoft HoloLens (wave 1 developer), Vuzix iWear, ODG. Were also one of the original Google Glass developers, including a project supporting the renowned artist David Datuna about which an award-winning documentary will be released in Summer, 2016.</p>
            <br>
            <br>
         </div>
      </section>
      <section class="experience" id="experience"></section>
      <section style='background:rgba(255,255,255,1); position:relative; z-index:50;height:inherit'>
      <div class="container" style='width:100%; text-align: left; '>
      <!-- SECTION HEADER -->
      <div class="section-header" style=' text-align: center;'>
      <center>  
      <?php if ($mobile == 1) { ?>
      <center>
         <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-top:60px; line-height:64px; letter-spacing:1px;; text-transform: none;'>Platform Experience</h2>
         <br>
         <br>
         <center>
            <a href='https://www.google.com/get/cardboard/' target='_blank'><img width='100%' src='images/google-cardboard.png' style='float:left;'></a><br clear='all'><br clear='all'><br clear='all'>                  
            <a href='http://www.samsung.com/global/microsite/gearvr/' target='_blank'><img width='100%' src='images/samsung-gear-vr.png' style='float:left;'></a><br clear='all'><br clear='all'><br clear='all'> 
            <a href='https://www.oculus.com/en-us/' target='_blank'><img src='images/oculus_hardware.png' width='100%' style='float:left;'></a><br clear='all'><br clear='all'><br clear='all'>
            <a href='https://www.htcvive.com/us/' target='_blank'><img width='100%' src='images/htc_vive.png' style='float:left;'></a> 
         </center>
      </div>
      <br clear='all'>
      <br clear='all'>
      <div style="font-size:14px; <?php if ($mobile == 1) { ?>margin-left:18px; line-height:24px; font-size: 20px;<? }else{ ?>line-height:37px; font-size: 14px;<? } ?>; text-align:left; float:left;">
         <ul>
            <li class='bullet'>&#8226; Full stack of in-house talent to realize VR experiences. </li>
            <li class='bullet'>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; 3D artists, animators and models</li>
            <li class='bullet'>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Game developers with formal education (Digipen, Full Sail)</li>
            <li class='bullet'>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Software developers with deep Windows, iOS, and Android experience </li>
            <li class='bullet'>&#8226; Real-world photosphere-driven experiences with navigation</li>
            <li class='bullet'>&#8226; Dynamic 3D model driven experiences </li>
            <li class='bullet'>&#8226; Particle effects, physics and modern game engine features</li>
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
         <div style='width:100%'>
            <div class="col-md-12 wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.05s">
               <h2 class="dark-text" style='font-family: Lato;font-size:50px; font-weight:600; margin-top:60px; line-height:64px; letter-spacing:1px; text-transform: none;'>Platform Experience</h2><br><br>
               <div class="headsetContainer">
                  <div class="headsetGroup">
                     <a href='https://www.google.com/get/cardboard/' target='_blank'><img src='images/google-cardboard.png' width=240></a>
                     <a href='http://www.samsung.com/global/microsite/gearvr/' target='_blank'><img src='images/samsung-gear-vr.png' width=240></a>
                  </div>
                  <div class="headsetGroup">
                     <a href='https://www.oculus.com/en-us/' target='_blank'><img src='images/oculus_hardware.png' width=240></a>
                     <a href='https://www.htcvive.com/us/' target='_blank'><img src='images/htc_vive.png' width=240></a> 
                  </div>
               </div>
            </div>
         <div class="col-md-12 wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">
            <br clear='all'>
            <br clear='all'>
            <div class="expList">
               <ul>
                  <li>&#8226; Full stack of in-house talent to realize VR experiences. </li>
                  <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; 3D artists, animators and models</li>
                  <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Game developers with formal education (Digipen, Full Sail)</li>
                  <li>&nbsp;&nbsp;&nbsp;&nbsp;&#9702;&nbsp;&nbsp; Software developers with deep Windows, iOS, and Android experience </li>
                  <li>&#8226; Real-world photosphere-driven experiences with navigation</li>
                  <li>&#8226; Dynamic 3D model driven experiences </li>
                  <li>&#8226; Particle effects, physics and modern game engine features</li>
               </ul>        
            </div>  
            <div class="logoContainer">
               <a href='https://www.oculus.com/en-us/' target='_blank'><img width=230 src='images/oculus_vr_logo.jpg'></a>
               <a href='https://www.unity3d.com' target='_blank'><img src='images/unity_logo.jpg' width='180' style='margin-top:-40px;'>   </a>
               <br clear='all'>   
               <a href='https://www.unrealengine.com/what-is-unreal-engine-4' target='_blank'><img src='images/unreal.jpg' width='110' style='margin-top:-5px;'></a>
               <br clear='all'>
               <br clear='all'>
            </div>
            <br clear='all'><br>
         </div>
      </div>
      </div>
      </center>
      <br>
      <? } ?>
      </center>
      </div>
      </section>

      <section id="vr-player" class="vr-player wow fadeInUp animated">
         <?php if ($mobile == 1) { ?>
            <h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none; padding-bottom: 10px;'>Brick Simple White Label</h2><h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none;'><span style="color: #DF0808;">VR Player</span></h2>
            <img src='images/VR_Player.png' style='width: 100%; margin-bottom: 2em;'>
            <div class="text-container">
               <p>The BrickSimple White Label VR Player&#8482; allows marketing/advertising agencies and brands to manage the process of distributing privately-branded virtual reality videos and experiences and to set up a professional virtual reality channel hosted on a service of your choice. Control your brand and capture unique analytics with your own branded VR experience. No longer will you have to host at YouTube360 or other “free” hosting channels where your content will be shown along with embarrassing or inappropriate advertising from another company. Please <a href="#contact">contact us</a> for details.</p>
            </div>
         <?php } else { ?>
            <h2 class="white-text" style='font-weight:500; font-size:50px; text-transform: none;'>Brick Simple White Label <span style="color: #DF0808;">VR Player</span></h2>
            <div class="VRPlayerIMG"></div>
            <!-- <img src='images/VR_Player.png' style='height: 25em; margin-bottom: 2em;'> -->
            <div class="text-container">
               <p>The BrickSimple White Label VR Player&#8482; allows marketing/advertising agencies and brands to manage the process of distributing privately-branded virtual reality videos and experiences and to set up a professional virtual reality channel hosted on a service of your choice. Control your brand and capture unique analytics with your own branded VR experience. No longer will you have to host at YouTube360 or other “free” hosting channels where your content will be shown along with embarrassing or inappropriate advertising from another company. Please <a href="#contact">contact us</a> for details.</p>
            </div>
         <? } ?>
      </section>
      
      <section class="contact-us" style='display:none; background:rgba(0,0,0,.8); position:relative; z-index:50;'>
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
      <footer id="contact" class="dark-text wow fadeInUp animated" style='position:relative; z-index:500;'>
      <?php if ($mobile == 1) { ?>
         <div class="container mobile">
         <div class="section-header">
               <!-- SECTION TITLE -->
               <h2 class="dark-text" style='font-weight:500; font-size:50px; text-transform: none;'>Contact Us</h2>
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
               <h2 class="dark-text" style='font-weight:500; font-size:50px; text-transform: none;'>Contact Us</h2>
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