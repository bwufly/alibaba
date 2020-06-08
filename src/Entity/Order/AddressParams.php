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

namespace Wufly\Alibaba\Entity\Order;

use Wufly\Alibaba\Entity\BaseEntityParams;

/** 订单收货地址
 * Class AddressParams
 * @package Wufly\Alibaba\Entity\Order
 */
class AddressParams extends BaseEntityParams
{
    public $address = '九和路19号(凯诚商务园)4栋306';
    public $mobile = '18457977915';
    public $fullName = '吴飞';
    public $postCode;
    public $areaText = '江干区';
    public $townText;
    public $cityText = '杭州市';
    public $provinceText = '浙江省';
}
