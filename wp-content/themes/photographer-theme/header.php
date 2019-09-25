
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo(); ?>">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">

  <nav id="site-navigation" class="main-navigation">
      <a class="navbar-brand" href="#">
        Brand Logo Here
      </a>
  </nav>

  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
    
  </div>

</nav>