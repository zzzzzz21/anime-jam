<?php
define("PAGE_TITLE", "タブー・タトゥー｜LINE UP");
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
		<div class="programCol p_pop" id="p_taboo">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slidePop05.jpg" alt="タブー・タトゥー">
					<div class="btnOfficial"><a href="http://tabootattoo-anime.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						【呪紋】<br>
						それぞれの固有の物質『トリガー』を充填することで起動し、<br>
						『印者（シールド）』と呼ばれる操者の身体的な能力を飛躍的に高め、<br>
						超常的な現象を発現させることができる超科学兵器―――。<br>
						<br>
						赤塚正義【通称セーギ】は、不良に絡まれていた男性を助けた際、<br>
						礼として渡された謎の石を手にした瞬間、<br>
						掌に不思議なタトゥーが刻まれる。<br>
						<br>
						 「その呪紋【タトゥー】、どこで手に入れたの？」<br>
						<br>
						翌日、学校からの帰宅途中に、<br>
						季節外れのコート姿の少女【イジー】に突如襲われたセーギは、<br>
						祖父から教え込まれていた柔術で反撃するものの<br>
						圧倒的な力の差に押され、命の危機に晒される・・・。<br>
						<br>
						偶然にも「呪紋」を手にしてしまった赤塚正義を中心に、<br>
						様々な人々の思惑が渦巻く争いが、いま始まる。
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：真じろう（月刊コミックアライブ連載）</dd>
						<dd>監督：渡部高志</dd>
						<dd>シリーズ構成・脚本：関島眞頼・大武正光（セブンデイズウォー）</dd>
						<dd>キャラクターデザイン：長谷川眞也</dd>
						<dd>音楽：スーパースィープ 細江慎治</dd>
						<dd>アニメーション制作：J.C.STAFF</dd>
						<dt>CAST</dt>
						<dd>セーギ：古川慎</dd>
						<dd>イジー：小松未可子</dd>
						<dd>トーコ：安済知佳</dd>
						<dd>アリヤ：鬼頭明里</dd>
						<dd>トム：杉田智和</dd>
						<dd>リサ：喜多村英梨</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_taboo_talk01.png" alt="小松未可子"><p>小松未可子</p></li>
						<li><img src="../common/images/lineup_taboo_talk02.png" alt="安済知佳"><p>安済知佳</p></li>
						<li><img src="../common/images/lineup_taboo_talk03.png" alt="鬼頭明里"><p>鬼頭明里</p></li>
						<li><img src="../common/images/lineup_taboo_talk04.png" alt="喜多村英梨"><p>喜多村英梨</p></li>
					</ul>
				</div>
			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<img src="../common/images/lineup_taboo_live.jpg" width="400" height="300" alt="LIVE">
				<p>May'n</p>
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
