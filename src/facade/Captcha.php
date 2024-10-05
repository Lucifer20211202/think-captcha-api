<?php

namespace luphp\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package luphp\captcha\facade
 * @mixin \luphp\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \luphp\captcha\Captcha::class;
    }
}
