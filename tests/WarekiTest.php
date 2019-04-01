<?php

require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;


/**
 * wareki test
 */
class WarekiTest extends TestCase {

    /**
     * test 令和
     */
    public function testReiwa() {
        $warekiDate = new Wareki\Wareki();
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("2019-05-01"));
        $this->assertEquals($HeiseiDate, "令和元年05月01日");
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("2020-01-01"));
        $this->assertEquals($HeiseiDate, "令和02年01月01日");
    }

    /**
     * test 平成
     */
    public function testHeisei() {
        $warekiDate = new Wareki\Wareki();
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("1989-01-09"));
        $this->assertEquals($HeiseiDate, "平成元年01月09日");
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("1990-01-01"));
        $this->assertEquals($HeiseiDate, "平成02年01月01日");
    }

    /**
     * test 昭和
     */
    public function testSyouwa() {
        $warekiDate = new Wareki\Wareki();
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("1926-12-25"));
        $this->assertEquals($HeiseiDate, "昭和元年12月25日");
        $HeiseiDate = $warekiDate->convertWareki(new DateTime("1927-12-25"));
        $this->assertEquals($HeiseiDate, "昭和02年12月25日");
    }

}
