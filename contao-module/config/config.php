<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] =
    array('Boelter\\IsotopeHideElements\\Hook\\ContentElement', 'checkHideOnProductDetail');

$GLOBALS['TL_HOOKS']['getArticle'][] = array('Boelter\\IsotopeHideElements\\Hook\\Article', 'checkHideOnProductDetail');