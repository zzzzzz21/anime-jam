<?php
define("PAGE_TITLE", "TICKET");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
$artist_cd = $artist_cd;
?>
<!DOCTYPE html>
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
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
<script type="text/javascript" src="../common/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
$(function() {
    var widthMatch = window.matchMedia("(max-width: 767px)").matches;    
    if (typeof(window.matchMedia) != "function" || !widthMatch) {
        $('.body').matchHeight();
        $('.ticketBox h3').matchHeight();
    } 
});</script>
</head>

<body id="ticket" class="second">
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
	<header>
		<nav class="clearfix">
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
		
		<div id="contentsBody">
			<div class="clearfix">
				<div class="ticketBox size-full">
					<div class="inner">
						<div class="body">
							<h3>《各プレイガイド先行受付》</h3>
							<p>受付期間：10月14日(金)18:00～10月25日(火)23:59</p>
							<p>チケットぴあ（抽選）<br>
							受付URL：<a href="http://w.pia.jp/t/anime-jam/" target="_blank">http://w.pia.jp/t/anime-jam/</a><a class="btnTicket" href="http://w.pia.jp/t/anime-jam/" target="_blank">受付はこちら</a></p>
							<p>イープラス（抽選）<br>受付URL：<a href="http://eplus.jp/animejam16e" target="_blank">http://eplus.jp/animejam16e</a><a class="btnTicket" href="http://eplus.jp/animejam16e" target="_blank">受付はこちら</a></p>
							<p>ローソンチケット（抽選）<br>
							受付URL：<a href="http://l-tike.com/search/?lcd=74511" target="_blank">http://l-tike.com/search/?lcd=74511</a><a class="btnTicket" href="http://l-tike.com/search/?lcd=74511" target="_blank">受付はこちら</a></p>
							<p class="fontS">※枚数制限：お一人様4枚まで<br>※先着順ではございません。当落は受付期間終了後、抽選にて決定させて頂きます。</p>
						</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/footer.php"); ?>

</body>
</html>