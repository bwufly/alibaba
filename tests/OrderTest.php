<?php

namespace Test\Wufly\Alibaba;

use PHPUnit\Framework\TestCase;
use Wufly\Alibaba\AlibabaClient;
use Symfony\Component\Dotenv\Dotenv;
use Wufly\Alibaba\Entity\Order\AddressParams;
use Wufly\Alibaba\Entity\Order\CargoParams;
use Wufly\Alibaba\Entity\Order\OrderCreateParams;
use Wufly\Alibaba\Entity\Order\OrderPayUrlParams;
use Wufly\Alibaba\Entity\Order\OrderTraceParams;

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
                    'offerId'  => '585228102741',
                    'specId'   => 'b2bb3ec1439de61dc73b8e885f85511b',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '584892628235',
                    'specId'   => 'f58dcc23b8a26445ef9da85ce7ff6b9b',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '610068629939',
                    'specId'   => 'd7bbe68c2a1729d1518e3bb86d05212b',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '610068629939',
                    'specId'   => '59c0f7faf708998c09537ef3c89d25b1',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '586077385428',
                    'specId'   => 'e47afe19e9476306a9c746c16971287a',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '586011668732',
                    'specId'   => '7ea664d1d1a2dc24f7e72bfb7ff88d45',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '610948992028',
                    'specId'   => '089b601ed937516a4f6eaa25a96f3786',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '583929974380',
                    'specId'   => '2a94107b8b364fc87f1a4b0db2f45ed1',
                    'quantity' => '1',
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
