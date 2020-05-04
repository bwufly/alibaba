<?php

namespace Test\Wufly\Alibaba;

use PHPUnit\Framework\TestCase;
use Wufly\Alibaba\AlibabaClient;
use Wufly\Alibaba\Entity\ProductFollowParams;
use Wufly\Alibaba\Entity\ProductInfoParams;
use Symfony\Component\Dotenv\Dotenv;

class ProductTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        //设置测试环境变量
        (new Dotenv(true))->load(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.env');
    }

    /**
     * 测试关注商品
     */
    public function testFollow()
    {
        $obj = new AlibabaClient([
            'productId' => '532137286888',
        ]);
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $res = $obj->product->productFollow(new ProductFollowParams(532137286888))->post();
        // $res = $obj->product->setApi('com.alibaba.product:alibaba.product.follow.crossborder-1')->post(); //api 就是阿里巴巴文档中的
        print_r($res);
        die;
        var_export($res);
        $this->assertStringContainsString('0', $res['code']);
    }

    public function testProductInfo()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $res = $obj->product->simpleProductInfo(new ProductInfoParams(532137286888))->post();
        print_r($res);
        die;
    }
}
