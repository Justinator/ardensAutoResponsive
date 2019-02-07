<?php
/**
 * Template Name: Thank you
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

								<div class="centerText homeHeading reviewHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Thank You</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id ="reviewIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col50">

							<div class="blockText">

								<p>
									Thank you for reaching out to us. At Arden's Automotive Hospital we take our work very seriously and strive to provide a great experience to every customer we get to work with.
									We value every customer and look forward to helping you get your car back on the road.
								</p>

								<p>
									While we're normally booked up for at least a few days in advance, we'll do our best to get back to you within 24 hours and respond to any questions you may have. If
									you're still not sure if we can service your vehicle, check out our services below to learn more about everything we can do for you.
								</p>

							</div>

						</div>

						<div class="col50">

							<img src="/assets/scss/wp-content/uploads/2019/01/ardenAndAlexTodd.jpg" class="image">

						</div>

					</div>

				</section>

				<section class="services">

					<?php get_template_part('Includes/services'); ?>

				</section>

				<section class="map">

					<?php get_template_part('Includes/map'); ?>

				</section>

				<section class="feedback">

					<div class="feedbackButtonWrapper">

						<div class="feedbackContent">

							<button class="redButton feedbackButton"><i class="fas fa-edit"></i> Feedback</button>

						</div>

					</div>

					<div class="surveyWrapper">

						<div class="surveyContent">

							<button class="redButton surveyClose ">Close <i class="fas fa-times"></i></button>

							<div class="survey">

								<?php echo do_shortcode('[caldera_form id="CF5c387bcd0a786"]')?>

							</div>

						</div>

					</div>

				</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
