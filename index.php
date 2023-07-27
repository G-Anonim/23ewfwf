<!--
=========================================================
* Might Hosting v1.0 BETA    -   03.04.2022  /  12:00
=========================================================
 -->

<?php
	include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Dimitrije Došić">
    <meta name="description" content="Treba vam dobro mesto za hostovanje igara? Might Hosting nudi savršena serverska rešenja za sve vaše potrebe za hostovanjem igara.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title><?php echo $lang['title'] ?></title>

    <meta rel="canonical" href="https://might-cloud.com/">
    <meta property="og:image" content="https://i.imgur.com/lcGqUVE.png">
    <meta name="keywords" content="game, hosting, voice, ts3, cs, counter-strike, minecraft, tf2, csgo, Samp, gaming, server">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="NOODP">
    <meta name="rating" content="adult">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Might Hosting :: Početna">
    <meta property="og:url" content="https://might-cloud.com/">
    <meta property="og:description" content="Treba vam dobro mesto za hostovanje igara? Might Hosting nudi savršena serverska rešenja za sve vaše potrebe za hostovanjem igara.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicona/favicona.png" />
    <link rel="apple-touch-icon" href="assets/favicona/favicona.png">

    <!-- CSS Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- CSS File -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mh_style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/fonts/icon-fonts/remixicon/remixicon.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->


	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v13.0" nonce="8M1YSZi8"></script>

  <script type="text/javascript" src="assets/js/jquery-2.js"></script>

  </head>
<body>

	<!-- ***** Corsor Start ***** -->
	<svg id="cursor" width="30" height="30">
			  <defs>
			    <linearGradient id="gradient" x1="0" y1="0" x2="1" y2="1">
			      <stop offset="0%" stop-color="#fff"></stop>
			      <stop offset="100%" stop-color="#00F4FF"></stop>
			    </linearGradient>
			  </defs>
		  <circle r="13" cx="15" cy="15" fill="none"></circle>
		  <line x1="0" y1="0" x2="30" y2="30"></line>
		  <line x1="0" y1="30" x2="30" y2="0"></line>
	</svg>

	  <!-- ***** Preloader Start ***** -->
	  <div id="js-preloader" class="js-preloader">
	    <div class="preloader-inner">
	      <span class="dot"></span>
	      <div class="dots">
	        <span></span>
	        <span></span>
	        <span></span>
	      </div>
	    </div>
	  </div>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="ri-mail-send-line d-flex align-items-center"><a href="mailto:support@might-cloud.com">support@might-cloud.com</a></i>
        <i class="ri-facebook-circle-line d-flex align-items-center ms-4"><span><a href="https://www.facebook.com/mightcloud" target="_blank">facebook/mightcloud</a></span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <span style="padding: 2px;margin: 2px;"><i class="ri-notification-2-fill"></i> <marquee width="140px" direction="left" height="18px"><?php echo file_get_contents('./novosti.txt'); ?></marquee></span>
      </div>
    </div>
  </section>

	  <!-- ***** Header Area Start ***** -->
	  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
	    <div class="container">
	      <div class="row">
	        <div class="col-12">
	          <nav class="main-nav">

	            <a href="index.html" class="logo">
	              <img src="assets/images/logo.png" alt="Might Hosting Logo" style="width: 80px">
	            </a>

	            <ul class="nav">
	              <li class="scroll-to-section"><a href="#top"><?php echo $lang['pocetna'] ?></a></li>
	              <li class="scroll-to-section"><a href="#onama"><?php echo $lang['onama'] ?></a></li>
	              <li class="scroll-to-section"><a href="#igre"><?php echo $lang['igre'] ?></a></li>
                <li class="scroll-to-section"><a href="#naruci"><?php echo $lang['naruci'] ?></a></li>
	              <li class="scroll-to-section"><a href="#reseller"><?php echo $lang['reseller'] ?></a></li>
                <li><a id="modal_trigger" href="#modal"><?php echo $lang['kontakt'] ?></a></li>
	              <li><div class="gradient-button"><a href="http://panel.might-cloud.com/" target="_blank"><i class="ri-settings-line"></i> <?php echo $lang['gp'] ?></a></div></li> 
	            </ul>        
	            <a class='menu-trigger'>
	                <span>Menu</span>
	            </a>

	          </nav>
	        </div>
	      </div>
	    </div>
	  </header>

  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title"><i class="fa fa-shopping-bag"></i> <?php echo $lang['kontakt_nas'] ?></span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        
        <div class="social_login text-center">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title"><?php echo $lang['fb_kontakt'] ?></span>

                </a>
            </div>



            <div class="action_btns">

                <div class="one_all text-center"><a href="#" id="register_form" class="btn_modali"> <?php echo $lang['poruka_naslov'] ?></a></div>
            </div>
        </div>


     
       <div class="container-fluid">
      <div class="row">
     <div class="col-lg-12">

        <div class="user_register">
        <form action="/contact_form.php" name="contactForm" id="contactForm" method="post">
      
          <div class="row">

            <div class="col-sm-6 form-group mt-2">
              <span><i class="ri-user-line"></i></span>
              <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang['n_ime'] ?>">
            </div>

              <div class="col-md-6 form-group mt-2">
                  <span><i class="ri-edit-2-fill"></i></span>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $lang['sub'] ?>" >
              </div>

   

               <div class="col-md-12 form-group mt-2">
                    <span><i class="ri-at-line"></i></span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang['n_email'] ?>">
              </div>
           
              <div class="col-md-12 form-group mt-2">
                 <span><i class="ri-font-size"></i></span>
                 <textarea class="form-control" name="message" id="message" rows="4" placeholder="<?php echo $lang['poruka'] ?>"></textarea>
            </div>

          </div>

          <div class="form-group text-center mt-2">
            <input type="submit" name="send" value="&#10148; <?php echo $lang['salji_poruku'] ?>" class="btn_kon">        
          </div>


            </form>
        </div>
      </div>
    </div>
  </div>

    </section>
