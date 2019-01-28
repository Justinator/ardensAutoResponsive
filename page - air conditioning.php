<?php
/**
 * Template Name: Air Conditioning
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

					<div class="smallHero ACHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading serviceHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Air Conditioning Repair in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="ACOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									Does your air conditioning only blow slightly cooler air compared to just the car’s fan alone? Does your car smell damp or musty when you turn your air on?
									These are just a couple indications that your air conditioning system may be having issues.
								</p>

								<p>
									While it could be as simple as topping off your car’s refrigerant, it’s important to check for leaks, inspect hoses and condenser to make sure everything is
									working together. Here are some of the other points we inspect in your air condition system:
								</p>

								<ul>

									<li>Examine all internal controls and blower</li>
									<li>Radiator coolant operating temperature, hoses, pressure radiator cap and thermostat</li>
									<li>Inspect the compressor belt</li>
									<li>Inspect hoses and seals for leaks or damage</li>
									<li>A cooling system pressure test</li>
									<li>Verify the A/C pressure meets manufacturer specifications</li>
									<li>Measure the interior vent air temperature</li>
									<li>Coolant System Flush</li>

								</ul>

								<p>
									To make sure your vehicle’s air conditioning system is working right, bring it in for a professional inspection or repair. We’ll diagnose any issues
									and get your car blowing cold air and keeping you comfortable again.
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

					<?php get_template_part('Includes/services'); ?>

				</section>

				<section class="CTA">

					<?php get_template_part('Includes/CTA'); ?>

				</section>

				<section class="map">

					 <?php get_template_part('Includes/map'); ?>

				</section>

				<section class="feedback">

					<?php get_template_part('Includes/survey'); ?>

				</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
