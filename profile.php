<?php

/**
 * タイムライン表示
 */
require_once("./include/common.php");

$name = filter_input(INPUT_GET, 'name', FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^[0-9a-zA-Z_]+$/')));
if (is_null($name)) {
    // 名前がおかしいのでトップに戻す
    header("Location: /");
    exit;
}
?>
<!doctype html>
<html>

<head>
    <title>twitter-proxy | @<?= h($name) ?></title>
    <?php require_once("./include/head.php"); ?>
</head>

<body>
    <main>
        <p><a class="twitter-timeline" href="https://twitter.com/<?= h($name) ?>?ref_src=twsrc%5Etfw" data-tweet-limit="20" data-dnt="true">Tweets by <?= h($name) ?></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </p>
    </main>
    <?php require_once("./include/footer.php"); ?>
</body>

</html>