</div> 





  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">

            <div class="col-lg-6">
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 class="text-white">Might Hosting<br>Game & Voice</h2>
                    <p class="text-white"><?php echo $lang['opis'] ?></p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#onama"><?php echo $lang['opis_button'] ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="onama" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><?php echo $lang['onama_naslov'] ?></h4>
            <img src="assets/images/heading-line-dec2.png" alt="">
            <h6 class="text-white" style="font-weight: 300;background-color: #22252a;padding: 10px;border-radius: 10px;border: 1px solid rgba(78, 98, 125, 0.2);box-shadow: 0px 0px 15px rgba(0,0,0,0.6);"><?php echo $lang['onama_text1'] ?></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="service-item fourth-service">
            <center><div class="icon"></div></center>
            <h4 class="text-white"><?php echo $lang['servis1'] ?></h4>
            <p><?php echo $lang['servis1_o'] ?></p>

          </div>
        </div>
        <div class="col-lg-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
          <div class="service-item third-service">
            <center><div class="icon"></div></center>
            <h4 class="text-white"><?php echo $lang['servis2'] ?></h4>
            <p><?php echo $lang['servis2_o'] ?></p>

          </div>
        </div>
        <div class="col-lg-3 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
          <div class="service-item second-service">
            <center><div class="icon"></div></center>
            <h4 class="text-white"><?php echo $lang['servis3'] ?></h4>
            <p><?php echo $lang['servis3_o'] ?></p>

          </div>
        </div>
        <div class="col-lg-3 wow fadeInUp" data-wow-duration="4s" data-wow-delay="0.5s">
          <div class="service-item first-service">
            <center><div class="icon"></div></center>
            <h4 class="text-white"><?php echo $lang['servis4'] ?></h4>
            <p><?php echo $lang['servis4_o'] ?></p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="igre" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading pb-2 mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><?php echo $lang['server_ponuda'] ?></h4>
            <img src="assets/images/heading-line-dec2.png" alt="">
          </div>
        </div>

		<div class="contenedorCards">

		<div class="col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" style="background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://i.imgur.com/bASQoQe.jpg);background-size: cover; ">
		      </div>

		      <div class="imgProd" style="background-image: url(https://esports.as.com/2019/11/19/counter-strike--global-offensive/Squadron-Officer-SAS_1301879814_303697_1024x1815.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">Counter-Strike Global Offensive</p>
		        <div class="actions">
              <!--<div class="preciosGrupo">
           <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
              </div>-->
		          <div class="icono action aFavs">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
		          <a href="#naruci"><div class="icono action alCarrito">
		            <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
		            <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
		              <title><?php echo $lang['naruci_text2'] ?></title>
		              <path d="M2 6h10l10 40h32l8-24H16"></path>
		              <circle cx="23" cy="54" r="4"></circle>
		              <circle cx="49" cy="54" r="4"></circle>
		            </svg>
		          </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" 
		      style="background-color: #1d1d1d;background-image:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://i.pinimg.com/originals/c6/96/53/c6965392035bee19563ef1112a820cae.png);background-size: cover;">
		      </div>

		      <div class="imgProd" style="background-image: url(assets/images/cc.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">Grand Thef Auto SA:MP</p>
		        <div class="actions">
              <!--<div class="preciosGrupo">
           <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
              </div>-->
		          <div class="icono action aFavs">
			          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
              <a href="#naruci"><div class="icono action alCarrito">
                <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
                <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
              </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" style="background-color: #153a82;background-image:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://c4.wallpaperflare.com/wallpaper/680/435/695/fire-half-life-fire-art-wallpaper-preview.jpg);background-size: cover;">
		      </div>

		      <div class="imgProd" style="background-image: url(assets/images/saj.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">Counter-Strike 1.6</p>
		        <div class="actions">
              <!--<div class="preciosGrupo">
           <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
              </div>-->
		          <div class="icono action aFavs">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
              <a href="#naruci"><div class="icono action alCarrito">
                <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
                <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
              </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" style="background-color: #3f4a69;background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://i.imgur.com/xLCgEIl.jpg);background-size: cover;">
		      </div>

		      <div class="imgProd" style="background-image: url(https://icons.iconarchive.com/icons/blackvariant/button-ui-requests-10/512/TeamSpeak-icon.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">TeamSpeak3</p>
		        <div class="actions">
	             <!--<div class="preciosGrupo">
           <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
              </div>-->
		          <div class="icono action aFavs">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
              <a href="#naruci"><div class="icono action alCarrito">
                <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
                <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
              </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" style="background-color: #2bd98e;background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://cdn.wallpapersafari.com/78/13/1C3ELq.jpg);background-size: cover;">
		      </div>

		      <div class="imgProd" style="background-image: url(https://www.pngall.com/wp-content/uploads/2016/03/Minecraft-Character-PNG.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">Minecraft</p>
		        <div class="actions">
              <!--<div class="preciosGrupo">
           <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
              </div>-->
		          <div class="icono action aFavs">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
              <a href="#naruci"><div class="icono action alCarrito">
                <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
                <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
              </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
		  <div class="card">
		    <div class="wrapper">

		      <div class="colorProd" style="background-color: #451713;background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(https://c4.wallpaperflare.com/wallpaper/525/748/49/team-fortress-2-wallpaper-preview.jpg);background-size: cover;">
		      </div>

		      <div class="imgProd" style="background-image: url(https://www.pngkit.com/png/full/8-86569_soldier-team-fortress-2-soldier.png);"></div>
		      <div class="infoProd">
		        <p class="nombreProd">Team Fortress 2</p>
		        <div class="actions">
		          <!--<div class="preciosGrupo">
		       <h5><a style="color: #fff;"  href="#naruci"> <?php echo $lang['naruci_button_text'] ?></a></h5>
		          </div>-->
		          <div class="icono action aFavs">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/rs.svg" alt="Serbia" style="border-radius: 50px;width: 40px;margin-bottom: 2px;">
		          	<img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="Germany" style="border-radius: 50px;width: 40px;">
		          </div>
              <a href="#naruci"><div class="icono action alCarrito">
                <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
                <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                  <title><?php echo $lang['naruci_text2'] ?></title>
                  <path d="M2 6h10l10 40h32l8-24H16"></path>
                  <circle cx="23" cy="54" r="4"></circle>
                  <circle cx="49" cy="54" r="4"></circle>
                </svg>
              </div></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		</div>
		      </div>
		    </div>
		  </div> 

    <!-- ======= Naruci Section ======= -->
    <section id="naruci" class="contact1 mt-4 pt-4">
      <div class="container">
        <div class="row">

            <div class="section-heading text-center">
              <h4><?php echo $lang['naruci_naslov'] ?></h4>
              <img src="assets/images/heading-line-dec2.png" alt="">
            </div>
            <br><br><br>


          <div class="col-lg-12 mt-lg-4">
            <form action="/order_form.php" method="post">
              
              <div class="row">

                <div class="col-md-6">

                    <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang['n_ime'] ?>">
                </div>

              <div class="col-md-6 mt-3 mt-md-0">

                  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang['n_email'] ?>">
              </div>

               <div class="col-md-6 mt-3">

                    <input type="text" class="form-control" name="drzava" id="drzava" placeholder="<?php echo $lang['n_drzava'] ?>">
              </div>
           
              <div class="col-md-6 mt-3">
                        <select class="form-control" name="igra" id="igra">
                            <option value="nista" disabled="" selected=""><?php echo $lang['igre_izaberi'] ?></option>
                            <option cps="0.50" max="32" value="csgo">Counter Strike GO</option>
                            <option cps="0.04" max="1000" value="samp">GTA San Andreas MultiPlayer</option>
                            <option cps="0.40" max="32" value="cs16">Counter Strike 1.6</option>
                            <option cps="0.50" max="32" value="tf2">Team Fortress 2</option>
                            <option cps="0.04" max="500" value="mc">Minecraft</option>
                            <option cps="0.04" max="32" value="ts3">TeamSpeak 3</option>
                        </select>
              </div>

              <div class="col-md-6 mt-3">
                        <select class="form-control" name="lokacija" id="lokacija">
                          <option value="nista" disabled="" selected=""><?php echo $lang['server_lokacija'] ?></option>
                            <option value="germany">Germany</option>
                            <option value="serbia">Serbia (20% <?php echo $lang['doplata'] ?>)</option>
                        </select>
              </div>
              <div class="col-md-6 mt-3">
                        <select class="form-control" name="period" id="period" >
                          <option value="nista" disabled="" selected=""><?php echo $lang['meseci'] ?></option>
                            <option value="1">1 <?php echo $lang['mesec'] ?></option>
                            <option value="2">2 <?php echo $lang['mesec'] ?> (2%) <?php echo $lang['popust'] ?></option>
                            <option value="3">3 <?php echo $lang['mesec'] ?> (5%) <?php echo $lang['popust'] ?></option>
                            <option value="6">6 <?php echo $lang['mesec'] ?> (10%) <?php echo $lang['popust'] ?></option>
                            <option value="12">12 <?php echo $lang['mesec'] ?> (15%) <?php echo $lang['popust'] ?></option>
                        </select>
              </div>
            <div class="col-md-6 mt-3">
                          <select class="form-control" name="igraci" id="igraci">
                            <option value="nista" disabled="" selected=""><?php echo $lang['slot'] ?></option>
                          </select>
            </div>
            <div class="col-md-6 mt-3">
                          <select class="form-control" name="uplatapreko" id="uplatapreko">
                            <option value="nista" disabled="" selected=""><?php echo $lang['nacin_uplata'] ?></option>
                              <option value="uplatnica">Bank transfer</option>
                              <option value="paypal">PayPal</option>
                          </select>
            </div>
            <div class="col-md-12 mt-3 text-left">
                        <label for="cena" class="text-white"><span class="icon-price-tags"></span> <?php echo $lang['cenaa'] ?>: <span id='crvena_cijena' class="crvena_cijena" style="font-size: 18px;font-weight: 600;letter-spacing: 1px;color: #fff;background: #4E627D;padding: 5px;border-radius: 10px;">0.00 EUR</span></label>
            </div>

              </div>


          <div class="form-group text-center">
            <input type="submit" name="send" value="&#10148; <?php echo $lang['naruci_button_send'] ?>" class="btn_kon">

          </div>

        </form>
          </div>


        </div>
      </div>
    </section>


		  <div id="lokacija" class="mt-4 pt-4">
		    <div class="container">
		      <div class="row">

		        <div class="text-center col-lg-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
		          <div class="section-heading">
		            <h4><?php echo $lang['lokacija'] ?></h4>
		            <img src="assets/images/heading-line-dec2.png" alt="">
		          </div>
		        </div>

		        <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
		                <div class="map-container"> 
		                    <img src="assets/images/world-map_t.png" alt="Mapa">
		                    <div class="point serbia" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Serbia"></div>
		                    <div class="point germany" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Germany"></div>     
		                </div>
		        </div>

		      </div>
		    </div>
		  </div> 



	  <div id="reseller" class="about-us section">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6 align-self-center">
	          <div class="section-heading">
	            <h4>Might Hosting <em>Reseller</em></h4>
	            <img src="assets/images/heading-line-dec2.png" alt="">
	            <p><?php echo $lang['res_info2'] ?></p>
	          </div>
	          <div class="row">
	            <div class="col-lg-6">
	              <div class="box-item">
	                <h4>8 GB Ram Memory</h4>
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="box-item">
	                <h4>2 CPU Core</h4>
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="box-item">
	                <h4>70 GB HDD Memory</h4>
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="box-item">
	                <h4>ROOT Access</h4>
	              </div>
	            </div>
	            <div class="col-lg-12">
	              <h5 class="text-white"><?php echo $lang['res_info'] ?></h5>
	              <div class="gradient-button">
	                <a href="mailto:support@might-cloud.com?subject=Might Hosting Reseller!" target="_blank"><?php echo $lang['res_buy'] ?></a>
	              </div>
	              <span>*<?php echo $lang['res_prava'] ?></span>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-6">
	          <div class="right-image">
	            <img src="assets/images/cica.png" alt="" style="width: 60%;filter: drop-shadow(0px 0px 2px black);"> 
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>


	  <button class="floating-btn" id="open"><i class="ri-earth-line"></i> <?php echo $lang['lang_b'] ?></button>
		<div class="news-container" id="news">
		    <div class="news-header">
		        <button class="close-btn" id="close">✕</button>
		        <h6><?php echo $lang['lang_opis'] ?></h6>
		    </div>
		    <div class="news-body">
		            <a href="index.php?lang=en"><button class="lang-btn"><img src="https://cdn-icons-png.flaticon.com/512/197/197374.png" style="width: 16px;"> <?php echo $lang['lang_en'] ?></button></a>
		            
		            <a href="index.php?lang=sr"><button class="lang-btn"><img src="https://cdn-icons-png.flaticon.com/512/197/197602.png" style="width: 16px;"> <?php echo $lang['lang_sr'] ?></button></a>
		    </div>
		</div>




  <footer>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4> </h4>
          </div>
        </div>

	<div class="row">
        <div class="col-lg-4">
          <div class="footer-widget">
          	
            <h5><img src="assets/images/mh_long.png" width="80px" style="filter: drop-shadow(2px 2px 4px black);"></h5>
            
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><?php echo $lang['nav'] ?></h4>
            <ul>
              <li><a href="#top"><?php echo $lang['pocetna'] ?></a></li>
              <li><a href="#onama"><?php echo $lang['onama'] ?></a></li>
              <li><a href="#igre"><?php echo $lang['igre'] ?></a></li>
              <li><a href="#naruci"><?php echo $lang['naruci'] ?></a></li>
              <li><a href="#reseller"><?php echo $lang['reseller'] ?></a></li>
              <li><a id="modal_trigger" href="#modal"><?php echo $lang['kontakt'] ?></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="footer-widget">
            <h4>Facebook</h4>

				<div class="fb-page" style="box-shadow: 0 0px 5px 2px black;border:none;outline: none;overflow:hidden;border-radius: 15px;opacity: 0.8;" data-href="https://www.facebook.com/mightcloud" data-tabs="" data-width="400" data-height="70" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mightcloud" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mightcloud">Might Cloud</a></blockquote></div>

          </div>
        </div>

        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright &copy; 2022 All Rights Reserved. Might Hosting 
          <br>Design: <a href="https://www.facebook.com/dosicd/" rel="nofollow" target="_blank"><b>Dimitrije Došić</b></a></p>
          </div>
        </div>

