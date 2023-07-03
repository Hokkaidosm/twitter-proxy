<?php

/**
 * 共通関数
 */
if (!defined("common")) {
    define("common", "1");

    /**
     * htmlspecialcharsのショートハンド
     * @param string $text
     * @return string
     */
    function h($text)
    {
        return htmlspecialchars($text);
    }

    /**
     * タイムスタンプ付きのURLを返す
     * @param string $url ルートからの相対パス（css/common.cssなど）
     * @return string
     */
    function resourceWithTs($url)
    {
        $url = ltrim($url, "/");
        $file = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . DIRECTORY_SEPARATOR . $url;
        if (file_exists($file)) {
            if (strpos($url, "?") !== false) {
                return "/" . $url . "&ts=" . filemtime($file);
            }
            return "/" . $url . "?ts=" . filemtime($file);
        }
        return "/" . $url;
    }
}
