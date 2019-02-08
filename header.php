<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ardensAutoResponsive
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="preload" href="/assets/scss/wp-content/themes/ardensAutoResponsiveChild/CSS/formalize.css" as="style" onload="this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/scss/wp-content/themes/ardensAutoResponsiveChild/CSS/formalize.css"></noscript>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<nav role="navigation" aria-label="mobile navigation">

	<div class = "menu">

			<div class = "linkWrap">

				<ul class="linkList">

					<li>

						<a class="menuLink" href = "/auto-repair-services/" role="link" tabindex="-1">Auto Repair Services</a><i class="redIcon fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/projects/" role="link" tabindex="-1">Projects</a><i class=" redIcon fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/about/" role="link" tabindex="-1">About</a><i class=" redIcon fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/promotions/" role="link" tabindex="-1">Promotions</a><i class=" redIcon fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/contact/" role="link" tabindex="-1">Contact</a><i class=" redIcon fas fa-chevron-right"></i>

					</li>

				</ul>

			</div>

			<div class="closeMenuButton fullWidth centeredContainer" aria-label="close mobile menu">

				<div>

					<h4 id="closeMenuTitle">Close Menu</h4>

				</div>

			</div>

	</div>

</nav>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<nav role="navigation" aria-label="desktop sub navigation">

			<div class="secondaryNavigation">

				<div class="navWidth secondaryMenuWrap">

					<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

						<defs>

							<symbol id="icon-location" viewBox="0 0 32 32">

								<title>location</title>

								<path d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"></path>

							</symbol>

						</defs>

					</svg>

					<svg class="icon icon-location"><use xlink:href="#icon-location"></use></svg>

					<a class="secondaryLink" href="https://www.google.com/maps/place/Arden's+Automotive+Hospital+LLC/@44.0111548,-88.5527741,17z/data=!3m1!4b1!4m5!3m4!1s0x8803ebf8a244848f:0xab246929a6800b92!8m2!3d44.0111548!4d-88.5505854" target="_blank">Map</a>

					<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

						<defs>

							<symbol id="icon-phone" viewBox="0 0 32 32">

								<title>phone</title>

								<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>

							</symbol>

						</defs>

					</svg>

					<svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>

					<a class="secondaryLink" href="tel:(920)203-3694">(920) 203-3694</a>

				</div>

			</div>

		</nav>

		<div id="site-navigation" class="main-navigation">

			<nav role="navigation" aria-label="primary navigation">

				<div class="navWidth menuLinkWrap">

						<a href="https://ardensauto.com"><img src="/assets/scss/wp-content/uploads/2019/01/ArdensLogoSmall.png" class="siteLogo" alt="ardens automotive hospital logo link to homepage"></a>

						<ul class="linkList2">

							<li>

								<a class="menuLink" href = "/auto-repair-services/" role="link">Auto Repair Services</a>

							</li>

							<li>

								<a class="menuLink" href = "/projects/" role="link">Projects</a>

							</li>

							<li>

								<a class="menuLink" href = "/about/" role="link">About</a>

							</li>

							<li>

								<a class="menuLink" href = "/promotions/" role="link">Promotions</a>

							</li>

							<li>

								<a class="redButton" href = "/contact/" role="link">Contact</a>

							</li>

						</ul>

						<div class = "menuButtonWrap" aria-label="mobile menu toggle button">

							<div class = "menuTextWrap">

								<span class = "menuText">Menu</span>

								<span class = "menuBars">

									<span></span>

									<span></span>

									<span></span>
								</span>

							</div>

						</div>

				</div>

			</nav>

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
