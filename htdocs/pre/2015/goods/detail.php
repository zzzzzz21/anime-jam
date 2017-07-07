<?php $current = 'goods'; ?>
<?php
  require_once('../common/common.php');
?>

<?php
/********************************************/
/* グッズアイテム詳細 */
/********************************************/
$param = array(
  'mode'=> 5,
  'id'=> $_REQUEST['id'],
  'artist_cd' => 'ANIJ2',
  'env' => 'test'
);

$enc = 'UTF-8';

$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);

$i = 1;

$html = '';

if($xml = @simplexml_load_file($url)){
  if (isset($xml->code)) {
    echo "<!-- error : ".$xml->code." -->\n";
  } else {
    if (isset($xml)) {
      foreach($xml->goods_sub->item as $item) {
        if($item->image) {
          foreach ($item->image as $img) {
            $itme_image[] = $img;
          }
        }
      }
    }

    // echo out($html, (string)$xml->carrier);
  }
} else {
  print "<!-- error : XMLが取得できませんでした。 -->\n";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- CSS -->
<link rel="stylesheet" href="/assets/css/reflesh.css">
  <link rel="stylesheet" href="/assets/css/goods.css">
</head>
<body style=" background-color: transparent;">
  <div id="goods-details" class="cf">
    <div class="photos">
      <div id="mainImage"><img src="<?= $itme_image[0] ?>"></div>
      <ul class="other-item cf">
        <?php foreach ($itme_image as $img): ?>
        <li class="other-item__child<?php if($i === 1) echo ' active'; ?>"><img src="<?= $img ?>" width="60" height="60"></li>
        <?php $i++; endforeach; ?>
      </ul>
    </div>
    <div class="details cf">
      <h3><?= $xml->name; ?></h3>
      <!-- <p class="price">価格：<?= $xml->price; ?>円（税込み）</p> -->
      <p class="description"><?= $xml->text; ?></p>
    </div>
  </div>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
  window.addEventListener('load', function() {
    var $photo = document.getElementById('mainImage'),
        $others = document.querySelectorAll('.other-item__child');

    function changeImage() {
      var src = this.children[0].src;

      for( var i = 0, len = $others.length; i < len; i++ ) {
        $others[i].classList.remove('active');
      }

      this.classList.add('active');

      $photo.children[0].src = src;
    }

    for( var i = 0, len = $others.length; i < len; i++ ) {
      $others[i].addEventListener('click', changeImage, false);
    }
  });
  </script>
</body>
</html>