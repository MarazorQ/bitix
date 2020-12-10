<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
//debug($arResult["ITEMS"]);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="box1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<h3><a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><?=$arItem["NAME"];?></a></h3>
 <span><?=$arItem["PROPERTIES"]["AUTHOR"]["VALUE"];?>- 2 hours ago<span class="comments">8 Comments</span></span>
	<div class="view">
		<div class="view-back">
 <span class="views" title="views"><?=$arItem["SHOW_COUNTER"]?:0?></span> <span class="likes" title="likes">(124)</span> <span class="link" title="link">(24)</span> <a href="<?=$arItem["DETAIL_PAGE_URL"];?>"> </a>
		</div>
 <a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"></a>
	</div>
	<div class="data">
		<p>
			 <?=$arItem["PREVIEW_TEXT"];?>
		</p>
 <span class="link" title="link"><a href="<?=$arItem["DETAIL_PAGE_URL"];?>">Continue reading &gt;&gt;&gt;</a></span>
	</div>
	<div class="clear">
	</div>
</div>
<?php endforeach; ?>

<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<?= $arResult["NAV_STRING"];?>
<?php endif; ?>