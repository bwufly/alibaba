<?php

namespace Wufly\Alibaba\Provider;

use Wufly\Alibaba\Core\Container;
use Wufly\Alibaba\Functions\Product\Product;
use Wufly\Alibaba\Interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product'] = function ($container) {
            return new Product($container);
        };
        // $container['logistics'] = function ($container) {
        //     return new Logis($container);
        // };
    }
}
