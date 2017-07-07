<?php
define("PAGE_TITLE", "GOODS & FOODS");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
$artist_cd = $artist_cd;
?>
<?php
/* ====================================================================== */

/********************************************/
/* グッズ一覧 */
/********************************************/
$param = array(
'mode'=> 3,


//アーティストコード
'artist_cd'	=>$artist_cd,
'limit'		=> '1000',

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

//リンク先ファイル名(rootパス）
$goods_link = 'item.php';

$ua = $_SERVER['HTTP_USER_AGENT'];


/*********************************/
$html = '';
$param['user_agent'] = $ua;
$url = $SCRIPT_URL . '?' . http_build_query($param);
if($xml = @simplexml_load_file($url)){
	if (isset($xml->code)) {
		echo "<!-- error : ".$xml->code." -->\n";
	} else {
		if (isset($xml->item)) {
			foreach($xml->item as $item) {
				if (!empty($item->url)) {
					$id = substr($item->url, 3);

					$param2 = array(
						'mode' => 4,
						'id'=> $id,
						'artist_cd' => $artist_cd,
						'env' => $env,
						'user_agent' => $ua
					);

					$url2 = $SCRIPT_URL . '?' . http_build_query($param2);

					if($xml2 = @simplexml_load_file($url2)){
						if (isset($xml2->code)) {
							echo "<!-- error : ".$xml2->code." -->\n";
						} else {
							if (isset($xml2)) {
								$html.= '<div class="goods-row__child">';
								// $html.= '<div class="free-txt_box">' . $xml2->top_text    . '</div>';		//上部フリーテキスト
								$html.= '<h3 class="goods-logo"><img src="img/logo_'.$id.'.png" alt="'.$xml2->group_title.'"></h3>';
								$html.= '<ul class="goods-list">';

								foreach($xml2->goods->item as $item) {
									$html.= '<li class="goods-list__item">';
									if (!empty($item->price)) $html.= '<a class="goods-detail" href="'.$goods_link.'?'.$item->url.'">';
									if (!empty($item->image)) $html.= '<div class="img"><img src="'.$item->image.'"></div>';
									$html.= '<div><span class="name">'.$item->title.'</span>';
									if (!empty($item->price)) $html.= '<span class="price">'.$item->price.'円（税込）</span>';
									$html.= '</div>';
									if (!empty($item->price)) $html.= '</a>';
									$html.= '</li>';
								}

								$html .= '</ul>';
								// $html .= '<div class="free-txt_box">' . $xml2->bottom_text . '</div>';		//下部フリーテキスト
								$html .= '</div>';

							}
						}
					} else {
						print "<!-- error : XMLが取得できませんでした。 -->\n";
					}
				}
			}
		}
	}
} else {
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}
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
<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
<script type="text/javascript" src="../common/js/jquery.matchHeight-min.js"></script>
<script src="../common/js/jquery.colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		if($(window).width() > 767){
			$(".goods-detail").colorbox({
				innerWidth:1000,
				innerHeight:500,
				iframe:true,
				opacity :0.8
			});
			$('.goods-list__item').matchHeight();
		}else{
			$(".goods-detail").colorbox.remove();
		}
	});
</script>
</head>

<body id="goods" class="second">
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
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>

		<section class="free-txt_box">
			<div class="free-txt_box-inner">
				<h3>【グッズ・フード販売について】</h3>
				<dl>
				<dt>■販売会場：</dt>
				<dd>幕張メッセ 国際展示場4ホール</dd>
				<dt>■販売時間：</dt>
				<dd><strong>アニメJAM2016 Rock Stage</strong><br>
				12月10日（土）10:00～14:00<br>
				(チケットをお持ちでないお客様の最終入場は13:30となります。)<br>
				<br>
				<strong>アニメJAM2016 Pop Stage</strong><br>
				12月11日（日）10:00～18:00<br>
				(チケットをお持ちでないお客様の最終入場は17:30となります。)</p>
				</dd>
				</dl>
			</div>
		</section>

		<div id="contentsBody">
			<div class="goods-rows">
				<?php echo out($html, (string)$xml->carrier); ?>
			</div>
		</div>

		<section class="free-txt_box">
			<div class="free-txt_box-inner">
				<h3 style="color:#e00;">【ご注意】</h3>
				<p>・当日の公演チケットをお持ちでないお客様も、グッズをお買い求めいただけます。</p>
				<p>・当日の状況により、販売時間等予告なく変更する場合がございます。</p>
				<p>・JTBオフィシャルツアーから事前にグッズをご購入いただいたお客様は、当日JTBグッズ交換ブースにてお引き取りください。</p>
				<p>・終演後はチケットをお持ちのお客様のみを対象として、グッズ販売を実施します。</p>
				<p>・商品は数に限りがございますので、なくなり次第終了とさせていただきます。</p>
				<p>・会場内の移動や整列等につきましてはスタッフの案内に従ってご利用ください。<br>
				　お買い求め頂いた商品・サイズ・数量・お釣銭などは、必ずその場でご確認ください。</p>
				<p>・売場を離れられた後のクレームや、後日のお問い合わせには対応しかねますので、予めご了承ください。</p>
				<p>・お支払いの際、クレジットカードの使用はできません。お支払いは全て現金のみとなります。予めご了承ください。</p>
				<p>・取扱説明に従わず起きた商品の不良・交換は一切行いませんので、取扱説明書を必ずご確認ください。</p>

				<p><br>※その他、CD、BD＆DVD商品も販売しております。</p>
			</div>
		</section>
	</div>
	<!-- ▲ contents -->

	<div class="pagetop"><a href="#">pagetop</a></div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/footer.php"); ?>

</body>
</html>