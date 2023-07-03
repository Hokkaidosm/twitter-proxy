<?php

/**
 * 共通<head>要素
 */

require_once("common.php");
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= resourceWithTs("static/common.css") ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= resourceWithTs("apple-touch-icon.png") ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="<?= resourceWithTs("favicon-32x32.png") ?>" />
<link rel="icon" type="image/png" sizes="192x192" href="<?= resourceWithTs("android-chrome-192x192.png") ?>" />
<link rel="icon" type="image/png" sizes="16x16" href="<?= resourceWithTs("favicon-16x16.png") ?>" />
<link rel="manifest" href="<?= resourceWithTs("site.webmanifest") ?>" />
<link rel="mask-icon" href="<?= resourceWithTs("safari-pinned-tab.svg") ?>" color="#ffffff" />
<meta name="apple-mobile-web-app-title" content="twitter-proxy" />
<meta name="application-name" content="twitter-proxy" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="<?= resourceWithTs("mstile-144x144.png") ?>" />
<meta name="theme-color" content="#ffffff" />
<meta name="description" content="非ログイン時でもツイートを見ることができるサイト" />