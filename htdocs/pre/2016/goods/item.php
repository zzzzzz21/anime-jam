<?php
define("PAGE_TITLE", "GOODS & FOODS");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
$artist_cd = $artist_cd;
?>
<?php
/* ====================================================================== */
/********************************************/
/* グッズアイテム詳細 */
/********************************************/
$param = array(
	'mode'=> 5,
	'id'=> $_REQUEST['id'],
	'artist_cd'	=> $artist_cd,
	'env'		=> $env,
);
$enc = 'UTF-8';
/*********************************/
$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);
if($xml = @simplexml_load_file($url)){
	if (isset($xml->code)) {
		echo "<!-- error : ".$xml->code." -->\n";
	} else {
		if (isset($xml)) {
			$mainItem = $xml->goods_sub->item[0];
			$item_image = (string)$mainItem->image;
			$caption = (string)$mainItem->caption;
		}
	}
}else{
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<!-- tdk -->
<title><?php echo PAGE_TITLE;?>｜<?php include_once "../include/common/title.inc";?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include '../include/common/keywords.inc';?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php include '../include/common/title.inc'?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include '../include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include '../include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "../include/html/head_css.php"; ?>
<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
<script type="text/javascript" src="../common/js/jquery.matchHeight-min.js"></script>
<style>
	html,body{
		width:1004px;
		min-width:1004px;
		overflow-x:hidden;
		overflow-y:hidden;
	}
	@media screen and (max-width: 767px) {
		html,body{
			width:100%;
			min-width:100%;
			overflow-x:hidden;
			overflow-y:auto;
		}
	}
</style>
<script type="text/javascript" src="<?php print(BASE_DIR)?>assets/common/js/jquery.js"></script>
<script type="text/javascript">
//<![CDATA[
function replaceMainImage(div) {
  $('#mainImage').attr('src', div.find('.photo img').attr('src'));
  $('#mainImageCaption').text(div.find('.title').text());
}
$(document).ready(function() {
  replaceMainImage($('#item_0'));
  $('.item_image').click(function() {
    replaceMainImage($(this));
  });
});
//]]>


$(window).load(function(){
	var boxH = 0;
	$(".thumbnail li").each(function(i){
        
		var h = $(this).children("span").children("img").height();
		
		if(boxH < h){
			boxH = h;	
		}

    });
	$(".thumbnail li").css({"height":boxH + 8});
})

</script>
</head>

<body id="goodsItem">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TB3V54"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TB3V54');</script>
<!-- End Google Tag Manager -->
	<!-- ▼ header -->
	<header class="sp_con">
		<nav class="clearfix">
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->
	<!-- ▼ contents -->
	<div id="contents" class="sp_con">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
	</div>
	<!-- ▲ contents -->
	<div class="wrapper">
		<div class="main clearfix">
			<div class="clearfix">
                	<div class="rightCol">
					<h2 class="item-ttl"><?php echo out($xml->name, (string)$xml->carrier);?></h2>
					<div id="item-txt">
						<?php echo out($xml->text, (string)$xml->carrier);?>
					</div>
				</div><!-- /[.rightCol] -->
				<div class="leftCol">
					<div class="box">
						<div>
							<p class="mainPhoto photo"><img id="mainImage" src="" alt=""></p>
							<p id="mainImageCaption"></p>
						</div>
					</div>
					<ul class="thumbnail clearfix">
					<?php
						$idx = 0;
					?>
					<?php foreach($xml->goods_sub->item as $item):
						$item_image = (string)$item->image;
						$caption = (string)$item->caption;
					?>
					<?php if ($item_image): ?>
						<li id="item_<?php echo out($idx, (string)$xml->carrier);?>" class="item_image">
							<span class="photo">
								<img src="<?php echo out($item_image, (string)$xml->carrier);?>" alt="<?php echo out($caption, (string)$xml->carrier);?>">
							</span>
						</li>
						<?php else:?>
						<li id="item_<?php echo out($idx, (string)$xml->carrier);?>" class="item_image">
							<span class="title" style="display: none"><?php echo out($caption, (string)$xml->carrier);?></span>
						</li>
					<?php endif;?>
					<?php
						$idx++
					?>
					<?php endforeach;?>
					</ul>
				</div>
			</div>
		</div><!--/main-->
		<div class="sp_con">
			<div class="btnCenter"><a href="/goods/">GOODS & FOODS一覧に戻る</a></div>
		</div>
	</div><!--/wrapper-->
</body>
</html>