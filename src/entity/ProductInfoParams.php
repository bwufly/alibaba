<?php

namespace Wufly\Alibaba\Entity;

class ProductInfoParams extends BaseEntityParams
{
    private $productID;
    private $webSite;

    /**
     * ProductFollowParams constructor.
     * @param $productId
     */
    public function __construct($productId)
    {
        $this->productID = $productId;
        $this->webSite = '1688';
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}
