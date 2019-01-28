<?php
/**
 * Template Name: Exhaust
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ardensAutoResponsive
 */
get_header();

?>
<div id="barba-wrapper">

	<div class="barba-container">

		<div class="content-area">

			<main class="site-main">

				<section id="servicesHero">

					<div class="smallHero exhaustHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading serviceHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Exhaust Repair Services in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="exhaustOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									A properly functioning exhaust system not only sounds better, but it’s also safer for you and the environment. Your car’s exhaust system is responsible for
									keeping dangerous fumes out of your car by pushing them out the back.
								</p>

								<p>
									A good exhaust system also improves the functionality of your vehicle and improves your gas mileage. Damaged or leaking exhaust systems can make your vehicle
									work harder than it needs to, creating unnecessary wear and damage to your engine.
								</p>

								<p>
									If you have any rattling or clunking sounds in your exhaust system while idling or driving, or your exhaust is just getting louder than normal, it’s time to have
									some repairs done. Bring your car to Arden’s Automotive Hospital to diagnose your exhaust system issues today.
								</p>

							</div>

						</div>

					</div>

				</section>

				<div class="navWidth smallPaddedSection">

					<div class="col60 centeredContainer">

						<div class="raisedTextBox">

							<div class="textWrap">

								<h3>Client Feedback</h3>

								<p>

									" This a great family owned business that prides itself on honesty and trustworthiness. They really make you feel a part of the family when you're
									there. Prices are always fair and you can trust that the work being done is of high quality. "

									<br><br>

									-Kailey Lemon

								</p>

							</div>

						</div>

					</div>

				</div>

				<section id="servicesWrap">

					<?php get_template_part('includes/services'); ?>

				</section>

				<section class="CTA">

					<?php get_template_part('includes/CTA'); ?>

				</section>

				<section class="map">

					 <?php get_template_part('includes/map'); ?>

				</section>

				<section class="feedback">

					<?php get_template_part('includes/survey'); ?>

				</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
