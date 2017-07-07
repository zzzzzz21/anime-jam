<?php
define("PAGE_TITLE", "TOP");
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
<title><?php echo PAGE_TITLE;?>｜<?php include "include/common/title.inc";?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include 'include/common/description.inc';?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include 'include/common/keywords.inc';?>">

<!-- icon -->
<?php require_once "include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php include 'include/common/title.inc'?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include 'include/common/description.inc';?>">
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include 'include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include 'include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include 'include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "include/html/head_css.php"; ?>
<link rel="stylesheet" href="common/css/slick.css">
<link rel="stylesheet" href="common/css/layerBoard.css">
<!-- js -->
<?php require_once "include/html/head_js.php"; ?>
<script src="common/js/slick.min.js"></script>
<script type="text/javascript">
$(function() {
	$('#slides').slick({
		accessibility: false,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 500,
		slidesToScroll: 1
	});
	$('#slides-sp').slick({
		accessibility: false,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 500,
		slidesToScroll: 1
	});
});
</script>

<!-- colorbox -->
<link rel="stylesheet" href="common/css/colorbox.css">
<script src="common/js/jquery.colorbox-min.js"></script>
<script>
$(document).ready(function(){
	if($(window).width() > 767){
		$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
	}else{
		$(".youtube").colorbox.remove();
	}
	
	//nav fix
	var nav = $('#top nav'),
	offset = nav.offset();
	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
			nav.addClass('fixed');
		} else {
			nav.removeClass('fixed');
		}
	});	
	
});	
</script>
<script src="common/js/jquery.cookie.js"></script>
<script src="common/js/jquery.layerBoard.js"></script>
<script>
$(function(){
	$('#layer_board_area').layerBoard({
		fadeTime : 1000,
		alpha:0.8,
		limitMin : 0
	});
})
</script>
</head>

<body id="top">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TB3V54"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TB3V54');</script>
<!-- End Google Tag Manager -->
<!-- layer_board -->
<div id="layer_board_area">
	<div class="layer_board_bg"></div>
	<div class="layer_board">
		<p><img src="common/images/annouce.png" /></p>
		<p class="btn_close"><a href="#"><img src="common/images/btn_close.png" alt="close" width="63" height="12" /></a></p>
	</div>
</div>
<!-- //layer_board -->
	<!-- ▼ header -->
	<header class="pageHeader">
		<!-- #data-mainVisual -->
		<div id="data-mainVisual">
			<ul class="main" id="slides">
				<li><img src="common/images/main_rock_pc.jpg" alt="Rock" class="data-switch"></li>
				<li><img src="common/images/main_pop_pc.jpg" alt="Rock" class="data-switch"></li>
			</ul>
			<p class="siteTTL clearfix">
				<span class="ttlTxt">アニメJAM 2016 幕張メッセ 国際展示場 2016.12.10sat&amp;11sun</span>
				<a href="ticket/"><img src="common/images/top_btnTicket.png" width="362" height="81" alt="チケット受付中　詳しくはこちら"></a>
			</p>
		</div>
		<!-- //#data-mainVisual -->

		<nav class="clearfix">
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_logo.php"); ?>
			<p class="navIco"><span class="op">menu</span><span class="closeIco"></span></p>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<!-- movie -->
		<div id="movie" class="sp_con">
			<div class="title">
				<h2><span>MOVIE</span></h2>
			</div>
			<div class="inner clearfix">
				<a href="http://www.youtube.com/embed/I3_F6y9yn-8?autoplay=1" class="movieThumb youtube"><img src="common/images/img_movieThumb-rock.jpg" alt="MOVIE"></a>
				<a href="http://www.youtube.com/embed/vKGhxXEsX3E?autoplay=1" class="movieThumb youtube"><img src="common/images/img_movieThumb-pop.jpg" alt="MOVIE"></a>
			</div>
		</div>
		<!-- //movie -->

		<!-- infoBlc -->
		<div id="infoBlc">
			<div class="inner clearfix">
				<!-- newsBox -->
				<div class="infoBox" id="newsBox">
					<div class="infoBox-ttl">
						<h2>NEWS</h2>
						<div class="ttlBtn"><a href="news/">MORE</a></div>
					</div>
					<div class="infoBox-body">
