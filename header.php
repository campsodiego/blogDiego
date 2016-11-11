
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-default navbar-custom">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="http://localhost/Diego/">Diego<span>RCAMPOS</span></a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
	    <?php
            wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menuheader',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-collapse-custom',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav  navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
	  </div><!-- /.container-fluid -->
	</nav>
</div>
