<?php
namespace Application\View\Helper;
use Laminas\View\Helper\AbstractHelper;
class ContentHelper extends AbstractHelper {
    public function __invoke($targetTextPath, $conditionsPath, $cssClass='') {
       $output = "I am from test helper";
       $resultText = $this->addTextLink($targetTextPath, $conditionsPath, $cssClass='');
       return $resultText;
       // return htmlspecialchars($test, ENT_QUOTES, 'UTF-8');
    }
    public function addTextLink($targetTextPath, $conditionsPath, $cssClass='') {
        $targetText = file_get_contents($targetTextPath);
        $checkPairsText = file_get_contents($conditionsPath);
        $checkPairsArr = json_decode($checkPairsText, true);
        if ($checkPairsArr) {
            foreach ($checkPairsArr as $keyword => $link) {
                $cssStyleText = "<a href='{$link}' target='_blank' class='{$cssClass}'>{$keyword}</a>";
                $targetText = str_replace($keyword, $cssStyleText, $targetText);
            }
        }
        return $targetText;
    }
}
