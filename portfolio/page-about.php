<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
		<div class="H1heading">
			<span>ABOUT</span>
			<h1>当サイトについて</h1>
		</div>
		<div class="lowImg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/about_01.jpg" alt="パソコン">
		</div>
		<section>
			<div class="H2heading">
				<h2>当サイトはポートフォリオ用Webサイトです</h2>
				<p>当サイトは佐藤豊のポートフォリオ用Webサイトです。</p>
				<p>デザイン・画像作成・ライティング・コーディング等、全て一貫して構築いたしました。</p>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>主に使用されているスキル</h2>
			</div>
			<div class="H3heading">
				<h3>WordPress・PHP</h3>
			</div>
			<p>当サイトはWordPressで構築されています。随所PHPによるカスタマイズも行っています。</p>
			<div class="moreBtn" style="text-align:right;">
				<a href="/server" title="サーバーサイド">詳細を見る</a>
			</div>
			<div class="H3heading">
				<h3>HTML・less</h3>
			</div>
			<p>HTMLはもちろん、CSSのプリプロセッサであるlessを使用してコーディングをしています。</p>
			<div class="moreBtn" style="text-align:right;">
				<a href="/front" title="フロントエンド">詳細を見る</a>
			</div>
			<div class="H3heading">
				<h3>Photoshop</h3>
			</div>
			<p>サイト内で使用している画像は全てPhotoshopを使用して作成しています。</p>
			<div class="moreBtn" style="text-align:right;">
				<a href="/front/#photo" title="Photoshop">詳細を見る</a>
			</div>
			<div class="H3heading">
				<h3>JavaScript・jQuery</h3>
			</div>
			<p>サイト内の各種アニメーションはJavaScript・jQueryで再現しています。</p>
			<div class="moreBtn" style="text-align:right;">
				<a href="/front/#js" title="Js">詳細を見る</a>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>ソースコード</h2>
			</div>
			<p>ソースコードはGitHubでご確認ください。</p>
			<div class="moreBtn" style="text-align:right;">
				<a href="https://github.com/yutaka-s/portfolio_201810" target="_blank" title="github">詳細を見る</a>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>制作期間</h2>
			</div>
			<p>当サイトの制作期間は、4～5営業日程になります。</p>
		</section>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
