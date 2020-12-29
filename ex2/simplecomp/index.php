<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Простой компонент");
?><?$APPLICATION->IncludeComponent(
	"dv:simplecomp.exam",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CATALOG_IBLOCK_ID" => "2",
		"CLASS_IBLOCK_ID" => "7",
		"DETAIL_PRODUCT_URL" => "",
		"LINK_TEMPLATE" => "",
		"PRODUCTS_IBLOCK_ID" => "2",
		"PRODUCT_PROPERTY_CODE" => "FIRM",
		"SIZER_IBLOCK_ID" => "7"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>