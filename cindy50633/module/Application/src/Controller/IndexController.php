<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\View\Renderer\PhpRenderer;
use Laminas\View\Resolver;
use Common\CommonController;

class IndexController extends AbstractActionController {
    public function __construct() {
        $this->langFlag = CommonController::getUserLanguage();
    }
    public function indexAction() {
        $this->layout()->langFlag = $this->langFlag;
        $view = new ViewModel([
            'langFlag' => $this->langFlag
        ]);
        // $view->setTemplate('/application/index/about/ja/index.phtml');
        // $this->_helper->viewRenderer('/about/ja/index.phtml');
        return $view;
    }
    public function aboutAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
    public function linksAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
    public function recommendAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
    public function accomplishmentAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
}
