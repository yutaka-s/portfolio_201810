<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
		<div class="H1heading">
			<span>FRONTEND</span>
			<h1>フロントエンドのスキルについて</h1>
		</div>
		<div class="lowImg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/front_01.jpg" alt="ワイヤーフレーム">
		</div>
		<section>
			<div class="H2heading">
				<h2>CSS</h2>
			</div>
			<p>デザインカンプに沿って一通りのコーディングができます。また当サイトはCSSのプリプロセッサであるlessを使用してコーディングをしています。現職はデフォルトのCSSを調整するという簡易な業務だった為大規模なコーディングについては実務経験がありませんが、独学で基本的なレスポンシブ対応、マルチデバイス対応を習得しています。</p>
		</section>
		<section>
			<div class="H2heading">
				<h2>HTML</h2>
			</div>
			<p>実務経験はありませんが、当サイトのように、1つのサイトを作成する為に必要な一通りのコーディングができます。主要な要素、属性の用途を理解しています。</p>
		</section>
		<section id="photo">
			<div class="H2heading">
				<h2>Photoshop</h2>
				<p>基本的な操作を理解しており、簡単な画像の作成・編集ができます。現職でもデザイナーが作成した画像を微修正することがあります。</p>
			</div>
		</section>
		<section id="js">
			<div class="H2heading">
				<h2>JavaScript・jQuery</h2>
				<p>独学レベルではありますが、基本的な構文やDOM操作を理解しています。当サイトのようなアニメーションを再現できます。今後特に磨いていきたいスキルです。</p>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>Bootstrap・Vue.js</h2>
				<p>Bootstrap・Vue.jsを学習したことがあります。今後は会社で使用されているフレームワークを優先して学習していきたいと思います。</p>
			</div>
		</section>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
