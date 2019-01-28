<?php
/**
 * Template Name: Oil Changes
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

					<div class="smallHero oilHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading serviceHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Oil Change Services in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="oilChangeOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									An important part of routine car maintenance is changing the oil regularly. Engine oil helps to lubricate, cool, and clean the internal engine components.
									While some mechanics claim you can go 10,000 miles without changing your oil these days, waiting too long in between oil changes is dangerous for your
									engine. It can allow dirt and old oil to settle in your engine and cause extra friction, creating unnecessary or even dangerous wear on your engine.
								</p>

								<p>
									The best course of action is to check the owner’s manual and follow the manufacturer’s recommendations. Bring your car in on a regular schedule based on
									your manufacturer’s recommendation.
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
