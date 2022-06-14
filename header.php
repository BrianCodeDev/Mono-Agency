<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<nav class="navbar navbar-expand-lg bg-light shadow-lg">
  <div class="container-fluid">
	<img src="http://monoagency.local/wp-content/uploads/2022/06/logo-4.png" alt="logo" width="50px" height="50px">
    <a class="navbar-brand" href="#">Mono Agency</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><button class="button-1"><i class="fa-solid fa-house"></i> Home</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button class="button-2"><i class="fa-solid fa-book"></i> Blog</button></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#"><button class="button-3"><i class="fa-solid fa-cart-shopping"></i> Services</button></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
	    <a class="button-4" type="submit"><i class="fa-solid fa-people-group"></i> Team</a>
		<a class="button-5" type="submit" href="http://monoagency.local/map/">Map</a>
      </form>
    </div>
  </div>
</nav>
