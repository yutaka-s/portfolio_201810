<?php get_header(); ?>
<main id="topContent">
	<section id="about">
		<div class="sectionLay">
			<h1>佐藤豊のポートフォリオ用Webサイトです</h1>
			<p>当サイトは佐藤豊のポートフォリオ用Webサイトです。</p>
			<p>デザイン・画像作成・ライティング・コーディング等、全て一貫して構築いたしました。</p>
			<p>当サイトを通じて、「こういったWebサイトを作成できる人なんだ」と、少しでもお伝えできれば幸いです。</p>
			<p>店舗・法人向けWebサイトの構成をイメージして作成いたしました。</p>
			<p>どうぞ最後までご覧ください。</p>
			<div class="moreBtn">
				<a href="/about">当サイトについて</a>
			</div>
		</div>
	</section><!--aboutEnd-->
	<section id="skills">
		<div class="sectionLay">
			<div class="H1heading fadein">
				<span>TECHNICAK SKILLS</span>
				<h1>テクニカルスキル</h1>
			</div>
			<div id="front">
				<div class="row fadein">
					<div class="col">
						<img src="<?php echo get_template_directory_uri(); ?>/images/top_img01.jpg" alt="フロントエンド">
					</div>
					<div class="col">
						<h2>フロントエンド</h2>
						<p>現職ではWordPressを使用した自社パッケージ商材のCSSのコーディングを担当しています。</p>
						<p>また現職で使用する機会はありませんが、JavaScript・jQuery・Bootstrap・Vue.js等の基礎を独学で習得しています。</p>
						<div class="moreBtn">
							<a href="/front" title="フロントエンド">詳細を見る</a>
						</div>
					</div>
				</div>
			</div><!--frontEnd-->
			<div id="server">
				<div class="row fadein">
					<div class="col">
						<h2>サーバーサイド</h2>
						<p>静的Webサイトの基本的なWordPress化や、簡単なカスタマイズをすることができます。</p>
						<p>またPHPとそのフレームワーク、データベースに関する基礎を独学で習得しています。</p>
						<div class="moreBtn">
							<a href="/server" title="サーバーサイド">詳細を見る</a>
						</div>
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri(); ?>/images/top_img02.jpg" alt="サーバーサイド">
					</div>
				</div>
			</div><!--serverEnd-->
		</div>
	</section><!--skillsEnd-->
	<section id="news">
		<div class="sectionLay">
			<div class="H1heading">
				<span>NEWS</span>
				<h1>お知らせ</h1>
			</div>
			<div class="row">
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
	</section>
	<section id="profile">
		<div class="sectionLay">
			<div class="H1heading fadein">
				<span>PROFILE</span>
				<h1>プロフィール</h1>
			</div>
			<div class="row fadein">
				<div class="col">
					<img src="<?php echo get_template_directory_uri(); ?>/images/top_img03.jpg" alt="プロフィール">
				</div>
				<div class="col">
					<div class="H2heading">
						<h2>まだまだ未熟者ですが頑張ります！</h2>
					</div>
					<p>未経験で現在のWEB制作会社へ転職し、1年半CSSのコーディング業務を行ってきました。常に「会社の戦力になりたい」という気持ちで、能動的に自己学習に励んできました。</p>
					<p>今後はフロントエンドのスキル習熟に励み、その後サーバーサイドやデザインの知見を広げたり、マネジメントや人材育成等にも取り組んでいきたいです。</p>
					<div class="moreBtn">
						<a href="/profile" title="プロフィール">詳細を見る</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
