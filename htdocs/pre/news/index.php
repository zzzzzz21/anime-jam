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
					<img src="../common/images/news_title.png" alt="NEWS">
				</h2>
			</section>
			<?php
			/* ====================================================================== */

			/********************************************/
			/* ニュース一覧 */
			/********************************************/

			//詳細リンクURL
			$link_url = "detail.php";

			$param = array(
				'mode'=> 18,

				//アーティストコード
				'artist_cd'	=> $artist_cd,
				'limit'		=> '9',

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
						$html .= "<ul class=\"newsList clearfix\">\n";
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
							$html .= "<div class=\"newsList-wrapper\">\n";
							$html .= "<div class=\"newsList-data\">" .$date. "</div>\n";	//<div class="newsList-data">
							$html .= "<a href=\"".$link."\">\n";			//▼<a href="">
							if($xml->layout->layout_type == 1){
								$html .= "<img src=\"" . $item->thumbnail_image . "\" class=\"newsList-img\" alt=\"" .$title. "\" />\n";	//サムネイル
							}
							$html .= "<p class=\"newsList-text\">".$title."</p>\n";			//<p class="newsList-text">タイトル</p>
							$html .= "</a>\n";							//▲</a>
							$html .= "</div>";
							$html .= "</li>\n";						//▲</li>
						}
						$html .= "</ul>\n";
						// ページング
						if (isset($xml->paging)) {
							$paging = $xml->paging;
							$html .= "<div class=\"backNum\">\n";
							$html .= "<a class=\"backNum-btn_prev\" href='./?page={$paging->back}&year={$select_year}'>&lt;</a>\n";
							$html .= "<ol class=\"backNum-list\">\n";
							foreach ($paging->list->item as $page) {
								if ($_REQUEST['page'] != $page) {
									$html .= "<li><a href='./?page={$page}&year={$select_year}'>{$page}</a></li>\n";
								} else {
									$html .= "<li><span class=\"current\">{$page}</span></li>\n";
								}
							}
							$html .= "</ol>\n";
							$html .= "<a class=\"backNum-btn_next\" href='./?page={$paging->next}&year={$select_year}'>&gt;</a>\n";
							$html .= "</div>\n";
						}
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
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
