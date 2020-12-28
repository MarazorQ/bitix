<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 

	//форматирование входных параметров

	$arComponentParameters = array(
		 "GROUPS" => array(),

		 "PARAMETERS" => array(
		 	"CATALOG_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_CATALOG_ID"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
		 	),

		 	"SIZER_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_SIZER_ID"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			),

			"DETAIL_PRODUCT_URL" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DETAIL_PRODUCT_URL"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			),

			"PRODUCT_PROPERTY_CODE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_PRODUCT_PROPERTY_CODE"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			),

			"CACHE_TIME"  =>  array("DEFAULT"=>36000000),
		),
	);

?>