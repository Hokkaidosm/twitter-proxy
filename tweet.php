<?php

/**
 * ツイート表示
 */
require_once("./include/common.php");

$name = filter_input(INPUT_GET, 'name', FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^[0-9a-zA-Z_]+$/')));
if (is_null($name)) {
    // 名前がおかしいのでトップに戻す
    header("Location: /");
    exit;
}

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (is_null($id)) {
    // IDがおかしいのでトップに戻す
    header("Location: /");
    exit;
}

$tweetUrl = "https://twitter.com/" . $name . "/status/" . $id;
$oEmbedUrl = "https://publish.twitter.com/oembed";

$context = stream_context_create(
    [
        "http" =>
        [
            "ignore_errors" => true
        ]
    ]
);

$embed = "";
$oembedJson = file_get_contents($oEmbedUrl . "?url=" . $tweetUrl, false, $context);
//ステータスコードを正規表現で得る
preg_match("/[0-9]{3}/", $http_response_header[0], $stcode);
if (intval($stcode[0]) == 200) {
    // 取得成功
    $oembed = json_decode($oembedJson);
    $embed = $oembed->html;
} else {
    // 取得失敗
    $embed = "ツイートの取得に失敗しました";
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
        <p id="embeded"><?= $embed ?></p>
    </main>
    <?php require_once("./include/footer.php"); ?>
</body>

</html>