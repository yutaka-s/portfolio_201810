<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="archiveContent">
		<div class="H1heading">
			<span>ARCHIVE</span>
			<h1><?php the_archive_title(); ?></h1>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<article>
				<a href="<?php the_permalink(); ?>">
					<span class="date"><?php the_time( 'Y/m/d' ); ?></span>
					<h1 class="title"><?php the_title(); ?></h1>
				</a>
			</article>
		</div>
		<?php endwhile; endif; ?>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
