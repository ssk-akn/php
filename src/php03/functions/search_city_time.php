<?php
function searchCityTime($city_name)
{
require("config/cities.php");
//cities.phpファイルを読み込む

foreach ($cities as $city) {
    if ($city["name"] === $city_name){
        //選んだ国名と一致する

        $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
                    //日付と時刻を表現するクラス ""空だから現在時刻？
        $time = $date_time->format("H:i");
        $city["time"] = $time;
        //cities.phpの連想配列に追加
        return $city;
        //時間が追加された配列$cityを戻す
        }
    }
}





