<?php
define("PAGE_TITLE", "ハンドレッド｜LINE UP");
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
		<div class="programCol p_pop" id="p_hundred">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slidePop04.jpg" alt="ハンドレッド">
					<div class="btnOfficial"><a href="http://hundred-anime.jp/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						《ハンドレッド》<br>
						―それは地球を襲う謎の生命体《サベージ》に対抗できる唯一の武器。<br>
						《武芸者（スレイヤー）》を目指すため、<br>
						海上学園都市艦《リトルガーデン》に入学を果たす。<br>
						<br>
						だが―<br>
						なぜか自分のことをよく知るルームメイト、<br>
						エミール・クロスフォードに、どこか懐かしい違和感を覚えるハヤト。<br>
						さらに入学早々、学園最強の武芸者《女王》クレア・ハーヴェイから<br>
						決闘を申し込まれてしまい……!?<br>
						<br>
						箕崎准、大熊猫介（ニトロプラス）がタッグを組んだ、<br>
						《究極》の学園バトルアクション、ここに開幕！
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：箕崎准</dd>
						<dd>（GA文庫/SBクリエイティブ刊）</dd>
						<dd>キャラクター原案：大熊猫介（ニトロプラス）</dd>
						<dd>監督：小林智樹</dd>
						<dd>シリーズ構成：白根秀樹</dd>
						<dd>キャラクターデザイン：田中紀衣</dd>
						<dd>アニメーション制作：プロダクションアイムズ</dd>
						<dt>CAST</dt>
						<dd>如月 ハヤト：長谷川芳明</dd>
						<dd>エミール・クロスフォード：大久保瑠美</dd>
						<dd>霧島 サクラ：吉岡茉祐</dd>
						<dd>如月 カレン：奥野香耶</dd>
						<dd>クレア・ハーヴェイ： Ｍ・Ａ・Ｏ</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul class="pic3col-sp picS">
						<li><img src="../common/images/lineup_hundred_talk01.png" alt="長谷川芳明"><p>長谷川芳明</p></li>
						<li><img src="../common/images/lineup_hundred_talk02.png" alt="大久保瑠美"><p>大久保瑠美</p></li>
						<li><img src="../common/images/lineup_hundred_talk03.png" alt="吉岡茉祐"><p>吉岡茉祐</p></li>
						<li><img src="../common/images/lineup_hundred_talk04.png" alt="奥野香耶"><p>奥野香耶</p></li>
						<li><img src="../common/images/lineup_hundred_talk05.png" alt="Ｍ・Ａ・Ｏ"><p>Ｍ・Ａ・Ｏ</p></li>
						<li><img src="../common/images/lineup_hundred_talk06.png" alt="大坪由佳"><p>大坪由佳</p></li>
					</ul>
				</div>

			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<img src="../common/images/lineup_hundred_live.jpg" width="400" height="300" alt="LIVE">
				<p>D-selections</p>
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
