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

				<section id="promotions" class="paddedSection">

					<div class="flex-container cardWrap">

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Oil Change Special</h3>

									<p>New oil filter and five quarts of oil</p>

									<h4>$24.99</h4>

									<p class="terms">Applies for most vehicles. Some restrictions apply for vehicles with special filter or oil requirements.</p>

								</div>

							</div>

						</div>

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Brake Work Only</h3>

									<h4>10% Off all parts & labor</h4>

									<p class="terms">Applies for most vehicles. Some restrictions apply for vehicles with special brake requirements.</p>

								</div>

							</div>

						</div>

					</div>

					<div id="promotionsRow2" class="flex-container cardWrap">

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Oil Change & Tire Rotation</h3>

									<h4>$10.00 Off</h4>

									<p class="terms">Applies for most vehicles. Some restrictions apply.</p>

								</div>

							</div>

						</div>

						<div class="col50">

							<div class="couponBox">

								<div class="textWrap">

									<h3 class="centerText">Air Conditioning Service</h3>

									<h4>$15.00 Off</h4>

									<p>

										Includes: complete air conditioning diagnostic - includes dyes, leak detection,	pressure test of system, inspection of hoses, belts and refrigerant levels

									</p>

									<p class="terms">Applies for most vehicles. Some restrictions apply for vehicles with special brake requirements.</p>

								</div>

							</div>

						</div>

					</div>

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
