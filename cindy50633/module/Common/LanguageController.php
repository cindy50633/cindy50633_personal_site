<?php
// namespace Common;
//
// class LanguageService {
//     public static function getUserLanguage() {
//         $currentUrl = $_SERVER['REQUEST_URI'];
//         $acceptLang = ['en', 'ja', 'zh'];
//         if (basename($currentUrl)) {
//             $langFlag = basename($currentUrl);
//         } else {
//             $langFlag = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//         }
//         $langFlag = in_array($langFlag, $acceptLang) ? $langFlag : 'en';
//         return $langFlag;
//     }
// }
