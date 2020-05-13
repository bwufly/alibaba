<?php
// +----------------------------------------------------------------------
// | Order.php
// +----------------------------------------------------------------------
// | Description:
// +----------------------------------------------------------------------
// | Time: 2020/5/13 09:55
// +----------------------------------------------------------------------
// | Author: wufly <wfxykzd@163.com>
// +----------------------------------------------------------------------

namespace Wufly\Alibaba\functions\order;

use Wufly\Alibaba\Core\BaseClient;
use Wufly\Alibaba\Entity\Order\OrderCreateParams;
use Wufly\Alibaba\entity\order\OrderPayUrlParams;
use Wufly\Alibaba\entity\order\OrderTraceParams;

class Order extends BaseClient
{
    const order_create = 'com.alibaba.trade:alibaba.trade.fastCreateOrder-1';
    const get_order_pay_url = 'com.alibaba.trade:alibaba.alipay.url.get-1';
    const order_trace = 'com.alibaba.logistics:alibaba.trade.getLogisticsTraceInfo.buyerView-1';
    const order_logistics = 'com.alibaba.logistics:alibaba.trade.getLogisticsInfos.buyerView-1';

    /**
     * 快速创建订单
     * @param OrderCreateParams $orderCreateParams
     * @return $this
     */
    public function create(OrderCreateParams $orderCreateParams)
    {
        $this->app->params = $orderCreateParams->build();
        $this->url_info = self::order_create;
        return $this;
    }

    /**
     * @function 获取订单的支付链接
     * @param OrderPayUrlParams $orderPayUrlParams
     * @return $this
     */
    public function getPayUrl(OrderPayUrlParams $orderPayUrlParams)
    {
        $this->app->params = $orderPayUrlParams->build();
        $this->url_info = self::get_order_pay_url;
        return $this;
    }


    /**
     * @function 获取订单的物流跟踪信息
     * @param OrderTraceParams $orderTraceParams
     * @return $this
     */
    public function getLogisticsTraceInfo(OrderTraceParams $orderTraceParams)
    {
        $this->app->params = $orderTraceParams->build();
        $this->url_info = self::order_trace;
        return $this;
    }

    /**
     * @function 订单物流信息
     * @param OrderTraceParams $orderTraceParams
     * @return $this
     */
    public function getLogisticsInfos(OrderTraceParams $orderTraceParams)
    {
        $this->app->params = $orderTraceParams->build();
        $this->url_info = self::order_logistics;
        return $this;
    }
}
