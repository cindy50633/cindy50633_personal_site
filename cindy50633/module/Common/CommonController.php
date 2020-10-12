<?php
namespace Common;

class CommonController {
    public static function getUserLanguage() {
        $currentUrl = $_SERVER['REQUEST_URI'];
        $acceptLang = ['en', 'ja', 'zh'];
        if (basename($currentUrl)) {
            $langFlag = basename($currentUrl);
        } else {
            $langFlag = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }
        $langFlag = in_array($langFlag, $acceptLang) ? $langFlag : 'en';
        return $langFlag;
    }

    public static function replaceLastSubstr($search, $replace, $subject) {
        $pos = strrpos($subject, $search);
        if($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }

    public static function getCurrentPage() {
        $currentPage = explode('/',$_SERVER['REQUEST_URI'])[1];
        if ($currentPage == 'index' || !$currentPage) {
            $currentPage = 'home';
        }
        return $currentPage;
    }
}
