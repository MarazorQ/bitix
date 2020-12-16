<? 

	AddEventHandler("main", "OnPageStart", array("ChangeData","changeMeta"));

	Class ChangeData
	{

		//const META_IBLOCK_ID = 6;

		function changeMeta()
		{
			CModule::IncludeModule("iblock");
			global $APPLICATION;

			$pageUrl = $APPLICATION->GetCurPage();

			$select = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_DESCRIPTION", "PROPERTY_TITLE");
			$filter = Array("IBLOCK_ID" => 6, "NAME" => $pageUrl);

			$result = CIBlockElement::GetList(Array(), $filter, false, false, $select);

			if ($object = $result->Fetch())
			{
				$APPLICATION->SetPageProperty("title", $object["PROPERTY_TITLE_VALUE"]);
				$APPLICATION->SetPageProperty("description", $object["PROPERTY_DESCRIPTION_VALUE"]);
			}
		}

	}


