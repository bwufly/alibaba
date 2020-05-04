<?php

namespace Wufly\Alibaba\Interfaces;

use Wufly\Alibaba\Core\Container;

interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
