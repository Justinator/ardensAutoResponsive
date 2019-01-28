<?php
/**
 * Template Name: Tires
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

					<div class="smallHero tireHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading tireHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Tire Service in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="tiresOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									Tires are the single most important safety feature on your car as your tires connect the car to the road. Regular tire inspection, balancing, and rotation will
									extend the life of your tires and help maintain a safe and smooth ride. Regularly inspecting your tires for irregular tread wear can also help detect other
									repairs that may be needed in your suspension or alignment.
								</p>

								<p>
									Regular tire rotation is another form of <a href="/auto-repair-services/preventative-maintenance/" class="plainLink">preventative maintenance</a> and extends the
									life of your tires. Every tire wears differently based on the weight distribution and your driving style. Your owner’s manual will tell you how often you need to
									rotate your tires to ensure even wear.
								</p>

								<p>
									Not sure what condition your tires are in? Bring your car to Arden’s Auto and have a professional tire inspection done today.
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

									" I had a leak in my tire and they were able to get me around my schedule. Customer service was outstanding and I highly recommend them. "

									<br><br>

									-Robin Beyer Drexler

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
