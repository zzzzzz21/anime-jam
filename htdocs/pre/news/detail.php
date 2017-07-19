<?php
define("PAGE_TITLE", "NEWS");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
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
<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc";?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta property="og:type" content="website">
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>

</head>


<body id="news" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/news_title.png" alt="EVENT INFO">
				</h2>
			</section>
			<section class="newsDetail clearfix">
				<div class="newsDetail-wrapper">
				<?php
				/* ====================================================================== */

				/*********************************/
				/* ニュース詳細 */
				/*********************************/
				$param = array(
					'mode'=> 19,
					'id'=> $_REQUEST['id'],

					//アーティストコード
					'artist_cd'	=> $artist_cd,

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

				if($xml = @simplexml_load_file($url)){
					if(isset($xml->code)){
						print "<!-- error : ".$xml->code." -->\n";
					}else{
						if(isset($xml->item)){
							$title = $xml->item->title;
							$contents = $xml->item->contents;
							$date = $xml->item->date;
							$date_dot = str_replace("/", ".", $date);
							$date_comma = str_replace("/", ",", $date);

							$html .= "<div class=\"newsDetail-data\">".$date."</div>\n";		//日付
							$html .= "<div class=\"newsDetail-inner\">\n";
							$html .= "<h3 class=\"newsDetail-inner_ttl\">".$title."</h3>\n";
							$html .= "<div class=\"snsBtn\">\n";
							$html .= "<div class=\"social clearfix\"><script type=\"text/javascript\">shareSoc('".$title."', 'tw,fl')</script></div>\n";   //SNS
							$html .= "</div>\n";
							$html .= "<div class=\"newsDetail-inner_text\">\n".$contents."</div>\n";
							$html .= "</div>\n";
							$html .= "</div>\n";
							print out($html, (string)$xml->carrier);
						}
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
			</section>
			<a href="../news/" class="newsDetail-btn">
				<img src="../common/images/news-detail_btn.png" alt="ニュース一覧へ">
			</a>
		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
