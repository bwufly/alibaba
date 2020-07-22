<?php
/**
 * Created by PhpStorm.
 * User: wufly
 * Date: 2020/7/22 11:09
 */

namespace Wufly\Alibaba\Functions\Product;

use PHPUnit\Framework\TestCase;
use Wufly\Alibaba\AlibabaClient;
use Wufly\Alibaba\Entity\ProductInfoParams;

class ProductTest extends TestCase
{

    public function testProductInfo()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('e9ff012d-780f-490e-b42e-450efc325c48');
        $res = $obj->product->productInfo(new ProductInfoParams(['offerId' => 597379592613]))->post();
        print_r(json_encode($res));
        die;
    }
}
