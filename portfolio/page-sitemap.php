<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
		<div class="H1heading">
			<span>SITEMAP</span>
			<h1>サイトマップ</h1>
		</div>
		<div id="sitemap">
			<?php get_nav('footer_nav'); ?>
		</div>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
