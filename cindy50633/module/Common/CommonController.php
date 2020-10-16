<?php
namespace Common;

use Laminas\Mail;
use Laminas\Mail\Transport\Sendmail as SendmailTransport;

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
        $currentPage = explode('/', $_SERVER['REQUEST_URI'])[1];
        if ($currentPage == 'index' || !$currentPage) {
            $currentPage = 'home';
        }
        return $currentPage;
    }

    public static function sendMail($recipientMail, $recipientName, $senderMail, $senderName, $mailSubject, $mailContent) {
        $mail = new Mail\Message();
        $mail->setBody($mailContent);
        $mail->setFrom($senderMail, $senderName);
        $mail->addTo($recipientMail, $recipientName);
        print($senderName);
        // $mail->setSubject("TESTTT");
        //
        $mail->setSubject($mailSubject);
        $transport = new SendmailTransport();
        $transport->send($mail);
    }

    public static function translateFooterForm($mailDataArr, $recipientName='Cindy', $recipientMail='cindy50633@gmail.com') {
        $senderName = $mailDataArr['senderName'];
        $senderMail = $mailDataArr['senderMail'];
        $mailSubject = $mailDataArr['mailSubject'];
        $mailContent = $mailDataArr['messageText'];
        return [$recipientMail, $recipientName, $senderMail, $senderName, $mailSubject, $mailContent];
    }
}
