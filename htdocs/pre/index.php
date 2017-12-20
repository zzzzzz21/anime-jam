<?php
define("PAGE_TITLE", "TOP");
require_once "_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<?php require_once "include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "include/html/head_favicon.inc"; ?>

<!--ogp -->
<?php require_once "include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "include/html/head_css.php";?>
<link rel="stylesheet" href="common/css/layerBoard.css">

<!-- js -->
<?php require_once "include/html/head_js.php";?>

<!-- colorbox -->
<?php require_once "include/html/head_js-colorbox.php";?>


<!-- simplyscroll -->
<script src="common/js/jquery.simplyscroll.min.js"></script>

<!-- custom content scrollbar -->
<link rel="stylesheet" href="common/css/jquery.mCustomScrollbar.min.css">
<script src="common/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	$(function(){
		$(".contentsInner-news_tl").mCustomScrollbar();
		$(".contentInner-twitter_content").mCustomScrollbar();
	});
</script>
<link rel="stylesheet" href="common/css/colorbox.css">

<!-- layerBoard -->
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
<?php require_once "include/common/gtm-body.inc"; ?>
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
<?php require_once "include/html/header.php"; ?>
	
	<!-- ▼ contents -->
	<div id="contents">
		<!-- PCとSPにてコンテンツの表示順が違うため、PCとSPのソースを分けます -->
		<!-- PC版 -->
		<div class="contentsInner pc_con">
			<div class="contentsInner-news">
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
							$html .= "<ul class=\"contentsInner-news_tl\">\n";
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

								$html .= "<li class=\"news_tl-li\">\n";	//▼<li>
								$html .= "<a href='".$link."'>\n";			//▼<a href="">
								$html .= "<div class=\"news_tl-img\">\n";
								if($xml->layout->layout_type == 1){
									$html .= "<img src=\"" . $item->thumbnail_image . "\" />\n";	//サムネイル
								}
								$html .= "</div>\n";
								$html .= "<div class=\"news_tl-text\">\n";
								$html .= "<p class=\"tl-text_date\">".$date."</p>\n";			//日付
								$html .= "<p class=\"tl-text_detail\">".$title."</p>\n";			//タイトル
								$html .= "</div>\n";
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
			<div class="contentsInner-twitter">
				<div class="contentInner-twitter_content">
					<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#FFF" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class="contentsInner-ticket">
			<?php
				/*
				<a href="http://w.pia.jp/t/anime-jam/" target="_blank"><img src="common/images/flame_ticket.png" alt="チケット受付中 2017/12/24 舞浜アンフィシアター"></a>
				*/
			?>
				<a href="liveviewing/"><img src="common/images/flame_live-viewing.png" alt="ライブビューイングも開催！"></a>
			</div>
		</div>
		<?php
		/*
			<div class="contentsInnner-movie pc_con">
				<div class="contentsInner-movie_content">
					<a href="http://www.youtube.com/embed/XWpxsGf2ObU" class="movieThumb youtube"><img src="common/images/top_youtube_img01.jpg" alt=""></a>
				</div>
			</div>
		*/
		?>
		<!-- SP版 -->
		<div class="contentsInner sp_con">
			<div class="contentsInner-spVisual sp_con">
				<img src="common/images/top_kv-3.jpg?20171023" alt="">
				<h2 class="linep-title"><img src="common/images/top_ttl_lineup.png" alt="Line Up"></h2>
				<p><a href="lineup/puripara/" title="アイドルタイムプリパラ"><img src="common/images/top_puripara.jpg" alt="アイドルタイムプリパラ"></a></p>
				<p><a href="lineup/wug/" title="Wake Up, Girls! 新章"><img src="common/images/top_wug.jpg" alt="Wake Up, Girls! 新章"></a></p>
				<p><a href="lineup/trinity7/" title="劇場版トリニティセブン"><img src="common/images/top_trinity7.jpg" alt="劇場版トリニティセブン"></a></p>
				<p><a href="lineup/kfriends/" title="けものフレンズ"><img src="common/images/top_kfriends.jpg" alt="けものフレンズ"></a></p>
				<p><a href="lineup/guruguru/" title="魔法陣グルグル"><img src="common/images/top_guruguru.jpg" alt="魔法陣グルグル"></a></p>
				<p><a href="lineup/youkai/" title="妖怪ウォッチ"><img src="common/images/top_youkai.jpg" alt="妖怪ウォッチ"></a></p>
				<p><a href="lineup/renaiboukun/" title="恋愛暴君"><img src="common/images/top_renaiboukun.jpg" alt="恋愛暴君"></a></p>
			</div>
			<div class="contentsInner-ticket">
				<a href="liveviewing/"><img src="common/images/flame_live-viewing.png" alt="ライブビューイングも開催！"></a>
			</div>
			<div class="contentsInner-news">
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
							$html .= "<ul class=\"contentsInner-news_tl\">\n";
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

								$html .= "<li class=\"news_tl-li\">\n";	//▼<li>
								$html .= "<a href='".$link."'>\n";			//▼<a href="">
								$html .= "<div class=\"news_tl-img\">\n";
								if($xml->layout->layout_type == 1){
									$html .= "<img src=\"" . $item->thumbnail_image . "\" />\n";	//サムネイル
								}
								$html .= "</div>\n";
								$html .= "<div class=\"news_tl-text\">\n";
								$html .= "<p class=\"tl-text_date\">".$date."</p>\n";			//日付
								$html .= "<p class=\"tl-text_detail\">".$title."</p>\n";			//タイトル
								$html .= "</div>\n";
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
			<div class="contentsInnner-movie sp_con">
				<div class="contentsInner-movie_content">
					<a href="http://www.youtube.com/embed/XWpxsGf2ObU" class="movieThumb youtube"><img src="common/images/top_youtube_img01.jpg" alt=""></a>
				</div>
			</div>
			<div class="contentsInner-twitter">
				<div class="contentInner-twitter_content">
					<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#FFF" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
		<!-- colorbox -->
		<script src="common/js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				if($(window).width() > 767){
					$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
				}else{
					$(".youtube").colorbox.remove();
				}

			});	
		</script>
	</div>
	<!-- ▲ contents -->

<?php require_once "include/html/footer.php"; ?>

</body>
</html>
