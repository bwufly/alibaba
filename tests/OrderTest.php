<?php

namespace Test\Wufly\Alibaba;

use PHPUnit\Framework\TestCase;
use Wufly\Alibaba\AlibabaClient;
use Symfony\Component\Dotenv\Dotenv;
use Wufly\Alibaba\entity\order\AddressParams;
use Wufly\Alibaba\entity\order\CargoParams;
use Wufly\Alibaba\Entity\Order\OrderCreateParams;
use Wufly\Alibaba\entity\order\OrderPayUrlParams;
use Wufly\Alibaba\entity\order\OrderTraceParams;

class OrderTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        //设置测试环境变量
        (new Dotenv(true))->load(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.env');
    }

    public function testOrderCreate()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $orderCreateParams = new OrderCreateParams([
            'addressParam'   => new AddressParams(),
            'cargoParamList' => [
                new CargoParams([
                    'offerId'  => '',
                    'specId'   => '',
                    'quantity' => '',
                ]),
            ]
        ]);
        $res = $obj->order->create($orderCreateParams)->post();
        // $res = $obj->product->setApi('com.alibaba.product:alibaba.product.follow.crossborder-1')->post(); //api 就是阿里巴巴文档中的
        print_r($res);
        die;
        var_export($res);
        $this->assertStringContainsString('0', $res['code']);
    }

    public function testGetOrderPayUrl()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $orderIds = ['996740609302127613'];
        $res = $obj->order->getPayUrl(new OrderPayUrlParams(['orderIdList' => $orderIds]))->post();
        print_r($res);
        die;
    }

    public function testGetLogisticsTraceInfo()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $res = $obj->order->getLogisticsTraceInfo(new OrderTraceParams(['orderId' => '996740609302127613']))->post();
        print_r($res);
        die;
    }

    public function testGetLogisticsInfos()
    {
        $obj = new AlibabaClient();
        $obj->setAppkey(getenv('AppKey'));
        $obj->setAppsecret(getenv('AppSecret'));
        $obj->setAccessToken('8897ad06-728e-48a0-8290-4964a90bca60');
        $res = $obj->order->getLogisticsInfos(new OrderTraceParams(['orderId' => '996740609302127613']))->post();
        print_r($res);
        die;
    }
}
