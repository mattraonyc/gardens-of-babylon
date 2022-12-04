<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gardens_of_Babylon
 */

get_header();
?>

	<main id="primary" class="site-main">

    <section class="container pb-5 pt-4">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<a href="./all-products"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide-3.png" class="d-block w-100" alt="..."></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="./all-products"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide-4.png" class="d-block w-100" alt="..."></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

        <section class="container popular-products">
			<h1 class="text-center pt-5">Popular Products</h1>
			<p class="text-center">We offer a number of high quality products to help keep<br> your plants healthy and spoiled!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products popularity columns=4 limit=4]' ); ?>
			</div>
		</section>


		<section class="categories pt-5 pb-5">
			<div class="container">

				<h1 class="text-center pt-5">Categories</h1>
				<p class="text-center">We offer a number of high quality products to help keep<br> your plants healthy and spoiled!</p>
			

			<div class="row pt-5">

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="./product-category/plants" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/plants.avif" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Plants</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="./product-category/gift-cards" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/gift-cards.avif" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Gift Cards</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="./product-category/tools" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/tools.avif" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Tools</h2>
					</a>
				</div>

			</div>

			<div class="row mb-3">

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="./product-category/pots" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/pots.avif" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Pots</h2>
					</a>
				</div>

				<div class="categories__col sale col-md-8 col-sm-12 mb-3">
					<a href="./product-category/special-offers" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/special-offers.jpeg" alt="..." loading="lazy"> 
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Special Offers</h2>
			
					</a>
				</div>
			</div>
			</div>

		</section>

		<section class="container pt-5 special-offers">
			<h1 class="text-center pt-5">Special Offers</h1>
			<p class="text-center">We offer a number of high quality products to help keep<br> your plants healthy and spoiled!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[sale_products columns=4 limit=4]' ); ?>
			</div>
		</section>




	</main><!-- #main -->

<?php
get_footer();
