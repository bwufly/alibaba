<?php

namespace Wufly\Alibaba\Functions\Product;

use Wufly\Alibaba\Core\BaseClient;
use Wufly\Alibaba\Entity\ProductFollowParams;
use Wufly\Alibaba\Entity\ProductInfoParams;
use Wufly\Alibaba\Entity\SimpleProductInfoParams;

class Product extends BaseClient
{
    /**
     * 关注商品
     * @param ProductFollowParams $productFollowParams
     * @return $this
     */
    public function productFollow(ProductFollowParams $productFollowParams)
    {
        $this->app->params = $productFollowParams->build();
        $this->url_info = 'com.alibaba.product:alibaba.product.follow.crossborder-1';
        return $this;
    }

    /**
     * 解除关注商品
     * @param ProductFollowParams $productFollowParams
     * @return $this
     */
    public function productUnFollow(ProductFollowParams $productFollowParams)
    {
        $this->app->params = $productFollowParams->build();
        $this->url_info = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
        return $this;
    }

    /**
     * 商品简单信息
     *
     * @param SimpleProductInfoParams $productInfoParams
     * @return $this
     */
    public function simpleProductInfo(SimpleProductInfoParams $productInfoParams)
    {
        $this->app->params = $productInfoParams->build();
        $this->url_info = 'com.alibaba.product:alibaba.agent.product.simple.get-1';
        return $this;
    }

    public function productInfo(ProductInfoParams $productInfoParams)
    {
        $this->app->params = $productInfoParams->build();
        $this->url_info = 'com.alibaba.product:alibaba.cpsMedia.productInfo-1';
        return $this;
    }
}
