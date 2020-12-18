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

		/*
		 * Подготовка результатов компонента
		 * @res $arResult
		 * @return resault
		 */
        public function prepareComponentResault() 
        {
            $arFilterNews = ['IBLOCK_ID' => $this->arParams['NEWS_IBLOCK_ID']];
            $arSelectNews = ['IBLOCK_ID', 'ID', 'NAME', 'DATE_ACTIVE_FROM'];
            $resNews = CIBlockElement::GetList([], $arFilterNews, false, false, $arSelectNews);
        
            while ($newsData = $resNews->Fetch()) 
            {
                $arNewsID[] =  $newsData['ID'];
                $result[$newsData['ID']] = [
                                        'NEWS_NAME' => $newsData['NAME'], 
                                        'NEWS_DATE' => $newsData['DATE_ACTIVE_FROM'], 
                                        'DIRECTORY' => [], 'ELEMS' => []
                                            ];
            }
        
            $arFilterDir = ['IBLOCK_ID' => $this->arParams['CATALOG_IBLOCK_ID'], 'ACTIVE' => 'Y', 'UF_NEWS_LINK' => $arNewsID];
            $arSelectDir = ['IBLOCK_ID', 'ID', 'NAME', 'UF_NEWS_LINK'];
            $resDir = CIBlockSection::GetList([], $arFilterDir, false, $arSelectDir);

            while ($dirData = $resDir->Fetch()) 
            {
                $arDirID[] = $dirData['ID'];
                    
                foreach ($dirData['UF_NEWS_LINK'] as $newsLink) 
                {
                    $result[$newsLink]['DIRECTORY'][$dirData['ID']] = $dirData;
                }
            }
                
            $arFilterElem = ['IBLOCK_ID' => $this->arParams['CATALOG_IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $arDirID];
            $arSelectElem = ['IBLOCK_ID', 'ID', 'NAME', 'PROPERTY_PRICE', 'PROPERTY_MATERIAL', 'PROPERTY_ARTNUMBER', 'IBLOCK_SECTION_ID'];
            $resElem = CIBlockElement::GetList([], $arFilterElem, false, false, $arSelectElem);
                
            $countElems = $resElem->SelectedRowsCount();//количество выбранных записей SELECT
                
            while ($elemData = $resElem->Fetch()) 
            {
                foreach ($result as $key => $news) 
                {
                    foreach ($news['DIRECTORY'] as $dir) 
                    {
                        if ($elemData['IBLOCK_SECTION_ID'] == $dir['ID']) 
                        {
                            $result[$key]['ELEMS'][] =  $elemData;
                               
                        }
                    } 
                }
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

            if ($this->StartResultCache()) {
                $this->arResult = $this->prepareComponentResault();
                $this->SetResultCacheKeys(['COUNT_ELEMS']);
                $this->IncludeComponentTemplate();
            }
            $ap->SetTitle("В каталоге товаров представлено товаров:  ".$this->arResult['COUNT_ELEMS']);
        } 
    }