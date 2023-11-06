<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);
Asset::getInstance()->addCss("/local/templates/.default/perevozki_markup/app/css/style.min.css");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/myscripts.js");
//
?>
    <html>
    <head>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
    </head>

<body>

<?$APPLICATION->ShowPanel()?>

<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "horizontal_multilevel",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "4",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "Y"
    )
);?>