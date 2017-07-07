<?php
define("PAGE_TITLE", "プリパラ｜LINE UP");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
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
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_nav.php"); ?>
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
					<img src="../common/images/img_slidePop03.jpg" alt="プリパラ">
					<div class="btnOfficial"><a href="http://www.tv-tokyo.co.jp/anime/pripara/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						ある日パラ宿町のプリパラ上空に巨大なUFOが現れ、<br>
						キラキラ光るジュエルが降り注いだ。<br>
						<br>
						パラ宿のプリパラで神アイドルグランプリが開催されることになり、<br>
						プリパラのシステムがアップデートされたのだ。<br>
						<br>
						同じころ、らぁらは空から降って来た不思議な赤ちゃんと出会う。<br>
						赤ちゃんはらぁらをママと呼んで離れようとしない。<br>
						<br>
						放っておけず赤ちゃんのお世話をすることになったらぁらだったが・・・
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：タカラトミーアーツ/シンソフィア</dd>
						<dd>アニメーション制作：タツノコプロ/DONGWOO A&E</dd>
						<dd>監督：森脇真琴</dd>
						<dd>シリーズ構成：土屋理敬</dd>
						<dd>キャラクターデザイン：原将治</dd>
						<dd>音楽：斉藤恒芳・石塚玲依</dd>
						<dt>CAST</dt>
						<dd>真中らぁら：茜屋日海夏</dd>
						<dd>南みれぃ：芹澤優</dd>
						<dd>北条そふぃ：久保田未夢</dd>
						<dd>東堂シオン：山北早紀</dd>
						<dd>ドロシー・ウェスト： 澁谷梓希</dd>
						<dd>レオナ・ウェスト：若井友希</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul class="pic3col-sp picS">
						<li><img src="../common/images/lineup_puripara_talk01.png" alt="茜屋日海夏"><p>茜屋日海夏</p></li>
						<li><img src="../common/images/lineup_puripara_talk02.png" alt="芹澤優"><p>芹澤優</p></li>
						<li><img src="../common/images/lineup_puripara_talk03.png" alt="久保田未夢"><p>久保田未夢</p></li>
						<li><img src="../common/images/lineup_puripara_talk01.png" alt="山北早紀"><p>山北早紀</p></li>
						<li><img src="../common/images/lineup_puripara_talk02.png" alt="澁谷梓希"><p>澁谷梓希</p></li>
						<li><img src="../common/images/lineup_puripara_talk03.png" alt="若井友希"><p>若井友希</p></li>
					</ul>
				</div>

			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<img src="../common/images/lineup_puripara_live.jpg" width="400" height="300" alt="LIVE">
				<p>i☆Ris</p>
			</div>
			
			<div class="btnCenter"><a href="index.php">LINE UP一覧へ戻る</a></div>
		</div>		
		<!-- //作品詳細 -->
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/footer.php"); ?>

</body>
</html>
