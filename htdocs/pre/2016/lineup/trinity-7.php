<?php
define("PAGE_TITLE", "トリニティセブン｜LINE UP");
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
		<div class="programCol p_pop" id="p_trinity-7">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slidePop09.jpg" alt="トリニティセブン">
					<div class="btnOfficial"><a href="http://movie.trinity-7.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>世界は不条理に満ちている。<br>
						<br>
						そんな世界に抗う"魔王因子"を持つ少年、<br>
						春日アラタが出会った７人の美少女。<br>
						<br>
						人の根源に潜む七つの大罪――<br>
						"傲慢""強欲""嫉妬""憤怒""暴食""色欲""怠惰"の秘奥を極めた<br>
						７人の魔道士・トリニティセブン。<br>
						両者が邂逅を果たした時、世界の存亡を決する運命の扉が開け放たれる。<br>
						<br>
						果たしてアラタは世界を滅ぼす『魔王』となるのか、それとも――<br>
						<br>
						加速する物語は、ついにスクリーンへ。<br>
						<br>
						運命も、未来も。<br>
						すべては自分が支配する。
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：サイトウケンジ・奈央晃徳<br>(KADOKAWA　月刊ドラゴンエイジ連載)</dd>
						<dd>監督：錦織博</dd>
						<dd>脚本：サイトウケンジ</dd>
						<dd>脚本協力：吉野弘幸</dd>
						<dd>キャラクターデザイン：友岡新平</dd>
						<dd>音楽：TECHNOBOYS PULCRAFT GREEN-FUND</dd>
						<dd>アニメーション制作：セブン・アークス・ピクチャーズ</dd>
						<dd>配給：エイベックス・ピクチャーズ</dd>
						<dt>CAST</dt>
						<dd>春日アラタ：松岡禎丞</dd>
						<dd>浅見リリス：原由実</dd>
						<dd>神無月アリン：内田彩</dd>
						<dd>風間レヴィ：佐倉綾音</dd>
						<dd>山奈ミラ：日笠陽子</dd>
						<dd>不動アキオ：柚木涼香</dd>
						<dd>倉田ユイ：村川梨衣</dd>
						<dd>リーゼロッテ=シャルロック：東山奈央</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_trinity-7_talk01.png" alt="松岡禎丞"><p>松岡禎丞</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk02.png" alt="原由実"><p>原由実</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk03.png" alt="佐倉綾音"><p>佐倉綾音</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk04.png" alt="日笠陽子"><p>日笠陽子</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk05.png" alt="柚木涼香"><p>柚木涼香</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk06.png" alt="村川梨衣"><p>村川梨衣</p></li>
					</ul>
				</div>
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