<?php
/* ====================================================================== */

/********************************************/
/* ニュース一覧 */
/********************************************/

//詳細リンクURL
$link_url = "news/detail.php";

$param = array(
'mode'=> 18,

//アーティストコード
'artist_cd'	=> $artist_cd,
'limit'		=> '4',

//'year'	=> 表示年
'year'		=> $_REQUEST['year'],
//'page'	=> 表示するページ番号
'page'		=> $_REQUEST['page'],
//環境設定
// production => 本番
// test => テスト
'env'=> $env,
);

// 文字コード
// UTF-8
// EUC-JP
// SJIS
$enc = 'UTF-8';


/*********************************/

$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);

if ( isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on' ) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
$self = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$self_array = explode('?', $self);
$self = $self_array[0];

if($xml = @simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
		$html = "";

		$select_year = '';
		if (isset($xml->years)) {
			$select_year = $xml->years->select_year;
		}

		if(isset($xml->item)){
			$html .= "<ul>\n";
			foreach($xml->item as $item){
				$id = $item->id;
				$title = $item->title;
				$contents = $item->contents;
				$date = $item->date;
				$date_dot = str_replace("/", ".", $date);
				$date_comma = str_replace("/", ",", $date);

				//リンクURL設定
				list($uri, $param) = explode("?", $link_url);
				if($param != "") $param .= "&";
				$param .= "id=".$id;
				$link = $uri."?".$param;

				$html .= "<li>\n";	//▼<li>
				$html .= "<a href='".$link."'>\n";			//▼<a href="">
				if($xml->layout->layout_type == 1){
					$html .= "<img src=\"" . $item->thumbnail_image . "\" />\n";	//サムネイル
				}
				$html .= "<dl>\n";							//▼<dl>
				$html .= "<dt>".$date."</dt>\n";			//<dt>日付</dt>
				$html .= "<dd>".$title."</dd>\n";			//<dd>タイトル</dd>
				$html .= "</dl>\n";							//▲</dl>
				$html .= "</a>\n";							//▲</a>
				$html .= "</li>\n";						//▲</li>
			}
			$html .= "</ul>\n";
		}
		print out($html, (string)$xml->carrier);
	}
}else{
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}

?>


<?php
/**
 * エラーコード一覧
 * 0 : アーティストコード未指定
 * 1 : 処理モード指定
 * 2 : ENV
 * 3 : id未指定
 */
