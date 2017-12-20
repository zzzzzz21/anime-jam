<?php
define("PAGE_TITLE", "GOODS");
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
								$html.= "\n";
								// $html.= '<div class="free-txt_box">' . $xml2->top_text    . '</div>';		//上部フリーテキスト

								$html.= '';
								$html.= "\n";

								foreach($xml2->goods->item as $item) {
									$html.= '<li class="goods-list__item">';
									$html.= "\n";
									$html.= '<a class="goods-detail" href="'.$goods_link.'?'.$item->url.'">';$html.= "\n";
									if (!empty($item->image)) $html.= '<div class="img"><img src="'.$item->image.'"></div>';$html.= "\n";
									$html.= '<div><span class="name">'.$item->title.'</span>';$html.= "\n";
									if (!empty($item->price)) $html.= '<span class="price">'.$item->price.'円（税込）</span>';$html.= "\n";
									$html.= '</div>';
									$html.= "\n";
									$html.= '</a>';$html.= "\n";
									$html.= '</li>';
									$html.= "\n";
								}

								$html.= "\n";
								// $html .= '<div class="free-txt_box">' . $xml2->bottom_text . '</div>';		//下部フリーテキスト
								$html.= "\n";
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
			
			<?php /*
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
			*/ ?>

			<div id="contentsBody">
				<div class="goods-rows">
					<ul class="goods-list">
					<?php echo out($html, (string)$xml->carrier); ?>
					</ul>
				</div>
			</div>
		 
			<section class="free-txt_box">
				<div class="free-txt_box-inner">
					<h3 style="color:#e00;">＜本会場におけるグッズ販売について＞</h3>
					<p>■販売時間：10：00～【夜の部】終演後まで</p>
					<br>
					<p>【ご案内】</p>
					<p>・当日の公演チケットをお持ちでないお客様も、グッズをお買い求めいただけます。</p>
					<p>・当日の状況により、販売時間等予告なく変更する場合がございます。</p>
					<p>・商品画像はすべてイメージです。実際の商品とは異なる場合がございます。</p>
					<p>・商品は数に限りがございますので、なくなり次第終了とさせていただきます。</p>
					<p>・商品によってお一人様あたりのご購入数に上限がある場合がございますので予めご了承ください。</p>
					<p>・会場内の移動や整列等につきましてはスタッフの案内に従ってご利用ください。</p>
					<p>・前日や深夜からのお並びは、近隣の建物等のご迷惑ともなりますので、ご遠慮ください。</p>
					<p>・グッズ販売をご利用のお客様は開演時間にご注意ください。</p>
					<p>・お買い求め頂いた商品・サイズ・数量・お釣銭などは、必ずその場でご確認ください。</p>
					<p>・売場を離れられた後のクレームや、後日のお問い合わせには対応しかねますので、予めご了承ください。</p>
					<p>・お支払いの際、クレジットカードの使用はできません。お支払いは全て現金のみとなります。 予めご了承ください。</p>
					<p>・取扱説明に従わず起きた商品の不良・交換は一切行いませんので、取扱説明書を必ずご確認ください。</p>
					<p>・【夜の部】のグッズのお取り置きはありません。予めご了承ください。</p>
					
					<p><br>できるだけ多くのお客さまがスムーズにご購入いただけるよう、皆さまのご協力をよろしくお願いいたします。</p>
				</div>
			</section>
			
			<section class="free-txt_box">
				<div class="free-txt_box-inner">
					<h3 style="color:#e00;">＜イベントグッズのオンラインショップ受注販売のご案内＞</h3>
					<p>『アニメJAM2017』のイベントグッズをオンラインショップのアニミュゥモにて受注販売いたします！<br>
					受注期間中にご購入いただいたお客様には、2月中の発送にて商品をお届けしますのでぜひご利用ください。</p>
					<p><br>★販売URL（PC・SP・MB共通）</p>
					<p><a href="http://shop.mu-mo.net/ani/event/anime-jam17/" target="_blank">http://shop.mu-mo.net/ani/event/anime-jam17/</a></p>
					<p>※受注開始時間2017年12月24日（日）10時00分までは、アクセスいただいても閲覧できません。</p>
					<p><br>★受注期間</p>
					<p>2017年12月24日（日）10時00分～2018年1月5日（金）11時59分</p>
					<p><br>★受注対象商品</p>
					<p>・パンフレット</p>
					<p>・トレーディング缶バッジ（全28種）</p>
					<p>・アクリルチャーム（全28種）</p>
					<p>・フルカラーTシャツ（全6種）</p>
					<p><br>【ご案内】</p>
					<p>※本イベントの公演チケットをお持ちでない方も購入頂けます。</p>
					<p>※商品のお届けは2月中の発送を予定しております。なお、商品の生産・入荷状況によりお届けスケジュールは前後する場合がありますので予めご了承ください。</p>
					<p>※受注対象商品は、代金引換はご利用いただけません。また、ご注文確定後のキャンセル・変更は一切承っておりませんのでご注意ください。</p>
					<p>※上記商品の決済は、以下の方法によるものとします。</p>
					<p>・クレジットカード </p>
					<p>・各種前払い(コンビニ、電子マネー、ネット銀行) </p>
					<p>・dケータイ払いプラス(ドコモ) </p>
					<p>・まとめてau支払い</p>
					<p>・auかんたん決済</p>
					<p>・S!まとめて支払い</p>
					<p>※「まとめてau支払い」、「S!まとめて支払い」はスマートフォンではご利用いただけません。</p>
					<p>・お客様が選択した決済方法により、支払い期限が異なりますのでご注意ください。</p>
					<p>・「各種前払い」を選択された場合、支払い期限を過ぎるとご注文が取り消されます。購入手続の際、期日をよくご確認の上、お支払いください。</p>
					<p>・詳しくは「お支払いについて」をご参照ください。</p>
				</div>
			</section>
			
			<section class="free-txt_box">
				<div class="free-txt_box-inner">
					<h3 style="color:#e00;">＜ライブビューイング上映劇場のグッズ販売のご案内＞</h3>
					<p>各劇場にてお取り扱いグッズは下記商品となります。</p>
					<p><br>★販売商品</p>
					<p>・パンフレット</p>
					<p><br>【ご案内】</p>
					<p>※劇場での販売開始は、各劇場の開館時刻を予定しております。</p>
					<p>※販売数には限りがございますので、ご了承ください。</p>
				</div>
			</section>
		</div> 
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>