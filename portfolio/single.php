<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="singleContent">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
			<h1><?php the_title(); ?></h1>
			<div class="dateCategory">
				<div class="category"><?php the_category(' '); ?></div>
				<div class="date"><i class="far fa-clock"></i><?php the_time("Y/m/d"); ?></div>
			</div>
			<?php the_content(); ?> <!-- 記事の中身 -->
		</article>
		<?php endwhile; endif; ?>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
