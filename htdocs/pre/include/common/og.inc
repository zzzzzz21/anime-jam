<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include ($_SERVER['DOCUMENT_ROOT'] . "/include/common/title.inc");?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include ($_SERVER['DOCUMENT_ROOT'] . "/include/common/description.inc");?>">
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include($_SERVER['DOCUMENT_ROOT'] .  "/include/common/title.inc");?>">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/include/common/fb-app_id.inc"); ?>">
<meta property="og:type" content="<?php if ( PAGE_TITLE == TOP ){ echo 'website'; } else { echo 'article'; };?>">
