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

                new CargoParams([
                    'offerId'  => '576586053286',
                    'specId'   => '86487a4d0cc06ffa87d22f374157e954',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '599841185206',
                    'specId'   => 'ce8ab4ec6afda20cf5fcaead6bbb9998',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '599842281458',
                    'specId'   => '04445998b4bb28db4f702a883a5e7956',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '577408214909',
                    'specId'   => '18fc1aa5f6b21b1d4181acd75a897191',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '601454816947',
                    'specId'   => '4ac5d09a042a7abfb47e8c719130173d',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '539379199056',
                    'specId'   => 'e6ec1f394b988fe89ead7e5cf34e4392',
                    'quantity' => '1',
                ]),

                new CargoParams([
                    'offerId'  => '574596651348',
                    'specId'   => '3ac7db10702ec56cd5b7bff644a42d79',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '574596651348',
                    'specId'   => '317fc2ee7c2952598c01d49f39a3e48f',
                    'quantity' => '1',
                ]),
                new CargoParams([
                    'offerId'  => '578700408024',
                    'specId'   => 'c40d2c8e95aa31e2f1daa39598db5042',
                    'quantity' => '2',
                ]),
                new CargoParams([
                    'offerId'  => '574991510545',
                    'specId'   => '383bdcde41f228f2dba9b0723d8f15f7',
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
