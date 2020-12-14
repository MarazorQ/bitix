<?
 $eventManager = \Bitrix\Main\EventManager::getInstance();
	$eventManager->addEventHandler('iblock', 'OnBeforeIBlockElementUpdate', 'productOFF');

    function productOFF($arFields)
    {  
    	global $APPLICATION;

        $select = array("ID", "IBLOCK_ID", "SHOW_COUNTER");
        $filter = Array("IBLOCK_ID"=>$arFields["IBLOCK_ID"], "ID"=>$arFields["ID"]);
        
        $result = CIBlockElement::GetList(
            array(),
            $filter,
            false,
            false,
            $select
        );
            if($temp = $result->Fetch())
            {
                if ( $temp["SHOW_COUNTER"] > 2 && $arFields["ACTIVE"] == "N")
                {
                    $APPLICATION->throwException("Товар невозможно деактивировать, у него  ".$temp["SHOW_COUNTER"] . " просмотров ");
                    return false;
                }
            } 
    }