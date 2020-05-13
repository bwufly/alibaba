<?php

namespace Wufly\Alibaba\Entity;

use Wufly\Alibaba\Interfaces\Params;

abstract class BaseEntityParams extends BaseModel implements Params
{
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
