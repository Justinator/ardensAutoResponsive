<?php
/**
 * Template Name: Brake Repair
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

					<div class="smallHero brakeHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading serviceHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Brake Repair Services in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="brakeOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									Your brakes are one of the most important safety features of your car. Inspecting your brakes at least twice a year for wear and damage can protect you and
									your passengers. Brake pad problems can usually be identified by squealing brakes. But if you’re hearing grinding metal on metal sound when braking, you’ve
									waited too long.
								</p>

								<p>

									Other signs your brakes need to be replaced:

								</p>

								<ul>

									<li>Your vehicle is pulling to one side when applying the brakes</li>
									<li>Bad vibrations when braking</li>
									<li>Deep grooves or uneven wear in your rotors</li>

								</ul>

								<p>

									At Arden’s, there isn’t a brake repair or replacement service we don’t provide. Our brake services include:

								</p>

								<ul>

									<li>Full brake and caliper repair and replacement</li>
									<li>Brake pad replacement</li>
									<li>Brake line repair and replacement</li>
									<li>Parking brake services and repair</li>

								</ul>

								<p>
									By maintaining your brakes regularly, you can greatly reduce problems and ensure you, your passengers, and others on the road are safe. Call Arden’s
									at <a href="tel:(920)203-3694" class="plainLink">(920) 203-3694</a> to get started with a brake inspection today.
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

									" Got my brakes done on my car today the price was very good and the service was very great, would highly recommend to anyone "

									<br><br>

									-Tyler Honeck

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
