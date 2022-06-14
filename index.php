<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
              
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/cold-smooth-tasty..png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/cold-smooth-tasty.-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/cold-smooth-tasty.-2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>				 <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/web-developer-job-description-6494x4331-2020128.jpeg" class="card-img-top" alt="canva">
      <div class="card-body">
	  <a href="#">
        <h5 class="card-title">Building a team</h5>
</a>
        <p class="card-text">id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas tellus</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/web_dev_pillar_page-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a href="#">
        <h5 class="card-title">Card title</h5>
		</a>
        <p class="card-text">id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas tellus</p>
	</div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/back-end-developer-job-description-4088x2725-2020121.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a href="#">
        <h5 class="card-title">Card title</h5>
		</a>
        <p class="card-text">id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas tellus</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="http://monoagency.local/wp-content/uploads/2022/06/main-qimg-b39bef4a278678146ebdc7c305c81e1b-pjlq.jpg" class="card-img-top" alt="...">
      <div class="card-body">
		<a href="#">
        <h5 class="card-title">Card title</h5>
        </a>
        <p class="card-text">id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas tellus</p>
      </div>
    </div>
  </div>
</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
