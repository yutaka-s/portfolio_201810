<?php get_header(); ?>
<div id="lowerLay">
	<main id="lowerContent" class="pageContent">
		<div class="bcn"><i class="fas fa-angle-double-right"></i><?php bcn_display(); ?></div>
		<div class="H1heading">
			<span>PROFILE</span>
			<h1>プロフィール</h1>
		</div>
		<div class="lowImg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/profile_01.jpg" alt="スーツ">
		</div>
		<section>
			<div class="H2heading">
				<h2>職務経歴</h2>
				<p>商業高校卒業後、コールセンターのスーパーバイザーとして6年間、業務マネジメントと人材育成に従事してきました。新規業務の立ち上げ・エンドユーザーやオペレーターとのコミュニケーション・新人研修やOJT等、様々なことを経験してきました。</p>
				<p>その後ものづくりの仕事に関心が高まり、現在のWEB制作会社へ転職。1年半CSSのコーディング業務を行ってきました。デフォルトのCSSの調整が主となる為業務の難易度としては低めですが、これまで約350案件程のコーディングを担当していきました。</p>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>今後の目標</h2>
				<p>今後はよりコーディングやプログラミングのスキルを磨いていき、フロントエンドエンジニアとしていち早く会社の戦力になれるよう励みたいです。</p>
				<p>そしてその後はサーバーサイドやデザインの知見を広げたり、前々職の経験を活かしてマネジメントや人材育成等にも取り組んでいきたいです。</p>
			</div>
		</section>
		<section>
			<div class="H2heading">
				<h2>基本情報</h2>
				<p>名前：佐藤豊（さとうゆたか）</p>
				<p>性別：男性</p>
				<p>年齢：25歳</p>
			</div>
		</section>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
