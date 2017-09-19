<?php
define("PAGE_TITLE", "MOVIE");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<?php
/* ====================================================================== */
$link_url = "detail.php";
$param = array(
	'mode'=> 2,
	'artist_cd'	=> $artist_cd,
	'limit'		=> '6',
	'page'		=> $_REQUEST['page'],
	'env'=> $env,
);
$enc = 'UTF-8';
/*********************************/
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);
if ( isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on' ) {
	$protocol = 'https://';
} else {
	$protocol = 'http://';
}

$dir=$protocol.$_SERVER['HTTP_HOST'];
if($xml = @simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
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

<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
<script src="../common/js/jquery.colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		if($(window).width() > 767){
			$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
		}else{
			$(".youtube").colorbox.remove();
		}
	});	
</script>

</head>


<body id="movie" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/movie_title.png" alt="MOVIE">
				</h2>
			</section>
			<ul class="movieList clearfix">
				<?php if (isset($xml->item)):?>
				<?php foreach($xml->item as $k=>$v):?>
				<li class="movieList__item">
					<a class="movieThumb youtube" href="<?php echo out($v->url, (string)$xml->carrier);?>&autoplay=1">
						<?php if($v->url != ''):?>
						<div class="movieList__item__thumbnail">
							<iframe width="330" height="185" src="<?php echo out($v->url, (string)$xml->carrier);?>" frameborder="0" allowfullscreen></iframe>
						</div>
						<span class="movieList__item__title"><?php echo out($v->title, (string)$xml->carrier);?></span>
					</a>
					<?php endif;?>
				</li>
				<?php endforeach;?>
				<?php else:?>
				<li class="is--coming">COMING SOON</li>
				<?php endif;?>
			</ul>
		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
