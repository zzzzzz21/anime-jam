<?php
define("PAGE_TITLE", "SPECIAL");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<?php
/* ====================================================================== */
$link_url = "detail.php";
$param = array(
	'mode'=> 40,
	'artist_cd'	=> $artist_cd,
	'limit'		=> '100000',
	'page'		=> $_REQUEST['page'],
	'env'=> $env,
);
$enc = 'UTF-8';
/*********************************/
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);
if ( isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on' ) {
	$protocol = 'https://';
} else {
	$protocol = 'http://';
}

$dir=$protocol.$_SERVER['HTTP_HOST'];
if($xml = @simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
	}
}else{
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
			$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
		}else{
			$(".youtube").colorbox.remove();
		}
	});	
</script>

</head>


<body id="special" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/special_title.png" alt="SPECIAL">
				</h2>
			</section>
			<?php if($xml->item != ''):?>
			<ul class="specialList">
				<?php foreach($xml->item as $k=>$v):?>
				<?php
				$id = $v->id;
				$title = $v->title;
				$title_str = mb_strimwidth( $title, 0, 105, "...", "UTF-8" );
				$contents = $v->contents;
				$contents_str = mb_strimwidth( $contents, 0, 105, "...", "UTF-8" );
				$date = $v->date;
				$date_str=date("Y.m.d", strtotime($date));
				$link = "./detail.php?id=".$id;
				$image = $v->thumbnail_image;
				?>
				<li class="specialList__item">
					<a href="<?php echo out($link, (string)$xml->carrier);?>">
						<div class="specialList__thumbnail"><img src="<?php echo out($image, (string)$xml->carrier);?>" alt="<?php echo out($title, (string)$xml->carrier);?>"></div>
						<?php /* ?>
					<p><?php echo out($title_str, (string)$xml->carrier);?></p>
					<?php */ ?>
					</a>
				</li>
				<?php endforeach;?>
			</ul>
<?php
			/*
			<?php
			if (isset($xml->paging)):
			$paging = $xml->paging;
			if(isset($_REQUEST['page'])){
				$cur=$_REQUEST['page'];
			}else{
				$cur=1;
			}
			?>
			<div class="backNum">
				<?php if(1 == $paging->back_flg):?>
				<a class="backNum-btn_prev" href="?page=<?php echo out($cur-1, (string)$xml->carrier);?>">＜</a>
				<?php else:?>
				<?php endif;?>
				<ol class="backNum-list">
				<?php foreach($paging->list->item as $page):?>
				<?php if($cur!= $page):?>
				<li><a class="paging-btn" href="?page=<?php echo out($page, (string)$xml->carrier);?>"><?php echo out($page, (string)$xml->carrier);?></a></li>
				<?php else:?>
				<li><?php echo out($page, (string)$xml->carrier);?></li>
				<?php endif;?>
				<?php endforeach;?>
				<?php if(1 == $paging->next_flg):?>
				<a class="backNum-btn_next" href="?page=<?php echo out($cur+1, (string)$xml->carrier);?>">＞</a>
				<?php else:?>
				<?php endif;?>
				</ol>
				<?php endif;?>
			</div>
*/
?>
			<?php else:?>
			<p class="is--coming">COMING SOON</p>
			<?php endif;?>
		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
