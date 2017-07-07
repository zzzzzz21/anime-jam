<?php
define("PAGE_TITLE", "CAST");
require_once($_SERVER['DOCUMENT_ROOT'] . "/_config.php");
$artist_cd = $artist_cd;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
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



<body id="cast" class="second">
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
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
	
		<div class="eventcast">
			<div class="castCol bgRock">
				<div class="inner">
					<h3><img src="../common/images/logo_rock.png" alt="アニメJAM 2016 ROCK"></h3>
					<h4 class="date">2016.12.10sat</h4>
				</div>
			</div>
			
			<div class="castCol bgVg">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_vgL.png" alt="ヴァンガード　ストライドゲート"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_vg_talk01.png" alt="石井マーク"><p>石井マーク</p></li>
						<li><img src="../common/images/lineup_vg_talk02.png" alt="榎木淳弥"><p>榎木淳弥</p></li>
						<li><img src="../common/images/lineup_vg_talk05.png" alt="岸尾だいすけ"><p>岸尾だいすけ</p></li>
						<li><img src="../common/images/lineup_vg_talk03.png" alt="愛美"><p>愛美</p></li>
						<li><img src="../common/images/lineup_vg_talk04.png" alt="工藤晴香"><p>工藤晴香</p></li>
						<li><img src="../common/images/lineup_vg_talk06.png" alt="森嶋秀太"><p>森嶋秀太</p></li>
					</ul>
				</div>
			</div>

			<div class="castCol bgKp">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_kpL.png" alt="キングプリズム"></h4>
					<ul class="castPic castPic-s2">
						<li><img src="../common/images/lineup_kinpri_talk01.png" alt="寺島惇太"><p>寺島惇太</p></li>
						<li><img src="../common/images/lineup_kinpri_talk02.png" alt="畠中祐"><p>畠中祐</p></li>
						<li><img src="../common/images/lineup_kinpri_talk03.png" alt="五十嵐雅"><p>五十嵐雅</p></li>
						<li><img src="../common/images/lineup_kinpri_talk04.png" alt="永塚拓馬"><p>永塚拓馬</p></li>
						<li><img src="../common/images/lineup_kinpri_talk05.png" alt="武内駿輔"><p>武内駿輔</p></li>
					</ul>
				</div>
			</div>

			<div class="castCol bgOnmyouji">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_onmyoujiL.png" alt="双星の陰陽師"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_sousei_talk01.png" alt="花江夏樹"><p>花江夏樹</p></li>
						<li><img src="../common/images/lineup_sousei_talk02.png" alt="潘めぐみ"><p>潘めぐみ</p></li>
						<li><img src="../common/images/lineup_sousei_talk04.png" alt="芹澤優"><p>芹澤優</p></li>
						<li><img src="../common/images/lineup_sousei_talk03.png" alt="村瀬歩"><p>村瀬歩</p></li>
						<li><img src="../common/images/lineup_sousei_talk05.png" alt=""><p>浪川大輔</p></li>
						<li><img src="../common/images/lineup_sousei_talk06.png" alt=""><p>石川界人</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgBinan">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_binanL.png" alt="美男高校地球防衛部LOVE! LOVE!"></h4>
					<ul class="castPic">
						<li><img src="../common/images/lineup_binan_talk01.png" alt="山本和臣"><p>山本和臣</p></li>
						<li><img src="../common/images/lineup_binan_talk02.png" alt="白井悠介"><p>白井悠介</p></li>
						<li><img src="../common/images/lineup_binan_talk03.png" alt="河本啓佑"><p>河本啓佑</p></li>
						<li><img src="../common/images/lineup_binan_talk04.png" alt="村上喜紀"><p>村上喜紀</p></li>
					</ul>
				</div>
			</div>

			<div class="castCol bgYowapeda">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_yowapedaL.png" alt="弱虫ペダル"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_yowapeda_talk01.png" alt="山下大輝"><p>山下大輝</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk02.png" alt="福島潤"><p>福島潤</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk03.png" alt="岸尾だいすけ"><p>岸尾だいすけ</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk04.png" alt="松岡禎丞"><p>松岡禎丞</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk06.png" alt="宮田幸季"><p>宮田幸季</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk05.png" alt="阿部敦"><p>阿部敦</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk07.png" alt="野島健児"><p>野島健児</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk08.png" alt="遊佐浩二"><p>遊佐浩二</p></li>
						<li><img src="../common/images/lineup_yowapeda_talk09.png" alt="鈴木千尋"><p>鈴木千尋</p></li>
					</ul>
				</div>
				</div>
			

			<!-- live -->
			<div class="castCol bgRock">
				<div class="inner">
					<h3><img src="../common/images/logo_rock.png" alt="アニメJAM 2016 ROCK"></h3>
					<h4 class="date">LIVE</h4>
					<div class="livePic">
						<ul>
							<li><img src="../common/images/cast_aop_live.jpg" alt="A応P"><p>A応P</p></li>
							<li><img src="../common/images/cast_oishi_live.jpg" alt="オーイシマサヨシ"><p>オーイシマサヨシ</p></li>
							<li><img src="../common/images/cast_oxt_live.jpg" alt="O×T"><p>O×T</p></li>
							<li><img src="../common/images/cast_binan_live.jpg" alt="VEPPer ＜別府月彦（CV河本啓佑)、別府日彦（CV村上喜紀）＞"><p>VEPPer<br><span>別府月彦（CV河本啓佑)、別府日彦（CV村上喜紀）</span></p></li>
							<li><img src="../common/images/cast_yowapeda_live.jpg" alt="MAGIC OF LiFE"><p>MAGIC OF LiFE</p></li>
							<li><img src="../common/images/cast_vg_live.jpg" alt="ラミーラビリンス ＜アム(CV.愛美)・ルーナ(CV.工藤晴香)＞"><p>ラミーラビリンス<br><span>＜アム(CV.愛美)・ルーナ(CV.工藤晴香)＞</span></p></li>
						</ul>
						<p>and more！</p>
					</div>
				</div>
			</div>
			<!-- //live -->
			
			<div class="castCol bgPop">
				<div class="inner">
					<h3><img src="../common/images/logo_pop.png" alt="アニメJAM 2016 POP"></h3>
					<h4 class="date">2016.12.11sun</h4>
				</div>
			</div>

			<div class="castCol bgWug">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_wugL.png" alt="Wake Up, Girls!"></h4>
					<ul class="castPic castPic-ss">
						<li><img src="../common/images/lineup_wug_talk01.png" alt="吉岡茉祐"><p>吉岡茉祐</p></li>
						<li><img src="../common/images/lineup_wug_talk02.png" alt="永野愛理"><p>永野愛理</p></li>
						<li><img src="../common/images/lineup_wug_talk03.png" alt="田中美海"><p>田中美海</p></li>
						<li><img src="../common/images/lineup_wug_talk04.png" alt="青山吉能"><p>青山吉能</p></li>
						<li><img src="../common/images/lineup_wug_talk05.png" alt="山下七海"><p>山下七海</p></li>
						<li><img src="../common/images/lineup_wug_talk06.png" alt="奥野香耶"><p>奥野香耶</p></li>
						<li><img src="../common/images/lineup_wug_talk07.png" alt="高木美佑"><p>高木美佑</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgSyakunetsu">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_syakunetsuL.png" alt="灼熱の卓球娘" /></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_syakunetsu_talk01.png" alt="花守ゆみり"><p>花守ゆみり</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk02.png" alt="田中美海"><p>田中美海</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk06.png" alt="高野麻里佳"><p>高野麻里佳</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk05.png" alt="桑原由気"><p>桑原由気</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk04.png" alt="今村彩夏"><p>今村彩夏</p></li>
						<li><img src="../common/images/lineup_syakunetsu_talk03.png" alt="東城日沙子"><p>東城日沙子</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgTaboo">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_tabooL.png" alt="タブー・タトゥー"></h4>
					<ul class="castPic">
						<li><img src="../common/images/lineup_taboo_talk01.png" alt="小松未可子"><p>小松未可子</p></li>
						<li><img src="../common/images/lineup_taboo_talk02.png" alt="安済知佳"><p>安済知佳</p></li>
						<li><img src="../common/images/lineup_taboo_talk03.png" alt="鬼頭明里"><p>鬼頭明里</p></li>
						<li><img src="../common/images/lineup_taboo_talk04.png" alt="喜多村英梨"><p>喜多村英梨</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgTrinity-7">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_trinity-7L.png" alt="ハンドレッド"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_trinity-7_talk01.png" alt="松岡禎丞"><p>松岡禎丞</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk02.png" alt="原由実"><p>原由実</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk03.png" alt="佐倉綾音"><p>佐倉綾音</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk04.png" alt="日笠陽子"><p>日笠陽子</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk05.png" alt="柚木涼香"><p>柚木涼香</p></li>
						<li><img src="../common/images/lineup_trinity-7_talk06.png" alt="村川梨衣"><p>村川梨衣</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgHundred">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_hundredL.png" alt="ハンドレッド"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_hundred_talk01.png" alt="長谷川芳明"><p>長谷川芳明</p></li>
						<li><img src="../common/images/lineup_hundred_talk02.png" alt="大久保瑠美"><p>大久保瑠美</p></li>
						<li><img src="../common/images/lineup_hundred_talk03.png" alt="吉岡茉祐"><p>吉岡茉祐</p></li>
						<li><img src="../common/images/lineup_hundred_talk04.png" alt="奥野香耶"><p>奥野香耶</p></li>
						<li><img src="../common/images/lineup_hundred_talk05.png" alt="Ｍ・Ａ・Ｏ"><p>Ｍ・Ａ・Ｏ</p></li>
						<li><img src="../common/images/lineup_hundred_talk06.png" alt="大坪由佳"><p>大坪由佳</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgPuri">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_puriparaL.png" alt="プリパラ"></h4>
					<ul class="castPic castPic-s">
						<li><img src="../common/images/lineup_puripara_talk01.png" alt="茜屋日海夏"><p>茜屋日海夏</p></li>
						<li><img src="../common/images/lineup_puripara_talk02.png" alt="芹澤優"><p>芹澤優</p></li>
						<li><img src="../common/images/lineup_puripara_talk03.png" alt="久保田未夢"><p>久保田未夢</p></li>
						<li><img src="../common/images/lineup_puripara_talk04.png" alt="山北早紀"><p>山北早紀</p></li>
						<li><img src="../common/images/lineup_puripara_talk05.png" alt="澁谷梓希"><p>澁谷梓希</p></li>
						<li><img src="../common/images/lineup_puripara_talk06.png" alt="若井友希"><p>若井友希</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgYryr">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_yryrL.png" alt="ゆるゆり"></h4>
					<ul class="castPic">
						<li><img src="../common/images/lineup_yuruyuri_talk01.png" alt="三上枝織"><p>三上枝織</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk02.png" alt="大坪由佳"><p>大坪由佳</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk03.png" alt="津田美波"><p>津田美波</p></li>
						<li><img src="../common/images/lineup_yuruyuri_talk04.png" alt="大久保瑠美"><p>大久保瑠美</p></li>
					</ul>
				</div>
			</div>
			
			<div class="castCol bgZero">
				<div class="inner">
					<h4 class="logo"><img src="../common/images/logo_zeroL.png" alt="Re:ゼロから始める異世界生活"></h4>
					<ul class="castPic">
						<li><img src="../common/images/lineup_re-zero_talk01.png" alt="高橋李依"><p>高橋李依</p></li>
						<li><img src="../common/images/lineup_re-zero_talk02.png" alt="内山夕実"><p>内山夕実</p></li>
						<li><img src="../common/images/lineup_re-zero_talk04.png" alt="村川梨衣"><p>村川梨衣</p></li>
					</ul>
				</div>
			</div>
			
			<!-- live -->
			<div class="castCol bgPop">
				<div class="inner">
					<h3><img src="../common/images/logo_pop.png" alt="アニメJAM 2016 ROCK"></h3>
					<h4 class="date">LIVE</h4>
					<div class="livePic">
						<ul>
							<li><img src="../common/images/cast_puripara_live.jpg" alt="i☆Ris"><p>i☆Ris</p></li>
							<li><img src="../common/images/cast_wug_live.jpg" alt="Wake Up, Girls!"><p>Wake Up, Girls!</p></li>
							<li><img src="../common/images/cast_aop-s_live.jpg" alt="A応P"><p>A応P</p></li>
							<li><img src="../common/images/cast_trinity-7_live.jpg" alt="ZAQ"><p>ZAQ</p></li>
							<li><img src="../common/images/cast_re-zero_live.jpg" alt="鈴木このみ"><p>鈴木このみ</p></li>
							<li><img src="../common/images/cast_syakunetsu_live.jpg" alt="雀が原中学卓球部"><p>雀が原中学卓球部</p></li>
							<li><img src="../common/images/cast_hundred_live.jpg" alt="D-selections"><p>D-selections</p></li>
							<li><img src="../common/images/cast_yuruyuri_live.jpg" alt="七森中☆ごらく部"><p>七森中☆ごらく部</p></li>
							<li><img src="../common/images/cast_re-zero-mythandroid_live.jpg" alt="MYTH＆ROID"><p>MYTH＆ROID</p></li>
							<li><img src="../common/images/cast_taboo_live.jpg" alt="May'n"><p>May'n</p></li>
						</ul>
						<p>and more！</p>
					</div>
				</div>
			</div>
			<!-- //live -->


			<div class="castCol bgCastFoot">
				<div class="inner">
					<p>今後も追加キャスト＆アーティスト続々登場！</p>
				</div>
			</div>
			
			
		</div>
		
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>

</body>
</html>
