<?php
/**
 * Template Name: Projects
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

					<div class="hero shopHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading projectsHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Auto Repair Projects</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section class="featuredProjects">

					<div class="fullWidth">

						<div class="navWidth paddedSection">

							<div class="fullWidth serviceFlexContainer">

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/jeep-cherokee/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage"
							          srcset="/assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-400.jpg 400w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-500.jpg 600w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-600.jpg 800w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFrontCropped.jpg 1200w"
							          sizes="(min-width: 992px) 50vw"
							           src="/assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFrontCropped.jpg"
							           class="image" alt="Jeep Cherokee custom suspension rebuild with lift kit by Arden's Auto Oshkosh, WI">


											</div>

											<h4 class="centerText">Jeep Cherokee</h4>

										</a>

								</div>

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/mazdaspeed3/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage"
							          srcset="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-400.jpg 400w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-500.jpg 600w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-600.jpg 800w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16MediumSquared.jpg 1200w"
							          sizes="(min-width: 992px) 50vw"
							           src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16MediumSquared.jpg"
							           class="image" alt="Engine rebuild on a 2012 Mazdaspeed3 by Ardens Auto Oshkosh WI">

											</div>

											<h4 class="centerText">Mazdaspeed3</h4>

										</a>

								</div>

							</div>

						</div>

					</div>

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
