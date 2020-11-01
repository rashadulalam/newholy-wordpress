<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newholy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
  <script src="https://kit.fontawesome.com/b8484fd980.js" crossorigin="anonymous"></script>
  
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="header-notice"></div>
<header>
  <div class="container">
    <!----------------App header ----------------->
    <div class="row align-items-center header-top">
      <div class="col-md-6 d-flex align-items-center">
        <div class="app-branding">
          <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="My App" width="90px"></a>
        </div>
        <div class="app-info">
          <div class="app-date">Estd - 2000</div>
          <h1>New Holy Public School</h1>
          <p>123 Dhaka street, Bangladesh</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="app-contact">
          <div class="app-contact-top">
            <ul>
              <li><i class="fas fa-phone-alt"></i> 01712121212</li>
              <li><i class="fas fa-envelope"></i> example@site.com</li>
            </ul>
          </div>
          <div class="app-contact-social">
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href=""><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="app-calltoaction">
            <a href="" id="admission" class="admission">Admission</a>
            <a href="" class="lang-btn" id="lang-btn">English</a>
          </div>
        </div>
      </div>
    </div><!---- .row ------->
    
    <!-------- App Navigation ------------>
    
      <nav class="navbar navbar-expand-lg navbar-light app-nav">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navigation" aria-controls="app-navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="app-navigation">


          <ul class="navbar-nav">
            <li class="nav-item"><a href="index.html" class="nav-link"><i class="fa fa-home"></i></a></li>
            <li class="nav-item dropdown">
              <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="" class="dropdown-item">Abou us</a>
                <a href="" class="dropdown-item">History</a>
                <a href="" class="dropdown-item">Our vission</a>
              </div>
            </li>
            <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="navbarDropdown">Results</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="" class="dropdown-item">Board Result</a>
                <a href="" class="dropdown-item">Academic Result</a>
              </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
          </ul>
          
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>


      </div>
    </nav>
  </div><!-- .container -->
</header>