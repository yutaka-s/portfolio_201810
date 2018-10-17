<div id="sidebar">
	<div class="sbBanner">
		<a href="/front"><img src="<?php echo get_template_directory_uri(); ?>/images/sbnr01.jpg" alt="フロントエンド"></a>
	</div>
	<div class="sbBanner">
		<a href="/server"><img src="<?php echo get_template_directory_uri(); ?>/images/sbnr02.jpg" alt="サーバーサイド"></a>
	</div>
	<h2 class="sideTitle">CONTENTS</h2>
	<div class="sideNavi">
		<?php get_nav('side_nav'); ?>
	</div>
	<div class="sbBanner">
		<a href="/profile"><img src="<?php echo get_template_directory_uri(); ?>/images/sbnr03.jpg" alt="プロフィール"></a>
	</div>
	<h2 class="sideTitle">NEWS</h2>
	<div class="sidePost">
		<?php $my_posts = get_posts(array('numberposts'=>4,'category_name'=>'news')); ?>
		<?php foreach ($my_posts as $post): setup_postdata($post); ?>
		<article>
			<a href="<?php the_permalink(); ?>">
				<span class="date"><?php the_time( 'Y/m/d' ); ?></span>
				<h1 class="title"><?php the_title(); ?></h1>
			</a>
		</article>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>
