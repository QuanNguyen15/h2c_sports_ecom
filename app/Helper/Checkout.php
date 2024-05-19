<?php

namespace App\Helper;


class Checkout
{
    //
    public function __constract()
    {
        $this->items = session('cart') ? session('cart') : [];
    }


}
