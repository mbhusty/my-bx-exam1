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
                        <hr>
           				<div class="review-block">
							<div class="review-text">
								<div class="review-text-cont">
									<? echo $arResult["DETAIL_TEXT"]; ?>
								</div>
								<div class="review-autor">
<? echo $arResult["NAME"]?>, <?= $arResult["DISPLAY_ACTIVE_FROM"] ?><?= !empty($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) ? ', ' . $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] : '' ?><?= !empty($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) ? ', ' . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] : '' ?>
								</div>
							</div>
							<div style="clear: both;" class="review-img-wrap">
								
							<?if (is_array($arResult["DETAIL_PICTURE"])):?>
							<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
							<?else:?>
							<img src="<?= SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg">
							<?endif;?>
							
							
							
							</div>
						</div>
						
<?if (is_set($arResult["DISPLAY_PROPERTIES"]["FILES"])):?>					
<div class="exam-review-doc">
<p><?= GetMessage('DOCUMENTS')?>:</p>
<?//\Bitrix\Main\Diag\Debug::dump($arResult["DISPLAY_PROPERTIES"]["FILES"]);?>
<?foreach ($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE'] as $file):?>
		<?$arFile = CFile::GetFileArray($file)?>
		<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png" alt = "<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg"><a href="<?=$arFile['SRC']?>"><?echo $arFile['ORIGINAL_NAME']?></a></div>
<?endforeach?>
</div>
<?endif;?>




<?/*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;*/?>