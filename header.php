<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<?php // Google Chrome Frame for IE ?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<?php ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="google-site-verification" content="" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // Put you url link font here....  ?>
		<!-- Font Google -->
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

		<?php // Insert your css & jss only at function.php ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
		<?php // wordpress head functions ?>

		<?php wp_head(); ?>

		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-4Z18XWDQLJ"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-4Z18XWDQLJ');
		</script>
		<?php // end analytics ?>
	</head>
	
	<body <?php body_class(); ?>>

	<header class="header" role="banner">
		<nav class="navbar navbar-expand-md navbar-light nav-mobile position-absolute w-100">
			<div class="container" id="cont1200px">
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
					<div class="row">
						<div class="col-5 col-sm-12 col-lg-5 pe-0"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/Logo-Rhema-Indonesia-Bg-Black-1.webp" class="logo-header-img"></div>
						<div class="col-6 text-uppercase my-auto d-block d-sm-none d-lg-block"><p class="txt-logo text-dark mb-0"> Rhema<br/>Indonesia</p></div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="nav navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'home'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/">Beranda</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'profil'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/profil">Profil</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'pendaftaran'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/pendaftaran">Pendaftaran</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'alumni'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/alumni">Alumni</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'berita'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/berita">Berita</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'persembahan'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/persembahan">Persembahan</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'kontak'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/hubungi-kami">Hubungi Kami</a></li>
					</ul>
				</div> 
			</div>
		</nav>
		
		<nav class="navbar navbar-expand-md navbar-light nav-mobile fixed-top shadow-lg" id="section-header-top">
			<div class="container" id="cont1200px">
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
					<div class="row">
						<div class="col-5 col-sm-12 col-lg-5 pe-0"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/Logo-Rhema-Indonesia-Bg-Black-1.webp" class="logo-header-img"></div>
						<div class="col-6 text-uppercase my-auto d-block d-sm-none d-lg-block"><p class="txt-logo text-dark mb-0"> Rhema<br/>Indonesia</p></div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="nav navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'home'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/">Beranda</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'profil'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/profil">Profil</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'pendaftaran'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/pendaftaran">Pendaftaran</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'alumni'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/alumni">Alumni</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'berita'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/berita">Berita</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'persembahan'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/persembahan">Persembahan</a></li>
						<li class="nav-item my-auto"><a class="nav-link header-menu <?php echo $args['page'] == 'kontak'? 'active' : '' ?>" href="<?php echo get_site_url(); ?>/hubungi-kami">Hubungi Kami</a></li>
					</ul>
				</div> 
			</div>
		</nav>
	</header>
</div>