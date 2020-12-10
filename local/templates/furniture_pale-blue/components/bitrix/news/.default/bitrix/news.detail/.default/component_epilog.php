<?php 
  // echo '<pre>' . print_r($arResult,1) . '</pre>';
   if (!empty($arResult["CANONICAL_LINK"])) {
   $APPLICATION->SetPageProperty("canonical", $arResult["CANONICAL_LINK"]);
}
?>