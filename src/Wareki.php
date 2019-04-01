<?php
namespace Wareki;
use \DateTime;
/**
 * @author akira1908jp
 * 和暦表示
 */
class Wareki {

    public const GENGOU_MEIJI = "明治";

    public const GENGO_TAISYOU = "大正";

    Public const GENGOU_SYOUWA = "昭和";

    public const GENGOU_HEISEI = "平成";

    public const GENGOU_REIWA = "令和";

    private const MEIJI_DATE = "1868-01-25";

    private const TAISYOU_DATE = "1912-07-30";

    private const SYOUWA_DATE = "1926-12-25";

    private const HEISEI_DATE = "1989-01-08";

    private const REIWA_DATE = "2019-05-01";

    /**
     * @DateTime
     */
    public function convertWareki($date) {

        if ($date >= new DateTime(self::REIWA_DATE)) {
            $gengo = self::GENGOU_REIWA;
            $wayear = $date->format('Y') - 2018;
        } elseif ($date >= new DateTime(self::HEISEI_DATE)) {
            $gengo = self::GENGOU_HEISEI;
            $wayear = $date->format('Y') - 1988;
        } elseif ($date >= new DateTime(self::SYOUWA_DATE)) {
            $gengo = self::GENGOU_SYOUWA;
            $wayear = $date->format('Y') - 1925;
        } elseif ($date >= new DateTieme(self::TAISYOU_DATE)) {
            $gengo = self::GENGO_TAISYOU;
            $wayear = $date->format('Y') - 1911;
        } elseif ($date >= new DateTime(self::MEIJI_DATE)) {
            $gengo = self::GENGOU_MEIJI;
            $wayear = $date->format('Y') - 1868;
        }    
        switch ($wayear) {
            case 1:
                $wadate = $gengo.'元年';
                break;
            default:
                $wadate = $gengo.sprintf("%02d年", $wayear);
        }
        return $wadate.$date->format("m月d日");
    }
}