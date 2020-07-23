<?php
// +----------------------------------------------------------------------
// | OrderProvider.php
// +----------------------------------------------------------------------
// | Description:
// +----------------------------------------------------------------------
// | Time: 2020/5/13 09:53
// +----------------------------------------------------------------------
// | Author: wufly <wfxykzd@163.com>
// +----------------------------------------------------------------------

namespace Wufly\Alibaba\Provider;

use Wufly\Alibaba\Core\Container;
use Wufly\Alibaba\Functions\Order\Order;
use Wufly\Alibaba\Interfaces\Provider;

class OrderProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['order'] = function ($container) {
            return new Order($container);
        };
    }
}
