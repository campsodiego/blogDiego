<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4">
					<?php 
					$args = array('post_type'=>'page', 'pagename'=>'sobre');
					$mySobre = get_posts( $args );
					if($mySobre) : foreach($mySobre as $post) : setup_postdata( $post );
				?>
					<?php the_excerpt(); ?>

				<?php
			    	endforeach;
			    	endif;
		    	?>
			</div>
			<?php if ( !function_exists('dynamic_sidebar')
			    || !dynamic_sidebar('Sidebar footer')): ?>
			<?php endif; ?>
			<div class="col-md-4 col-lg-4">
				<?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'key' => '', 'title' => false, 'description' => 
					false, 'readonly' => false, 'entry_id' => false)); ?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>

