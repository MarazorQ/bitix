<?

	AddEventHandler("main", "OnBuildGlobalMenu", array("ChangeMenu","MyOnBuildGlobalMenu"));

	Class ChangeMenu
	{
		const GROUP_OF_USER_ID = 5;// так быстрее в случае чего править.

		function MyOnBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)
		{
			global $USER;
			
			if ($USER->IsAdmin())
			{
				return false;
			}

			if (in_array(self::GROUP_OF_USER_ID, $USER->GetUserGroupArray()))
			{
				// удалаем меню кромя контент
				foreach ($aGlobalMenu as $key => $value) 
				{
					if ($key !== 'global_menu_content')
					{
						unset($aGlobalMenu[$key]);
					}
				}
				// удаляем пункты подменю 
				foreach ($aModuleMenu as $key => $value) 
				{
					if ($value['items_id'] !== 'menu_iblock_/news')
					{
						unset($aModuleMenu[$key]);
					}
				}
		    }
		}

	}
	