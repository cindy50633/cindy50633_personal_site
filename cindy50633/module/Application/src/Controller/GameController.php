<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Common\CommonController;

class GameController extends AbstractActionController {
    public function __construct() {
        $this->langFlag = CommonController::getUserLanguage();
    }
    public function gameAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
    public function tictactoeAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
    public function gameoflifeAction() {
        $this->layout()->langFlag = $this->langFlag;
        return new ViewModel([
            'langFlag' => $this->langFlag
        ]);
    }
}
