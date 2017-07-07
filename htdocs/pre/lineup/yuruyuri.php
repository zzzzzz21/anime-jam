<?php
define("PAGE_TITLE", "ゆるゆり｜LINE UP");
require_once($_SERVER['DOCUMENT_ROOT'] . "/_config.php");
$artist_cd = $artist_cd;
?>
<!DOCTYPE html>
<html lang="ja">
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
</head>

<body id="lineup-detail" class="second">
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
			<h2><span>LINE UP</span></h2>
		</div>
	
		<!-- 作品詳細 -->
		<div class="programCol p_pop" id="p_puripara">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slidePop02.jpg" alt="ゆるゆり">
					<div class="btnOfficial"><a href="http://yuruyuri.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						変わらない毎日がまだまだ続くんだ！<br>
						<br>
						赤座あかり・歳納京子・船見結衣・吉川ちなつの<br>
						4人が行っている部活動「ごらく部」。<br>
						<br>
						それに目をつけ、ちょっかい（？）を出し続ける「生徒会」。<br>
						<br>
						愛が溢れまくりで明日から元気に生きていけること請け合いの<br>
						まったりストーリーが、テレビに帰ってくる！
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：なもり</dd>
						<dd>監督：畑博之</dd>
						<dd>シリーズ構成：畑博之・深見真</dd>
						<dd>キャラクターデザイン・総作画監督：谷口元浩</dd>
						<dd>アニメーション制作：TYOアニメーションズ</dd>
						<dt>CAST</dt>
						<dd>赤座あかり：三上枝織</dd>
						<dd>歳納京子：大坪由佳</dd>
						<dd>船見結衣：津田美波</dd>
						<dd>吉川ちなつ：大久保瑠美</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_yuruyuri_talk01.png" alt="三上枝織"><p>三上枝織</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk02.png" alt="大坪由佳"><p>大坪由佳</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk03.png" alt="津田美波"><p>津田美波</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk04.png" alt="大久保瑠美"><p>大久保瑠美</p></li>
					</ul>
				</div>
			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<img src="../common/images/lineup_yuruyuri_live.png" width="400" height="300" alt="LIVE">
				<p>七森中☆ごらく部 （三上枝織、大坪由佳、津田美波、大久保瑠美）</p>
			</div>
			
			<div class="btnCenter"><a href="index.php">LINE UP一覧へ戻る</a></div>
		</div>		
		<!-- //作品詳細 -->
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>

</body>
</html>
