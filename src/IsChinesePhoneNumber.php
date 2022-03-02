<?php
namespace nbczwphp\isChinesePhoneNumber;

class IsChinesePhoneNumber
{
    const MOBILE_PHONE_NUMBER = [
        '/^1[3-9][0-9]{9}$/',
       '/^1(?:3[0-9]|4[5-9]|5[0-9]|6[12456]|7[0-8]|8[0-9]|9[0-9])[0-9]{8}$/'
    ];

    const LAND_LINE_PHONE_NUMBER = [
        '/^(?:0[1-9][0-9]{1,2}-)?[2-8][0-9]{6,7}$/',
        '/^0[1-9][0-9]{1,2}-[2-8][0-9]{6,7}$/'
    ];

    /**
     * 中国电话号码验证
     * @param string $number 电话号码
     * @param boolean $strict 是否严格模式
     * @return bool
     */
    public static function check($number, $strict = false)
    {
        return self::checkMobile($number, $strict) || self::checkLandLine($number, $strict);
    }

    /**
     * 中国手机号码验证
     * @param string $number 手机号码
     * @param boolean $strict 是否严格模式
     * @return bool
     */
    public static function checkMobile($number, $strict = false)
    {
        $mode = $strict ? 1 : 0;
        return 0 < preg_match(self::MOBILE_PHONE_NUMBER[$mode], $number);
    }
    /**
     * 中国座机号码验证
     * @param string $number 座机号码
     * @param boolean $strict 是否严格模式
     * @return bool
     */
    public static function checkLandLine($number, $strict = false)
    {
        $mode = $strict ? 1 : 0;
        return 0 < preg_match(self::LAND_LINE_PHONE_NUMBER[$mode], $number);
    }
}
