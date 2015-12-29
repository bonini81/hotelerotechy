<?php
//if(!isset($codIdiomas)) $codIdiomas = "es";
//require_once('lang/'.$codIdiomas.'/home.php'); 
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="style/images/favicon.ico">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="style/css/style.css" rel="stylesheet">
    <link href="style/css/color/blue.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="style/js/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>



<!-- Start Loading -->

<section class="loading-overlay">
    <div class="Loading-Page">
		<h2 class="loader">Loading...</h2>
    </div>
</section>

 <!-- End Loading  -->

<!-- Start Sidebar  -->

<div class="menu-wrap">
    <nav class="menu">
        <div class="TopSide-bar">
            <div class="Top-Block-Sidebar">
                <h2>Login Area</h2>

            </div>

            <div class="login-controls">
                <div class="input-box">
                    <input type="text" class="txt-box " placeholder="User name">
                </div>
                <div class="input-box">
                    <input type="password" class="txt-box " placeholder="Password">
                </div>
                <div class="main-bg">
                    <input type="submit" class="btn " value="Login">
                </div>
                <div class="check-box">
                    <a href="#">Forgot your Password ?</a>
                </div>
                <div class="Sign-Up">
                    <p>New to our website? <a href="#">Sign up now</a></p>
                </div>
            </div>
        </div>
        <div class="BotSide-bar">
            <div class="Bot-Block-Sidebar">
                <h2>Our Monthly NewsLetter</h2>
            </div>

            <div class="Join-Sidebar">
                <input type="text" class="txt-box " placeholder="Type your Email to Subscribe" required>
                <input class="btn btnjoin" type="submit" value="Join">
            </div>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>


<!-- End Sidebar  -->

<div class="content-wrap">
<div id="home" class="body-wrapper">

<!-- Start Section Header style3 -->

<section class="Header-Style3">
	<div class="TopHeader">
		<div class="container">
			<div class="row">
				 <div class="Contact-h col-md-6">
					<div class="PhoneNamber">
						<p><i class="fa fa-phone"></i>(+593) 995-470312</p>
					</div>
					<div class="Email-Site">
						<p><i class="fa fa-envelope"></i>info@hotelerotech.com</p>
                       
					</div>
				</div>

				<div class="col-md-6">
					<div class="Link-ul">
						<ul class="icons-ul">
                    
							<li><a href="#"><span>eng</span></a></li>
							<li><a href="#"><span>es</span></a></li>
							
						</ul>
					</div>
				 </div>
			 </div>
		</div>
	</div>

	<!-- Start Navbar -->

	<div class="Navbar-Header navbar basic" data-sticky="true">
		<div class="container">
			<div class="row">
				<div class="Logo-Header col-md-4">
					<a class="navbar-logo" href="index.php"></a>
				</div>
				<div class="right-wrapper">
					<div class="responsive-menu">
						<a class="responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='fa fa-bars'></i></a>
					</div>
					<div class="Icons-Search">
						<a href="#"><i class="fa fa-search"></i></a>
					</div>
					<div class="Block-Search">
						<input id="m_search" name="s" type="text" placeholder="Type your search keyword here and hit Enter...">
						<button><i class="fa fa-search"></i></button>
					</div>
				</div>

				<div class="collapse pull-right navbar-collapse">
					<div class="Menu-Header top-menu">
						<ul class="nav navbar-nav">
						  <li>
							<a href="index.php" class="dropdown-toggle js-activated current">Inicio</a>
											  </li>
				
                <li><a href="acerca-nosotros.php">Acerca de Nosotros</a></li>
                
						  <li>
						  <a class="dropdown-toggle js-activated" href="#">Soluciones</a>
							<ul class="dropdown-menu">
							  <li><a href="motor-reservas.php">Motor de Reservas</a></li>
							  <li><a href="channel-manager.php">Channel Manager</a></li>
							  <li><a href="#">Mobile - PMS </a></li>
                               <li><a href="marketing.php">Marketing</a></li>
							</ul>
						  </li>
                          
                          	
                          
                            <li>
						  <a  href="cotizacion.php">Precios</a>
						  </li>
                          
                            <li>
						  <a href="contacto.php">Contacto</a>
						  </li>
                          
					
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- End Navbar -->