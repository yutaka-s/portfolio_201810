<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
			<div class="H1heading">
				<span>CONTACT</span>
				<h1>お問い合わせ</h1>
			</div>
			<p style="margin-bottom:50px;">当サイトに関するお問い合わせは、以下のメールフォームをご利用ください。プライバシーポリシーについては<a href="/privacy" target="_blank" style="text-decoration: underline">こちら</a>をご確認ください。但しサイトの公開目的上、以下のフォームを通じてのご連絡はご遠慮ください。</p>
			<div class="contactForm">
				<?php echo do_shortcode( '[contact-form-7 id="82" title="コンタクトフォーム 1"]' ); ?>
			</div>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
