<?php
if ($arParams["CANONICAL_IBLOCK_ID"] == "Y") {

    $select = array(
        'ID',
        'IBLOCK_ID',
        'NAME',
        'PROPERTY_NEWS',
    );
   $filter = array(
      "IBLOCK_ID" => $arParams["CANONICAL_IBLOCK_ID"],
      "PROPERTY_NEWS" => $arResult["ID"]
   );

   $iterator = CIBlockElement::GetList(array(), $filter, false, array(), $select);
   if ($result = $iterator->GetNext()) {
      $arResult["CANONICAL_LINK"] = $result["NAME"];
      $this->getComponent()->setResultCacheKeys(["CANONICAL_LINK"]);
   }
}
?>