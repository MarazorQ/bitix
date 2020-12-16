<? 

	AddEventHandler("main", "OnPageStart", array("ChangeData","changeMeta"));

	Class ChangeData
	{

		function changeMeta()
		{
			CModule::IncludeModule("iblock");
			global $APPLICATION;

			$pageUrl = $APPLICATION->GetCurPage();

			$select = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_DESCRIPTION", "PROPERTY_TITLE");
			$fileter = Array("IBLOCK_ID" => 6, "NAME" => $pageUrl);

			$result = CIBlockElement::GetList(Array(), $filter, false, false, $select);

			if ($objectt = $result->Fetch())
			{
				$APPLICATION->SetPageProperty("title", $object["PROPERTY_TITLE_VALUE"]);
				$APPLICATION->SetPageProperty("description", $object["PROPERTY_DESCRIPTION_VALUE"]);
			}
		}

	}
