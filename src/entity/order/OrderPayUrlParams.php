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

/** 回去订单支付链接参数
 * Class OrderPayUrlParams
 * @package Wufly\Alibaba\entity\order
 */
class OrderPayUrlParams extends BaseEntityParams
{
    public $orderIdList = []; // 订单号列表

}
