<?php
namespace Tutorial\View\Helper;
use Zend\View\Helper\AbstractHelper;
class TestHelper extends AbstractHelper {
   public function __invoke() {
      $output = "I am from test helper";
      return htmlspecialchars($output, ENT_QUOTES, 'UTF-8');
   }
}
