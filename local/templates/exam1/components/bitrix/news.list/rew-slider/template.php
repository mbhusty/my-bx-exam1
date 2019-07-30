<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="item-wrap">
	<div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
<?   // \Bitrix\Main\Diag\Debug::dump($resizePhoto);?>
<?$resizePhoto = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],array('width'=>39, 'height'=>39),BX_RESIZE_IMAGE_PROPORTIONAL,true);?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
				<div class="item">
									<div class="side-block side-opin">
										<div class="inner-block">
											<div class="title">
												<div class="photo-block">
<img src="<?= !empty($resizePhoto) ? $resizePhoto['src'] : SITE_TEMPLATE_PATH.'/img/rew/no_photo_left_block.jpg';?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">


												</div>
												<div class="name-block"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
<div class="pos-block"><?= !empty($arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) ? '' . $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] : '' ?><?= !empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) ? ', ' . $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] : '' ?></div>
											</div>
											<div class="text-block"><?= TruncateText($arItem["PREVIEW_TEXT"], 150);?></div>
										</div>
									</div>
								</div>
<?endforeach;?>
	</div>
</div>