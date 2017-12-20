<?php
define("PAGE_TITLE", "GOODS & FOOD");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
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
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "../include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>

<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
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
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<div class="title">
				<h2 class="contentsInner-h2"><img src="../common/images/goods_title.png" alt="<?php echo PAGE_TITLE;?>"></h2>
			</div>
			
			<section class="free-txt_box">
				<div class="free-txt_box-inner">
					<h3>【グッズ・フード販売について】</h3>
					<dl>
					<dt>■販売会場：</dt>
					<dd>舞浜アンフィシアター</dd>
					<dt>■販売時間：</dt>
					<dd>12月24日（日）10:00～<br>
					(チケットをお持ちでないお客様の最終入場は13:30となります。)</dd>
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
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>