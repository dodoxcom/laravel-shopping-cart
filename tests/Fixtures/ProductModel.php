<?php

namespace Gloudemans\Tests\Shoppingcart\Fixtures;

use Gloudemans\Shoppingcart\Contracts\Buyable;

class ProductModel implements Buyable
{
    use \Gloudemans\Shoppingcart\CanBeBought;

    public $someValue = 'Some value';

    public function newQuery()
    {
        return $this;
    }

    public function firstWhere($field, $value)
    {
        return $this;
    }
}
