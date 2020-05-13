<?php
// +----------------------------------------------------------------------
// | OrderPayUrlParams.php
// +----------------------------------------------------------------------
// | Description:
// +----------------------------------------------------------------------
// | Time: 2020/5/13 10:44
// +----------------------------------------------------------------------
// | Author: wufly <wfxykzd@163.com>
// +----------------------------------------------------------------------

namespace Wufly\Alibaba\entity\order;

use Wufly\Alibaba\Entity\BaseEntityParams;

/** 获取订单物流信息参数
 * Class OrderTraceParams
 * @package Wufly\Alibaba\entity\order
 */
class OrderTraceParams extends BaseEntityParams
{
    public $orderId;
    public $webSite = '1688';
}
