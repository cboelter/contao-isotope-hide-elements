<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] =
    array('Boelter\\IsotopeHideElements\\Hook\\ContentElement', 'checkHideOnProductDetail');