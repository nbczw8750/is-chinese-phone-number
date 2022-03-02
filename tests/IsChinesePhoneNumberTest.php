<?php
namespace nbczwphp\isChinesePhoneNumber\tests;

use nbczwphp\isChinesePhoneNumber\IsChinesePhoneNumber;
use PHPUnit\Framework\TestCase;

class IsChinesePhoneNumberTest extends TestCase
{
    public function testCheckMobile()
    {
        $number = '10086';
        $this->assertTrue(!IsChinesePhoneNumber::checkMobile($number), "check failed");
        $number = '18087030020';
        $this->assertTrue(IsChinesePhoneNumber::checkMobile($number), "check failed");
        $number = '010-88888888';
        $this->assertTrue(!IsChinesePhoneNumber::checkMobile($number), "check failed");
    }

    public function testCheckLandLine()
    {
        $number = '10086';
        $this->assertTrue(!IsChinesePhoneNumber::checkLandLine($number), "check failed");
        $number = '18087030020';
        $this->assertTrue(!IsChinesePhoneNumber::checkLandLine($number), "check failed");
        $number = '010-88888888';
        $this->assertTrue(IsChinesePhoneNumber::checkLandLine($number), "check failed");
    }
    public function testCheck()
    {
        $number = '10086';
        $this->assertTrue(!IsChinesePhoneNumber::check($number), "check failed");
        $number = '18087030020';
        $this->assertTrue(IsChinesePhoneNumber::check($number), "check failed");
        $number = '010-88888888';
        $this->assertTrue(IsChinesePhoneNumber::check($number), "check failed");
    }
}
