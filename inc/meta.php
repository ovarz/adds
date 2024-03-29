<?php $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y') ?>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="ADDS">
<link rel="preconnect" href="https://www.ov4rz.com">
<link rel="dns-prefetch" href="https://www.ov4rz.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com" />
<title>
  <?php if($web == 'adds') { ?>
    ADDS
  <?php } ?>
  <?php if($web == 'scoutdb') { ?>
    ScoutDB
  <?php } ?>
</title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />
<link rel="preload" href="fonts/nunito/XRXV3I6Li01BKofINeaB.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="img/logo-<?php echo $web; ?>.png" as="image">
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<?php if($web != 'adds') { ?>
  <link rel="preload" href="<?php echo $web; ?>/css/custom-base.css?<?php echo $anticache; ?>" as="style">
<?php } ?>
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<style><?php require ($_SERVER['ADDS'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../vivanetworks/global-js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/rancak-desktop.css?<?php echo $anticache; ?>" media="(min-width:1024px)">
<?php if($web != 'adds') { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $web; ?>/css/custom-base.css?<?php echo $anticache; ?>"/>
<?php } ?>
</head>
<body>