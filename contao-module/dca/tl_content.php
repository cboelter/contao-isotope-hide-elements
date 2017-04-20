<?php

/**
 * Palettes
 */
$excludes = array('__selector__');

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $type => $config) {
    if (in_array($type, $excludes)) {
        continue;
    }

    $GLOBALS['TL_DCA']['tl_content']['palettes'][$type] =
        str_replace(',invisible', ',invisible,hide_on_productdetail', $config);

}

/**
 * Operations
 */
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['hide_on_productdetail'] = array(
    'label'                => &$GLOBALS['TL_LANG']['tl_content']['hide_on_productdetail'],
    'attributes'           => 'onclick="Backend.getScrollOffset();"',
    'haste_ajax_operation' => array(
        'field'   => 'hide_on_productdetail',
        'options' => array(
            array(
                'value' => '',
                'icon'  => 'featured_.gif',
            ),
            array(
                'value' => '1',
                'icon'  => 'featured.gif',
            ),
        ),
    ),
);

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['hide_on_productdetail'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['hide_on_productdetail'],
    'inputType' => 'checkbox',
    'eval'      => array(
        'tl_class' => 'w50',
    ),
    'sql'       => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['eval']['tl_class'] = 'w50';