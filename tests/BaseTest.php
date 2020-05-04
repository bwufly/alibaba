<?php

namespace Test\Wufly\Alibaba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Dotenv\Dotenv;

class BaseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        //设置测试环境变量
        (new Dotenv(true))->load(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.env');
    }
}
