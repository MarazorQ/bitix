<? 
use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


    class DvSimpleComp extends CBitrixComponent 
    {

	    /*
		 * Component constructor.
		 * @param CBitrixComponent | null $component
		 */
		public function __construct($component = null)
		{
			parent::__construct($component);
		}

	    /*
		 * Проверка наличия модулей требуемых для работы компонента
		 * @return bool
		 * @throws Exception
		 */
		private function _checkModules()
		{
			if (!Loader::includeModule('iblock')) 
			{
				throw new \Exception(GetMessage('CLASS_ERROR_MESAGE'));
			}

			return true;
		}

		/*
		 * Проверка наличия установленного параметра
		 */
		private function _chache()
		{
			if (!isset($arParams["CACHE_TIME"]))
				{
					$arParams["CACHE_TIME"] = 36000000;
				}
		}

		/*
		 * Обертка над глобальной переменной
		 * @return CAllMain|CMain
		 */
		private function _app()
		{
			global $APPLICATION;
			return $APPLICATION;
		}

        private function _usser()
        {
            global $USER;
            return $USER;
        }

		/*
		 * Подготовка результатов компонента
		 * @res $arResult
		 * @return resault
		 */
        public function prepareComponentResault() 
        {   
            // вытакскиваем классификатор

            $arFilterSizer = ['IBLOCK_ID' => $this->arParams['SIZER_IBLOCK_ID']];
            $arSelectSizer = ['IBLOCK_ID', 'ID', 'NAME'];
            $resSizer = CIBlockElement::GetList([], $arFilterSizer, false, false, $arSelectSizer);
        
            while ($sizerData = $resSizer->Fetch()) 
            {
                $arSizerID[] =  $sizerData['ID'];
                $result[$sizerData['ID']] = [$sizerData['NAME'], 'ELEMS' => []];
            }
            // количество разделов 
            $countElems = count($arSizerId);
        
            $arFilterDir = ['IBLOCK_ID' => $this->arParams['CATALOG_IBLOCK_ID'],'PROPERTY_FIRM.ID' => $arSizerId,];
            $arSelectDir = ['IBLOCK_ID', 'ID', 'NAME', 'PROPERTY_FIRM', 'PROPERTY_PRICE', 'PROPERTY_MATERIAL', 'PROPERTY_ARTNUMBER', 'DETAIL_PAGE_URL'];
            $resDir = CIBlockSection::GetList([], $arFilterDir, false, $arSelectDir);

            // расскидываем товары по классификаторам
            while ($dirData = $resDir->GetNextElement()) 
            {   
                $arDir= $dirData->GetFields();
                $result[$arDir['PROPERTY_FIRM_VALUE']]['ELEMS'][] = $arDir;
                
            }

            $result['COUNT_ELEMS'] = $countElems;
            return $result;
        }

      /*
	 * Точка входа в компонент
	 * По сути перекрытие component.php
	 * Должна содержать только последовательность вызовов вспомогательых ф-ий и минимум логики
	 * всю логику стараемся разносить по классам и методам
	 */
        public function executeComponent() 
        {
        	$this->_checkModules();
        	$this->_chache();
        	$ap = $this->_app();
            $user = $this->_usser();

            if ($this->StartResultCache()) {
                $this->arResult = $this->prepareComponentResault();
                $this->SetResultCacheKeys(['COUNT_ELEMS']);
                $this->IncludeComponentTemplate();
            }
            $ap->SetTitle("Разделов- ".$this->arResult['COUNT_ELEMS']);
        } 
    }