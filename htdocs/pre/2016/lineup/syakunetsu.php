<?php
define("PAGE_TITLE", "灼熱の卓球娘｜LINE UP");
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
		<div class="programCol p_pop" id="p_syakunetsu">
			<div id="programInfo" class="clearfix">
				<div class="picArea">
					<img src="../common/images/img_slidePop08.jpg" alt="灼熱の卓球娘">
					<div class="btnOfficial"><a href="http://syakunetsu.com/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						王座が陥落し、<br>
						群雄割拠の時代を迎えた中学女子卓球界―。<br>
						<br>
						ある日、雀が原中学校に転校してきた、<br>
						卓球が大好きな旋風こより。<br>
						<br>
						全国を目指す仲間と共に、<br>
						新たな風を巻き起こすことができるのか…！？<br>
						<br>
						少女達の熱き卓球物語、開幕！！
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作:朝野やぐら<br>
						（集英社「となりのヤングジャンプ」連載中）</dd>
						<dd>監督：入江泰浩</dd>
						<dd>シリーズ構成：倉田英之</dd>
						<dd>キャラクターデザイン：杉村絢子</dd>
						<dd>音楽：高橋邦幸（MONACA）</dd>
						<dd>田中秀和（MONACA）</dd>
						<dd>広川恵一（MONACA）</dd>
						<dd>アニメーション制作：キネマシトラス</dd>
						<dt>CAST</dt>
						<dd>旋風こより：花守ゆみり</dd>
						<dd>上矢あがり：田中美海</dd>
						<dd>天下ハナビ：高野麻里佳</dd>
						<dd>出雲ホクト：桑原由気</dd>
						<dd>ムネムネ：今村彩夏</dd>
						<dd>後手キルカ：東城日沙子</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_syakunetsu_talk01.png" alt="花守ゆみり"><p>花守ゆみり</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk02.png" alt="田中美海"><p>田中美海</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk06.png" alt="高野麻里佳"><p>高野麻里佳</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk05.png" alt="桑原由気"><p>桑原由気</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk04.png" alt="今村彩夏"><p>今村彩夏</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk03.png" alt="東城日沙子"><p>東城日沙子</p></li>
					</ul>
				</div>
			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<img src="../common/images/lineup_syakunetsu_live.jpg" width="400" height="300" alt="LIVE">
				<p>雀が原中学卓球部</p>
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
