<?php

namespace Boelter\IsotopeHideElements\Hook;

use Haste\Input\Input;

class ContentElement
{
    public function checkHideOnProductDetail($row, $buffer, $element)
    {

        if ($row->hide_on_productdetail && Input::getAutoItem('product', false, true) != '') {
            return '';
        }

        return $buffer;
    }
}