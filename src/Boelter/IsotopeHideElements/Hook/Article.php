<?php

namespace Boelter\IsotopeHideElements\Hook;

use Haste\Input\Input;

class Article
{
    public function checkHideOnProductDetail($row)
    {
        if ($row->hide_on_productdetail && Input::getAutoItem('product', false, true) != '') {
            $row->published = '';

            return;
        }
    }
}