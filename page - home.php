<?php
/**
 * Template Name: Home
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

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section id="hero">

					<div class="hero shopHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Full-Service Auto Repair Shop, Serving Oshkosh, WI, Since 1959</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id ="ardensIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col50">

							<div class="blockText">

								<h2>About Arden's</h2>

								<p>
									Arden's Automotive Hospital has been a family owned and operated auto repair shop since 1959. At Arden's, you’ll experience our great
									customer service and honest opinion.
								</p>

								<p>
									We know you need to get the job done quickly so you get your car back on the road. But most importantly, you need the job done right.
									At Arden’s, we pride ourselves in taking the extra time to properly diagnose your car's issues. Saving you money and getting you back
									on the road faster.
								</p>

								<a href="/about/"><button class="redButton">Learn More About Arden's</button></a>

							</div>

						</div>

						<div class="col50">

							<img
							srcset="/assets/scss/wp-content/uploads/2019/01/ardensOldTruck-small.jpg 400w,
							 /assets/scss/wp-content/uploads/2019/01/ardensOldTruck-medium.jpg 800w,
							 /assets/scss/wp-content/uploads/2019/01/ardensOldTruck-large.jpg 1200w"

							 class="image" alt="Arden's Auto old classic tow truck">

						</div>

					</div>

				</section>

				<section class="ardensBenefits paddedSection">

					<?php get_template_part('includes/benefits'); ?>

				</section>

				<section id="services">

					<div class="pageWidth">

						<h2 class="centerText">Auto Maintenance Is Hard, Right?</h2>

						<p id="serviceHook">
							Is your car making that weird noise again? Not sure what’s going on or how to figure it out? With experience from oil changes, brakes, and
							tires to troubleshooting and diagnosing engine failures, at Arden’s you’ll find an expert and fair diagnosis and repair for all your
							car’s issues. Does your vehicle need attention right away? Schedule an appointment or call Arden’s today at <a href="tel:(920)203-3694" class="plainLink">(920) 203-3694</a>.
						</p>

					</div>

					<?php get_template_part('includes/services'); ?>

				</section>

				<section class="testimonial">

					<div class="navWidth smallPaddedSection">

						<div class="col60 centeredContainer">

							<div class="raisedTextBox">

								<div class="textWrap">

									<h3>Client Feedback</h3>

									<p>

										" This a great family owned business that prides itself on honesty and trustworthiness. They really make you feel a part of the family when you're there. Prices
										are always fair and you can trust that the work being done is of high quality. "

										<br><br>

										-Kailey Lemon
									</p>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="featuredProjects">

					<div class="fullWidth whiteBlock">

						<div class="navWidth paddedSection">

							<div class="fullWidth">

									<h3 class="centerText">Featured Auto Repair Projects</h3>

							</div>

							<div class="fullWidth serviceFlexContainer">

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/jeep-cherokee/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage" src="/assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFrontCropped.jpg" alt="Jeep Cherokee suspension rebuild by Arden's Auto Oshkosh WI">

											</div>

											<h4 class="centerText">Jeep Cherokee</h4>

										</a>

								</div>

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/mazdaspeed3/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16MediumSquared.jpg" alt="Engine rebuild on a Mazdaspeed3 by Ardens Auto Oshkosh WI">

											</div>

											<h4 class="centerText">Mazdaspeed3</h4>

										</a>

								</div>

							</div>

						</div>

					</div>

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
