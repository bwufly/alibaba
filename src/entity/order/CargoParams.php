<?php
// +----------------------------------------------------------------------
// | AddressParams.php
// +----------------------------------------------------------------------
// | Description:
// +----------------------------------------------------------------------
// | Time: 2020/5/13 11:06
// +----------------------------------------------------------------------
// | Author: wufly <wfxykzd@163.com>
// +----------------------------------------------------------------------

namespace Wufly\Alibaba\entity\order;

use Wufly\Alibaba\Entity\BaseEntityParams;

/** 订单购买单元
 * Class CargoParams
 * @package Wufly\Alibaba\entity\order
 */
class CargoParams extends BaseEntityParams
{
    public $offerId;
    public $specId;
    public $quantity;
}
