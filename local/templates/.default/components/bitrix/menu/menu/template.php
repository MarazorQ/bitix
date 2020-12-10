<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

 <?php if (empty($arResult["ALL_ITEMS"]))
	return;?>

<div class="menu">
		     <ul class="menu bounce">
		     	<?php foreach ($arResult['ALL_ITEMS'] as $arItem): ?>
		     		<?php if ($arItem['SELECTED']): ?>
		       			<li class="active"><a href="<?=$arItem['LINK'];?>" class="active"><?=$arItem['TEXT'];?></a></li>
		       		<?php else: ?>
		       			<li><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></li>
		       		<?php endif; ?>
		   		<?php endforeach; ?>
		     </ul>
	   </div>


