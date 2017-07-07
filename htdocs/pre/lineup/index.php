<?php
define("PAGE_TITLE", "LINE UP");
require_once($_SERVER['DOCUMENT_ROOT'] . "/_config.php");
$artist_cd = $artist_cd;
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
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include '../include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include '../include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "../include/html/head_css.php"; ?>
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
<script type="text/javascript" src="/common/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
$(function() {
			$('.lineupBlc li').matchHeight();
	}
</script>
</head>

<body id="lineup" class="second">
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
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
	
		
		<!-- lineup -->
		<div class="lineup">
			
			<div class="clearfix">
				<div class="rockBlc lineupBlc">
					<div class="inner">
						<h3><img src="../common/images/logo_rock.png" alt="アニメJAM 2016 ROCK"></h3>
						<h4>2016.12.10sat</h4>
						
						<ul class="clearfix">
							<li><a href="vanguard.php"><img src="../common/images/logo_vg.png" alt="ヴァンガード　ストライイドゲート" class="logo"><img src="../common/images/img_slideRock03.jpg" alt="ヴァンガード　ストライドゲート"></a></li>
							<li><a href="kinpri.php"><img src="../common/images/logo_kp.png" alt="キングオブプリズム" class="logo"><img src="../common/images/img_slideRock06.jpg" alt="キングオブプリズム"></a></li>
							<li><a href="sousei.php"><img src="../common/images/logo_onmyouji.png" alt="双星の陰陽師" class="logo"><img src="../common/images/img_slideRock02.jpg" alt="双星の陰陽師"></a></li>
							<li><a href="boueibu.php"><img src="../common/images/logo_binan.png" alt="美男高校地球防衛軍" class="logo"><img src="../common/images/img_slideRock04.jpg" alt="美男高校地球防衛部LOVE! LOVE!"></a></li>
							<li><a href="yowapeda.php"><img src="../common/images/logo_yowapeda.png" alt="弱虫ペダル" class="logo"><img src="../common/images/img_slideRock05.jpg" alt="弱虫ペダル"></a></li>
						</ul>
					</div>
				</div>
				<div class="popBlc lineupBlc">
					<div class="inner">
						<h3><img src="../common/images/logo_pop.png" alt="アニメJAM 2016 POP"></h3>
						<h4>2016.12.11sun</h4>
						
						<ul class="clearfix">
							<li><a href="wug.php"><img src="../common/images/logo_wug.png" alt="Wake Up, Girls!" class="logo"><img src="../common/images/img_slidePop06.jpg" alt="Wake Up, Girls！"></a></li>
							<li><a href="syakunetsu.php"><img src="../common/images/logo_syakunetsu.png" alt="灼熱の卓球娘" class="logo"><img src="../common/images/img_slidePop08.jpg" alt="灼熱の卓球娘"></a></li>
							<li><a href="tabootatoo.php"><img src="../common/images/logo_taboo.png" alt="タブー・タトゥー" class="logo"><img src="../common/images/img_slidePop05.jpg" alt="タブー・タトゥー"></a></li>
							<li><a href="trinity-7.php"><img src="../common/images/logo_trinity-7.png" alt="トリニティセブン" class="logo"><img src="../common/images/img_slidePop09.jpg" alt="トリニティセブン"></a></li>
							<li><a href="hundred.php"><img src="../common/images/logo_hundred.png" alt="ハンドレッド" class="logo"><img src="../common/images/img_slidePop04.jpg" alt="ハンドレッド"></a></li>
							<li><a href="puripara.php"><img src="../common/images/logo_puripara.png" alt="プリパラ" class="logo"><img src="../common/images/img_slidePop03.jpg" alt="プリパラ"></a></li>
							<li><a href="yuruyuri.php"><img src="../common/images/logo_yryr.png" alt="ゆるゆり" class="logo"><img src="../common/images/img_slidePop02.jpg" alt="ゆるゆり"></a></li>
							<li><a href="re-zero.php"><img src="../common/images/logo_zero.png" alt="Re:ゼロから始める異世界生活" class="logo"><img src="../common/images/img_slidePop07.jpg" alt="Re:ゼロから始める異世界生活"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<!-- lineup -->
		
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>
</body>
</html>
