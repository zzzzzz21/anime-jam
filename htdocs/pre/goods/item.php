<?php
define("PAGE_TITLE", "GOODS");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
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
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "../include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>
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
<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
<script src="../common/js/jquery.colorbox-min.js"></script>

</head>

<body id="goodsItem">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<div class="sp_con">
	<?php require_once "../include/html/header.php"; ?>
</div>

	<!-- ▼ contents -->
	<div id="contents" class="sp_con">
		<div class="title">
			<h2><img src="../common/images/goods_title.png" alt="<?php echo PAGE_TITLE;?>"></h2>
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
			<div class="btnCenter"><a href="/goods/">GOODS一覧に戻る</a></div>
		</div>
	</div><!--/wrapper-->
</body>
</html>