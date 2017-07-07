<?php
define("PAGE_TITLE", "Re:ゼロから始める異世界生活｜LINE UP");
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
					<img src="../common/images/img_slidePop07.jpg" alt="Re:ゼロから始める異世界生活">
					<div class="btnOfficial"><a href="http://re-zero-anime.jp/" target="_blank"></a></div>
				</div>
				<div class="story txtArea">
					<h3><span>STORY</span></h3>
					<p>
						無力な少年が手にしたのは、<br>
						死して時間を巻き戻す"死に戻り"の力<br>
						<br>
						コンビニからの帰り道、気が付くと異世界へと<br>
						やってきてしまった普通の高校生、ナツキ・スバル。<br>
						<br>
						右も左も分からない異世界に放り出され、<br>
						途方に暮れていたスバルに手を差し伸べたのは<br>
						美しい銀髪の少女だった。<br>
						<br>
						絶望から救ってくれた少女に何かお返しがしたいスバルは、<br>
						少女の探しものを一緒に探すことに なるのだが……
					</p>
				</div>
				<div class="staff txtArea">
					<h3><span>STAFF <span class="fontS">&amp;</span> CAST</span></h3>
					<dl>
						<dt>STAFF</dt>
						<dd>原作：長月達平</dd>
						<dd>（MF文庫J「Re：ゼロから始める異世界生活」/KADOKAWA刊）</dd>
						<dd>キャラクター原案：大塚真一郎</dd>
						<dd>監督：渡邊政治</dd>
						<dd>シリーズ構成：横谷昌宏</dd>
						<dd>キャラクターデザイン・総作画監督：坂井久太</dd>
						<dd>アニメーション制作：WHITE FOX</dd>
						<dt>CAST</dt>
						<dd>ナツキ・スバル：小林裕介</dd>
						<dd>エミリア：高橋李依</dd>
						<dd>パック：内山夕実</dd>
						<dd>フェルト：赤﨑千夏</dd>
						<dd>レム：水瀬いのり</dd>
						<dd>ラム：村川梨衣</dd>
						<dd>ほか</dd>
					</dl>
				</div>
			</div>
			
			<div id="talk">
				<h3><span>EVENT CAST</span></h3>
				<div class="talkPic">
					<ul>
						<li><img src="../common/images/lineup_re-zero_talk01.png" alt="高橋李依"><p>高橋李依</p></li>
						<li><img src="../common/images/lineup_re-zero_talk02.png" alt="内山夕実"><p>内山夕実</p></li>
						<li><img src="../common/images/lineup_re-zero_talk03.png" alt="水瀬いのり"><p>水瀬いのり</p></li>
						<li><img src="../common/images/lineup_re-zero_talk04.png" alt="村川梨衣"><p>村川梨衣</p></li>
					</ul>
				</div>
			</div>
			
			<div id="live">
				<h3><span>LIVE</span></h3>
				<ul class="live-item">
					<li>
						<img src="../common/images/lineup_re-zero_live.jpg" width="400" height="300" alt="LIVE">
						<p>鈴木このみ</p>
					</li>
					<li>
						<img src="../common/images/ineup_re-zero_live_mythandroid.jpg" width="400" height="300" alt="LIVE">
						<p>MYTH&ROID</p>
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
