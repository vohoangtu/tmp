<?php


if (!defined('SOURCES')) die("Error");
/**
 * @var $d
 */

$attributes = new \Illuminate\Support\Collection($d->rawQuery("select * from #_news WHERE type IN ('loai-mong', 'loai-mai', 'so-tang') and find_in_set('hienthi', status)",
    []));
$loadnhaList = new \Illuminate\Support\Collection($d->rawQuery("select * from #_news_list WHERE type = ? and find_in_set('hienthi', status)",
    ['loai-nha']));

if(!empty($_GET)){
    if(isset($_GET['hinhthucxaydung']) && !empty(isset($_GET['hinhthucxaydung']))){
        $hinhthucxaydung = explode("_", $_GET['hinhthucxaydung']);
    }
}