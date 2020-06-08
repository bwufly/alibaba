<?php

namespace Wufly\Alibaba\Entity\Order;

use Wufly\Alibaba\Entity\BaseEntityParams;

/** 创建订单参数
 * Class OrderCreateParams
 * @package Wufly\Alibaba\Entity\Order
 */
class OrderCreateParams extends BaseEntityParams
{
    public $flow = 'general'; // 大市场订单
    public $addressParam;// 地址
    public $cargoParamList;

}