?>
					</div>
				</div>
				<!-- //newsBox -->
				<!-- snsBox -->
				<div class="infoBox" id="snsBox">
					<div class="infoBox-ttl">
						<h2>Twitter</h2>
						<div class="ttlBtn"><a href="https://twitter.com/animejam_staff" target="_blank">FOLLOW</a></div>
					</div>
					<div class="infoBox-body">
						<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#e50038" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
						<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
				<!-- //snsBox -->

			</div>
		</div>
		<!-- //infoBlc -->

		<!-- lineup -->
		<div class="lineup">
			<div class="title">
				<h2><span>LINE UP</span></h2>
			</div>
			
			<div class="clearfix">
				<div class="rockBlc lineupBlc">
					<div class="inner">
						<h3><img src="common/images/logo_rock.png" alt="アニメJAM 2016 ROCK"></h3>
						<h4>2016.12.10sat</h4>
						
						<ul class="clearfix">
							<li>
							<a href="lineup/sousei.php">
								<img src="common/images/logo_onmyouji.png" alt="双星の陰陽師" class="logo">
								<img src="common/images/img_slideRock02.jpg" alt="双星の陰陽師">
							</a>
							</li>
							<li>
							<a href="lineup/kinpri.php">
								<img src="common/images/logo_kp.png" alt="キングオブプリズム" class="logo">
								<img src="common/images/img_slideRock06.jpg" alt="ROCK">
							</a>
							</li>
							<li>
							<a href="lineup/vanguard.php">
								<img src="common/images/logo_vg.png" alt="ヴァンガード　ストライイドゲート" class="logo">
								<img src="common/images/img_slideRock03.jpg" alt="ヴァンガード　ストライイドゲート">
							</a>
							</li>
							<li>
							<a href="lineup/boueibu.php">
								<img src="common/images/logo_binan.png" alt="美男高校地球防衛軍" class="logo">
								<img src="common/images/img_slideRock04.jpg" alt="美男高校地球防衛軍">
							</a>
							</li>
							<li>
							<a href="lineup/yowapeda.php">
								<img src="common/images/logo_yowapeda.png" alt="弱虫ペダル" class="logo">
								<img src="common/images/img_slideRock05.jpg" alt="弱虫ペダル">
							</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="popBlc lineupBlc">
					<div class="inner">
						<h3><img src="common/images/logo_pop.png" alt="アニメJAM 2016 POP"></h3>
						<h4>2016.12.11sun</h4>
						<ul class="clearfix">
							<li>
							<a href="lineup/wug.php">
								<img src="common/images/logo_wug.png" alt="Wake Up, Girls!" class="logo">
								<img src="common/images/img_slidePop06.jpg" alt="Wake Up, Girls!">
							</a>
							</li>
							<li>
							<a href="lineup/syakunetsu.php">
								<img src="common/images/logo_syakunetsu.png" alt="灼熱の卓球娘" class="logo">
								<img src="common/images/img_slidePop08.jpg" alt="灼熱の卓球娘">
							</a>
							</li>
							<li>
							<a href="lineup/tabootatoo.php">
								<img src="common/images/logo_taboo.png" alt="タブー・タトゥー" class="logo">
								<img src="common/images/img_slidePop05.jpg" alt="タブー・タトゥー">
							</a>
							</li>
							<li>
							<a href="lineup/trinity-7.php">
								<img src="common/images/logo_trinity-7.png" alt="トリニティセブン" class="logo">
								<img src="common/images/img_slidePop09.jpg" alt="トリニティセブン">
							</a>
							</li>
							<li>
							<a href="lineup/hundred.php">
								<img src="common/images/logo_hundred.png" alt="ハンドレッド" class="logo">
								<img src="common/images/img_slidePop04.jpg" alt="ハンドレッド">
							</a>
							</li>
							<li>
							<a href="lineup/puripara.php">
								<img src="common/images/logo_puripara.png" alt="プリパラ" class="logo">
								<img src="common/images/img_slidePop03.jpg" alt="プリパラ">
							</a>
							</li>
							<li>
							<a href="lineup/yuruyuri.php">
								<img src="common/images/logo_yryr.png" alt="ゆるゆり" class="logo">
								<img src="common/images/img_slidePop02.jpg" alt="ゆるゆり">
							</a>
							</li>
							<li>
							<a href="lineup/re-zero.php">
								<img src="common/images/logo_zero.png" alt="Re:ゼロから始める異世界生活" class="logo">
								<img src="common/images/img_slidePop07.jpg" alt="Re:ゼロから始める異世界生活">
							</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<!-- lineup -->
		
		<!-- movie -->
		<div id="movie" class="pc_con">
			<div class="title">
				<h2><span>MOVIE</span></h2>
			</div>
			
			<div class="inner clearfix">
				<a href="http://www.youtube.com/embed/I3_F6y9yn-8?autoplay=1" class="movieThumb youtube"><img src="common/images/img_movieThumb-rock.jpg" alt="MOVIE"></a>
				<a href="http://www.youtube.com/embed/vKGhxXEsX3E?autoplay=1" class="movieThumb youtube"><img src="common/images/img_movieThumb-pop.jpg" alt="MOVIE"></a>
			</div>
		</div>
		<!-- //movie -->
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>

</body>
</html>
