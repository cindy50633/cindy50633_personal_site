<?php
namespace Tutorial\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
class TutorialController extends AbstractActionController {
    public function indexAction() {
    $view = new ViewModel([
       'message' => 'Hello, Tutorial'
    ]);
    return $view;
    }
    // public function aboutAction() {
    // }
}