</div>
    </div>

  </footer>

  	
  	<!-- JS Scripts Code -->

  	<!-- Tooltip JS Scripts Code -->
	<!--<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>-->

	<!-- Coursor JS Scripts Code -->
	<script type="text/javascript">
	    const bd = document.body,
	          cur = document.getElementById("cursor");
	    bd.addEventListener("mousemove", function(n) {
	      (cur.style.left = n.clientX + "px"), (cur.style.top = n.clientY + "px");
	    });
	</script>

	<!-- Shop Card JS Scripts Code -->
  	<script type="text/javascript">
  	//Producto a favoritos
		$('.card .aFavs').click(function(){
		  $(this).parents('.card').toggleClass('esFav');
		})
		//Producto al carrito
		$('.card .alCarrito').click(function(){
		  $(this).parents('.card').toggleClass('enCarrito');
		})
  	</script>

  	<!-- Lang Box JS Scripts Code -->
	<script type="text/javascript">
		const openBtn = document.getElementById('open');
		const closeBtn = document.getElementById('close');
		const newsContainer = document.getElementById('news');

		setTimeout(showPopup, 0); // 5000 - 1 minut

		openBtn.addEventListener('click', () => {
		showPopup();
		});

		closeBtn.addEventListener('click', () => {
		hidePopup();
		});

		function showPopup() {
		newsContainer.classList.add('show');
		openBtn.classList.add('hidden');
		}

		function hidePopup() {
		newsContainer.classList.remove('show');
		openBtn.classList.remove('hidden');
		}
	</script>

  <!-- JS Scripts File -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>