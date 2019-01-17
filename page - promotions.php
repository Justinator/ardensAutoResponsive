<?php
/**
 * Template Name: Promotions
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

								<div class="centerText shortHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Promotions</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="promotionsContent">

				<div>

				<section id="ardensBenefits" class="paddedSection">

					<div class="flex-container cardWrap">

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Oil Change Special</h3>

									<p>New oil filter and five quarts of oil</p>

									<h3 class="">$24.99</h3>

									<p class="terms">Applies for most vehicles. Some restrictions apply for vehicles with special filter or oil requirements.</p>

								</div>

							</div>

						</div>

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Oil Change Special</h3>

									<p>New oil filter and five quarts of oil</p>

									<h3 class="">$24.99</h3>

									<p class="terms">Applies for most vehicles. Some restrictions apply for vehicles with special filter or oil requirements.</p>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="homepageCTA">

					<div class="siteCTAWrap">

						<div class="CTAWrapOverlay">

								<div class="CTAcontent">

									<h3 class="whiteText">Ready to start giving your car the expert care that it deserves?</h3>

										<p class="whiteText">

											Don't put it off any longer. Stop in or contact Arden's Automotive Hospital to set up an appointment for your vehicle today.

										</p>

										<div class="centeredButton">

											<a href="/contact/"><button class="whiteButton">Contact Arden's</button></a>

										</div>

								</div>

						</div>

					</div>

				</section>

				<section class="map">

					<div class="fullWidth">

						<div>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.495470991913!2d-88.55277408449062!3d44.011154779110626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803ebf8a244848f%3A0xab246929a6800b92!2sArden&#39;s+Automotive+Hospital+LLC!5e0!3m2!1sen!2sus!4v1547119658458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

							<div class="locationInfo">

								<div class="locationContent">

									<h5>Arden's Automotive Hospital</h5>

									<a class="plainLink" target="_blank" href="https://www.google.com/maps/place/Arden's+Automotive+Hospital+LLC/@44.0111548,-88.5527741,17z/data=!3m1!4b1!4m5!3m4!1s0x8803ebf8a244848f:0xab246929a6800b92!8m2!3d44.0111548!4d-88.5505854">

									<p>510 W 8th Ave<br>

									Oshkosh, WI 54902</p></a>

									<a class="plainLink" href="tel:(920)203-3694">(920)203-3694</a>

									<br>

								</div>

							</div>

					</div>

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

		</div>

	</main>

	</div>

</div>
</div>

<?php

get_footer();
