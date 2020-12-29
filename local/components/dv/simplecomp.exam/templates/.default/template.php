<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<div>
		<h3> Разделов: <?=$arResult['COUNT_ELEMS'];?></h3>
	    <ul>
	    <?php foreach ($arResult as $sizer):?>

	        <?php if ($key == 'COUNT_ELEMS'):?>
	            <?php continue;?>
	        <?php endif;?>

	        <?php $headStr = '<b>' . $news['NEWS_NAME'] . '</b> - ' . $news['NEWS_DATE'] . ' (';?>

	        <?php foreach ($news['DIRECTORY'] as $dirData):?>
	            <?php $headStr .= ' ' . $dirData['NAME'];?>
	        <?php endforeach;?>

	        <?php $headStr .= ')';?>
	        <li> <?=$headStr;?></li>
	           <ul>

	        <?php foreach ($news['ELEMS'] as $elem):?>
	            <li> 
		            <?php echo $elem['NAME'] . ' - ' . $elem['PROPERTY_PRICE_VALUE'] . ' - ' . $elem['PROPERTY_MATERIAL_VALUE'] . ' - ' . $elem['PROPERTY_ARTNUMBER_VALUE'];?>
	            </li>
	        <?php endforeach;?>
	           </ul>
		<?php endforeach;?>
	    </ul>
    </div>

