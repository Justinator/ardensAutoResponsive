<?php
/**
 * Template Name: Preventative Maintenance
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

					<div class="smallHero maintenanceHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading serviceHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Preventative Maintenance Services in Oshkosh, WI</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="servicesPageContent">

				<section id ="PreventativeOverview">

					<div class="pageWidth flex-container">

						<div class="">

							<div class="blockText">

								<p>
									The best way to avoid expensive repairs to your vehicle is to read the owners manual and follow the recommended scheduled maintenance. This is important because
									it was written by the people that know the vehicle the best. Your vehicle’s manual provides instructions for how often you need to change oil, filters, belts,
									spark plugs, tires and more.
								</p>

								<p>

									Bring your vehicle to Arden’s and keep your vehicle in top shape by performing the following maintenance:

								</p>

								<ul>

									<li>Inspect and replace timing belts (preventing damage to other accessories)</li>
									<li>Inspect and replace serpentine belts (preventing damage to other accessories)</li>
									<li>Check and change oil</li>
									<li>Check and replace the battery</li>
									<li>Check and replace cabin air filters</li>
									<li>Check and replace your engine air filter</li>
									<li>Check and replace spark plugs</li>
									<li>Tire rotation: This ensures even wear on your tires, which can help prevent blowouts and leaking and maintain a smooth ride.</li>
									<li>Tire balancing: Balancing your tires prevents wear, which can significantly improve tire life.</li>

								</ul>

								<p>
									By following your vehicle owner’s manual and having your vehicle inspected and maintained regularly, you can greatly reduce problems and save money in the long
									run. Call Arden’s at <a href="tel:(920)203-3694" class="plainLink">(920) 203-3694</a> to get started with your regular preventative maintenance plan.
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
