<?php get_header(); ?>

<div class="row">
	<div class="col-sm-12">

		<?php
		$args =  array(
			'post_type' => 'my-custom-post',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$custom_query = new WP_Query($args);
		while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<div class="blog-post">
				<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail();
				} ?>
				<?php the_excerpt(); ?>
			<?php endwhile; ?>
			</div> <!-- /.col -->
	</div> <!-- /.row -->

	<?php get_footer(); ?>