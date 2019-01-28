<?php
/**
 * Template Name: Jeep
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

				<section class="hero">

					<div class="hero jeepHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading projectsHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Jeep Cherokee</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id="jeepProjectGallery" class="featuredProjects">

					<div class="fullWidth">

						<div class="navWidth paddedSection">

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject1Medium.jpg" alt="Jeep Cherokee getting engine removed out to be rebuilt">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject2Medium.jpg" alt="Jeep with wheels off up on lift at Ardens Auto Oshkosh WI">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageColumn">

										<div class="">

											<div class="imageWrapper">

												<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject3Medium.jpg" alt="Jeep up on lift getting old suspension removed">

											</div>

										</div>

											<div class="">

												<div class="imageWrapper">

													<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject5Medium.jpg" alt="Jeep suspension after removal">

												</div>

											</div>

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject4.jpg" alt="Jeep up on lift with all the old suspension removed">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/alexWorkingOnTheCherokee.jpg" alt="Alex Arden Todd working on the Jeep Cherokee">

									</div>

								</div>

								<div class="col50">

									<div class="imageColumn">

										<div class="">

											<div class="imageWrapper">

												<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject6Medium-1.jpg" alt="Jeep Cherokee with the new suspension being put on">

											</div>

										</div>

											<div class="">

												<div class="imageWrapper">

													<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject8Medium-1.jpg" alt="Jeep Cherokee with the new suspension fully on">

												</div>

											</div>

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageColumn">

										<div class="">

											<div class="imageWrapper">

												<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject9Medium-1.jpg" alt="Jeep Cherokee with the new suspension fully on">

											</div>

										</div>

											<div class="">

												<div class="imageWrapper">

													<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject11Medium-1.jpg" alt="New fully rebuilt engine for the Jeep Cherokee">

												</div>

											</div>

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject10.jpg" alt="Jeep Cherokee with the new suspension fully on">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject12Medium.jpg" alt="New engine head being lifted into place on Jeep Cherokee">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject13Medium.jpg" alt="Jeep Cherokee with the new engine and head back in place">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/cherokeeProject14Medium.jpg" alt="Jeep Cherokee with the new suspension and rebuilt engine">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/jeepCherokeeProject15Medium.jpg" alt="Jeep Cherokee with the new suspension and brand new matching wheels">

									</div>

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
