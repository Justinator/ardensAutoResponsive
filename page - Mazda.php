<?php
/**
 * Template Name: Mazda
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

					<div class="hero mazdaHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading projectsHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Mazdaspeed3</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id="mazdaProjectGallery" class="featuredProjects">

					<div class="fullWidth">

						<div class="navWidth paddedSection">

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3ProjectMedium.jpg" alt="Mazdaspeed3 pulling up to Ardens Automotive Hospital with a blown engine">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project2Medium.jpg" alt="Mazdaspeed3 up on a lift at Ardens Automotive Hospital with a blown engine">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project3Medium.jpg" alt="Mazdaspeed3 dismantled to get blown engine out for rebuild at Ardens Automotive Hospital">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project4Medium.jpg" alt="Mazdaspeed3 with engine being pulled out at Ardens Automotive Hospital">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project5Medium.jpg" alt="Mazdaspeed3 engine pulled out and on work bench to be disassembled for rebuild">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project6Medium.jpg" alt="Mazdaspeed3 stripped down and ready to be rebuilt">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container centerAlignedContainer">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project8Medium.jpg" alt="Mazdaspeed3 scarred cylinders before being bored out">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project9Medium.jpg" alt="Mazdaspeed3 blown pistons">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project10Medium.jpg" alt="Mazdaspeed3 engine after bored out and refurbished cylinders">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project11Medium.jpg" alt="Mazdaspeed3 engine fully refurbished and reassembled, ready to go back into the car">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageColumn">

										<div class="">

											<div class="imageWrapper">

												<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project12Medium-1.jpg" alt="Mazdaspeed3 engine with turbo and all other parts bolted back on">

											</div>

										</div>

											<div class="">

												<div class="imageWrapper">

													<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project14Medium-1.jpg" alt="Mazdaspeed3 engine bay after being cleaned out and prepped for new engine">

												</div>

											</div>

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project13Medium.jpg" alt="Mazdaspeed3 engine with clutch and flywheel back in place">

									</div>

								</div>

							</div>

							<div class="fullWidth flex-container">

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project15Medium.jpg" alt="Mazdaspeed3 being put back together at Ardens Automotive Hospital after new engine was installed">

									</div>

								</div>

								<div class="col50">

									<div class="imageWrapper">

										<img class="image" src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16Medium.jpg" alt="Mazdaspeed3 fully assembled and washed after new engine rebuild">

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
