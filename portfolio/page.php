<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
