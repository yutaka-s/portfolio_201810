//　読み込み時フェードイン
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery("body").fadeIn(800);

//　トグルボタン開閉
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(".toggleOpen").click(function(){
	jQuery("#globalNav").fadeIn(500);
});

jQuery(".toggleClose").click(function(){
	jQuery("#globalNav").fadeOut(500);
});

//　グローバルナビ追従
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
nav = jQuery("nav").clone(true).addClass("navFixed navMove").removeAttr('id');
jQuery("body").prepend(nav);

var navPos = jQuery("#globalNav").offset().top;
jQuery(window).scroll(function(){
	if(jQuery(window).scrollTop() > navPos){
		jQuery(".navFixed").removeClass("navMove");
	} else {
		jQuery(".navFixed").addClass("navMove");
	}
});


//　セクションフェードイン
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(window).scroll(function(){
	jQuery('.fadein').each(function(){
		var elemPos = jQuery(this).offset().top;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();
		if (scroll > elemPos - windowHeight + 200){
			jQuery(this).addClass('scrollin');
		}
	});
});

//　スクロールトップ移動
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery("#scrollTop i").click(function(){
	jQuery("body, html").animate({scrollTop:0}, 500);
		return false;
});
