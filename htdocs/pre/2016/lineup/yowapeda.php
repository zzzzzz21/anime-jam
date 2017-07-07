<?php
define("PAGE_TITLE", "弱虫ペダル｜LINE UP");
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
		<div class="programCol p_rock" id="p_yowapeda">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slideRock05.jpg" alt="弱虫ペダル">
					<div class="btnOfficial"><a href="http://yowapeda.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						気弱でアニメオタクな主人公、小野田坂道。<br>
						<br>
						彼は、大好きなアニメグッズを買う為、<br>
						毎週、千葉から秋葉原まで往復90kmの道のりを、<br>
						ママチャリで通っていた。<br>
						<br>
						そんな小野田の才能に目を付けた自転車店の娘、寒咲幹や、<br>
						同級生で自転車レーサーの今泉俊輔によって、<br>
						小野田は高校の自転車競技部に入部。<br>
						<br>
						ロードレースの楽しさに魅了され、その才能を開花させていく。
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：渡辺航</dd>
						<dd>監督：鍋島修</dd>
						<dd>アニメーション制作：トムス・エンタテインメント</dd>
						<dt>CAST</dt>
						<dd>小野田坂道：山下大輝</dd>
						<dd>今泉俊輔：鳥海浩輔</dd>
						<dd>鳴子章吉：福島潤</dd>
						<dd>手嶋純太：岸尾だいすけ</dd>
						<dd>青八木一：松岡禎丞</dd>
						<dd>黒田雪成：野島健児</dd>
						<dd>水田信行：鈴木千尋</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul class="pic2col-sp picS">
						<li><img src="../common/images/lineup_yowapeda_talk01.png" alt="山下大輝"><p>山下大輝</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk10.png" alt="鳥海浩輔"><p>鳥海浩輔</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk02.png" alt="福島潤"><p>福島潤</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk03.png" alt="岸尾だいすけ"><p>岸尾だいすけ</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk04.png" alt="松岡禎丞"><p>松岡禎丞</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk06.png" alt="宮田幸季"><p>宮田幸季</p></li>
					</ul>
					<ul class="pic2col-sp picS">
						<li><img src="../common/images/lineup_yowapeda_talk05.png" alt="阿部敦"><p>阿部敦</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk07.png" alt="野島健児"><p>野島健児</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk08.png" alt="遊佐浩二"><p>遊佐浩二</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk09.png" alt="鈴木千尋"><p>鈴木千尋</p></li>
					</ul>
				</div>
			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<ul class="live-item">
					<li>
						<img src="../common/images/lineup_yowapeda_live04.jpg" width="400" height="300" alt="LIVE">
						<p>夏代孝明</p>
					</li>
					<li>
						<img src="../common/images/lineup_yowapeda_live.jpg" width="400" height="300" alt="LIVE">
						<p>MAGIC OF LiFE</p>
					</li>
				</ul>
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
