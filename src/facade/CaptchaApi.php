<?php

namespace lsf\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package lsf\captcha\facade
 * @mixin \lsf\captcha\CaptchaApi
 * @method static array create(string $config = null) 生成图形验证码并把验证码的值保存的缓存中
 * @method static bool check(string $code, string $key) 验证图形验证码是否正确
 * @method static array createSMS(string $phone) 生成短信验证码并把验证码的值保存的缓存中
 * @method static bool checkSMS(string $code, string $phone) 验证短信验证码是否正确
 */
class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \lsf\captcha\CaptchaApi::class;
    }
}
