<?
	AddEventHandler("main", "OnBeforeEventAdd", array("ChangeOfData", "EventHandler"));// Событие вызывается в момент добавления почтового события 

	Class ChangeOfData
	{
		public static function sendEvent($description)
		{
			CEventLog::Add(array(
			 "SEVERITY" => "INFO",
		      "AUDIT_TYPE_ID" => "FEEDBACK",
		      "MODULE_ID" => "main",
		      "DESCRIPTION" => $description,
			));
		}

		 function EventHandler(&$event, &$lid, &$arFields)
		 {
		 	global $USER;

		 	//echo "<script>alert('fdf')</script>";
		 	if ($event = "FEEDBACK_FORM")
		 	{
		 		if ($USER->IsAuthorized())
		 		{
		 			$arFields["AUTHOR"] = "Пользователь  авторизован: Логин -" . $USER->GetID()." (".$USER->GetLogin().") ".$USER->GetFullName().", данные из формы: ".$arFields["AUTHOR"];
		 		}
		 		else
		 		{
		 			$arFields["AUTHOR"] = "Пользователь не авторизован, данные из формы: ".$arFields["AUTHOR"];
		 		}
		 	}

		 	self::sendEvent("Замена данных в отсылаемом письме - " . $arFields["AUTHOR"]);
		 }
	}

?>