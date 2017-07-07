<?php
define("PAGE_TITLE", "キングオブプリズム｜LINE UP");
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
		<div class="programCol p_rock" id="p_kp">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slideRock06.jpg" alt="キングオブプリズム">
					<div class="btnOfficial"><a href="http://kinpri.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						華々しくデビューを果たしたOver The Rainbow<br>
						メンバーのコウジ、ヒロ、カヅキは瞬く間に女子のハートを魅了し、<br>
						一気にプリズムショー界の頂点に上り詰めた。<br>
						<br>
						彼らを目指して、エーデルローズには続々と新入生が入学したが、<br>
						突如「シュワルツローズ」という対立勢力が現れ、<br>
						エーデルローズは苦境に立たされる・・・<br>
						<br>
						そんな時、天才作詞作曲家として<br>
						Over The Rainbowを支えてきたコウジに、<br>
						アメリカから映画音楽制作の巨額オファーが舞い込む。<br>
						4年毎に開催されるプリズムキングカップを翌年に控え、3人の進路は――？<br>
						<br>
						エーデルローズ存亡の危機。<br>
						残された7人のエーデルローズ生。<br>
						シュワルツローズからの刺客。<br>
						そして、突然現れた不思議な少年。<br>
						<br>
						“最も女の子の心をトキめかせたスタァ“ だけが得られる<br>
						プリズムキングになるのは、誰だ！？
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作:タカラトミーアーツ/シンソフィア</dd>
						<dd>監督:菱田正和</dd>
						<dd>脚本:青葉譲</dd>
						<dd>CGディレクター:乙部善弘</dd>
						<dd>キャラクター原案＆デザイン:松浦麻衣</dd>
						<dd>プリズムショー演出:京極尚彦</dd>
						<dd>制作:タツノコプロ</dd>
						<dt>CAST</dt>
						<dd>神浜コウジ:柿原徹也</dd>
						<dd>速水ヒロ:前野智昭</dd>
						<dd>仁科カヅキ:増田俊樹</dd>
						<dd>一条シン:寺島惇太</dd>
						<dd>太刀花ユキノジョウ:斉藤壮馬</dd>
						<dd>香賀美タイガ:畠中祐</dd>
						<dd>十王院カケル:八代拓</dd>
						<dd>鷹梁ミナト:五十嵐雅</dd>
						<dd>西園寺レオ:永塚拓馬</dd>
						<dd>涼野ユウ:内田雄馬</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_kinpri_talk01.png" alt="寺島惇太"><p>寺島惇太</p></li>
						<li><img src="../common/images/lineup_kinpri_talk02.png" alt="畠中祐"><p>畠中祐</p></li>
						<li><img src="../common/images/lineup_kinpri_talk03.png" alt="五十嵐雅"><p>五十嵐雅</p></li>
						<li><img src="../common/images/lineup_kinpri_talk04.png" alt="永塚拓馬"><p>永塚拓馬</p></li>
						<li><img src="../common/images/lineup_kinpri_talk05.png" alt="武内駿輔"><p>武内駿輔</p></li>
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
