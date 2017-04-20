<?php

$GLOBALS['TL_DCA']['tl_article']['subpalettes']['published'] =
    str_replace(
        'start,stop',
        'hide_on_productdetail,start,stop',
        $GLOBALS['TL_DCA']['tl_article']['subpalettes']['published']
    );

$GLOBALS['TL_DCA']['tl_article']['list']['operations']['hide_on_productdetail'] = array(
    'label'                => &$GLOBALS['TL_LANG']['tl_article']['hide_on_productdetail'],
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

$GLOBALS['TL_DCA']['tl_article']['fields']['published']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_article']['fields']['hide_on_productdetail'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['hide_on_productdetail'],
    'inputType' => 'checkbox',
    'eval'      => array(
        'tl_class' => 'w50',
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
