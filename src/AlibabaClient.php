<?php

namespace Wufly\Alibaba;

use Wufly\Alibaba\Core\ContainerBase;
use Wufly\Alibaba\provider\OrderProvider;
use Wufly\Alibaba\Provider\StoreProvider;
use Wufly\Alibaba\Provider\ProductProvider;

class AlibabaClient extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        ProductProvider::class,
        // 订单服务
        OrderProvider::class,
        //...其他服务提供者
    ];
}
