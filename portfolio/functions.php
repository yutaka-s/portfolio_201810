<?php

//　投稿タイプ「ナビ設定」
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//　投稿タイプ作成
///////////////////////////////////////////

// フックさせる関数
function create_post_type() {
	$supports = [ //記事作成画面で編集できる内容
		'title', //タイトル
		'revisions', //リビジョンを保存する
	];

	// カスタム投稿タイプを作成する
	register_post_type( 'nav', //投稿タイプの名前
		array(
			'label' => 'ナビ設定', //管理画面メニュー表示名
			'public' => true, //管理画面とフロントエンドの両方から利用可能
			'has_archive' => true, //アーカイブを有効にする
			'menu_position' => 5, //管理画面メニュー表示位置
			'supports' => $supports //記事作成画面で編集できる内容
		)
	);

	// タクソノミーを作成する
		register_taxonomy(
			'nav_category', //タクソノミーの名前
			'nav', //オブジェクト名
		array(
			'label' => 'ナビカテゴリー', //管理画面で表示する名前
			'labels' => array(
			'all_items' => 'ナビカテゴリー一覧',
			'add_new_item' => '新規カテゴリーを追加'
			),
			'hierarchical' => true //階層構造、子を持つタクソノミー
		)
	);
}

function add_menu_icons_styles() {
	?>
	<style>
		.menu-icon-nav .dashicons-admin-post:before {
			content: "\f203";
		}
	</style>
<?php
}

add_action( 'init', 'create_post_type' );
add_action( 'admin_head', 'add_menu_icons_styles' );


//　投稿タイプ表示
///////////////////////////////////////////

function get_nav($term){
	$global_posts = get_posts(
		array(
			'post_type' => 'nav',
			'taxonomy' => 'nav_category',
			'term' => $term,
			'order' => 'ASC',
			'numberposts' => -1
		)
	);
	$html = '<ul>';
	foreach($global_posts as $global_post) {
		$url = get_field('url', $global_post->ID);
		$ttl = $global_post->post_title;
		$html .= '<li><a href="'.$url.'">'.$ttl.'</a></li>';
	}
	$html .= $term == 'header_nav' ? '<li><i class="toggleClose fas fa-times"></i></li>' : '';
	$html .= '</ul>';
	echo $html;
}
