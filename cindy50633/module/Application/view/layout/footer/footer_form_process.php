<?php
use Common\CommonController;

if ($_POST) {
    $mailSubject = '';
    switch ($_POST['mailReason']) {
        case '1':
            $mailSubject = 'job';
            break;
        case '2':
            $mailSubject = 'project';
            break;
        case '3':
            $mailSubject = 'chat';
            break;
    }
    $mailSubjectArr = ['mailSubject' => $mailSubject];
    $mailDataArr = array_merge($_POST, $mailSubjectArr);
    $sendMailDataArr = CommonController::translateFooterForm($mailDataArr);
    // print_r($sendMailDataArr);
    CommonController::sendMail(...$sendMailDataArr);
    // header('Location:' . $_SERVER['REQUEST_URI'], true, 303);
    // exit();
}
 ?>
