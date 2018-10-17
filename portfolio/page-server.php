<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
		<div class="H1heading">
			<span>SERVERSIDE</span>
			<h1>サーバーサイドのスキルについて</h1>
		</div>
		<div class="lowImg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/server_01.jpg" alt="プログラミング">
		</div>
		<section>
			<div class="H2heading">
				<h2>WordPress</h2>
			</div>
			<p>現職ではWordPressを使用したWebサイトを制作しており、当サイトもWordPressを使用して構築しています。業務内ではプログラムを編集することはありませんが、独学で静的WebサイトのWordPress化・ループ処理・管理画面カスタマイズ・投稿タイプ作成等、簡易なカスタマイズについて習得しています。例えば当サイトのグローバルナビ・サイドナビ・フッターナビはカスタム投稿タイプでHTMLを出力しており、管理画面から容易に編集することができます。</p>
			<div class="lowImg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/server_02.jpg" alt="管理画面">
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>PHP・MySQL</h2>
			</div>
			<p>独学でPHPの基本的な構文を理解しています。PHP5技術者認定初級という資格も保有しています。またデータベースの基礎も理解しています。</p>
		</section>
		<section>
			<div class="H2heading">
				<h2>CakePHP・CodeIgniter</h2>
			</div>
			<p>独学でCakePHP・CodeIgniterを学習しました。MVCの制御やデータベースとの連携等、基礎を理解しています。</p>
		</section>
		<section>
			<div class="H2heading">
				<h2>その他独学レベルで学習経験のあるスキル</h2>
			</div>
			<div class="H3heading">
				<h3>Linux</h3>
			</div>
			<p>基本的なコマンド操作を学習したり、Ubuntuを触ってみたり、Windows内にサブOSとしてCentOSを構築したりしたことがあります。</p>
			<div class="H3heading">
				<h3>Python</h3>
			</div>
			<p>技術書に沿って基本的な構文を学習したことがあります。</p>
		</section>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
