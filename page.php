<?php get_header(); ?>
<div class="header-internas">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="col-md-6 col-lg-6">
				<?php wp_custom_breadcrumbs(); ?>
			</div>
		</div>		
	</div>
</div>
<div class="header-inferior">
	<div class="container">
		<div class="col-md-8 col-lg-8">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post() ;?>
				<p><?php the_content(__('Leia Mais')) ;?></p>
				<small><?php  if (function_exists('the_tags')) the_tags();?></small>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-4 col-lg-4">
			<div class="row">
				<h2>Notícias</h2>
				<ul>
					<li>Teste conteúdo em tópico de notícias</li>
					<li>Teste conteúdo em tópico de notícias</li>
					<li>Teste conteúdo em tópico de notícias</li>
					<li>Teste conteúdo em tópico de notícias</li>
					<li>Teste conteúdo em tópico de notícias</li>
				</ul>
				<h2>Publicidade</h2>
				<?php the_post_thumbnail(false, array('class' => 'img-responsive')); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>