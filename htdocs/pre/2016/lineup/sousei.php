<?php
define("PAGE_TITLE", "双星の陰陽師｜LINE UP");
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
		<div class="programCol p_rock" id="p_onmyouji">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slideRock02.jpg" alt="双星の陰陽師">
					<div class="btnOfficial"><a href="http://www.sousei-anime.jp/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						現代の裏側に存在する禍野（マガノ）には<br>
						異形の化け物「ケガレ」が巣食う。<br>
						それを祓い清め、人々を守るのが陰陽師である。<br><br>
						
						才能がありながらも陰陽師になることを拒む<br>
						焔魔堂（えんまどう）ろくろは<br>
						神託により陰陽師の夫婦に与えられる<br>
						「双星（そうせい）」の称号を得る。<br><br>
						
						同じく双星となった化野紅緒（あだしのべにお）は<br>
						全てのケガレを祓うことを理想に掲げる少女であった。<br><br>
						
						双星として戦いに巻き込まれていく中で、<br>
						強くなりたいと真に願い戦い続ける紅緒を目の当たりにしたろくろは、<br>
						「雛月の悲劇（ひいなつきのひげき）」以降<br>
						戦うことから逃げ続けていた自分の弱さと向き合う様になる。<br><br>
						
						紅緒に刺激され目を逸らし続けていた過去と向き合ったろくろは<br>
						再び陰陽師として戦うことを決意し、<br>
						二人は共に「双星の陰陽師」として強大なケガレへと立ち向かう！
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：助野嘉昭（「ジャンプSQ.」連載中）</dd>
						<dd>監督：田口智久</dd>
						<dd>副監督：五十嵐達也</dd>
						<dd>シリーズ構成：荒川稔久</dd>
						<dd>キャラクターデザイン：貞方希久子</dd>
						<dd>アニメーション制作：studioぴえろ</dd>
						<dt>CAST</dt>
						<dd>焔魔堂ろくろ：花江夏樹</dd>
						<dd>化野紅緒：潘めぐみ</dd>
						<dd>音海繭良：芹澤優</dd>
						<dd>石鏡悠斗：村瀬歩</dd>
						<dd>きなこ：福山潤</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>

				<!-- sp3通常 -->
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_sousei_talk01.png" alt="花江夏樹"><p>花江夏樹</p></li>
						<li><img src="../common/images/lineup_sousei_talk02.png" alt="潘めぐみ"><p>潘めぐみ</p></li>
						<li><img src="../common/images/lineup_sousei_talk04.png" alt="芹澤優"><p>芹澤優</p></li>
						<li><img src="../common/images/lineup_sousei_talk03.png" alt="村瀬歩"><p>村瀬歩</p></li>
						<li><img src="../common/images/lineup_sousei_talk05.png" alt="浪川大輔"><p>浪川大輔</p></li>
						<li><img src="../common/images/lineup_sousei_talk06.png" alt="石川界人"><p>石川界人</p></li>
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
