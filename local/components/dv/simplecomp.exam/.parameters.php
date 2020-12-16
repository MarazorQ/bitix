<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 

	//форматирование входных параметров

	$arComponentParameters = array(
		 "GROUPS" => array(),

		 "PARAMETERS" => array(
		 	"CATALOG_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "ID инфоблока с каталогом товаров",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
		 	),

		 	"NEWS_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "ID инфоблока с новостями",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			),

			"CODE_USER" => array(
			"PARENT" => "BASE",
			"NAME" => "Код пользовательского свойства разделов каталога, в котором хранится привязка к новостям",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			),

			"CACHE_TIME"  =>  array("DEFAULT"=>36000000),
		),
	);

?>