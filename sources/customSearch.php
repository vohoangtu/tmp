<?php
if (!defined('SOURCES')) die("Error");
/**
 * @var $d
 */
$attributes = new \Illuminate\Support\Collection($d->rawQuery("select id, namevi, type from #_news_attribute", []));
$productList = $d->rawQuery("Select * from #_news_list where find_in_set('hienthi', status) ");

if (!empty($_GET['keyword'])) {
    $tukhoa = htmlspecialchars($_GET['keyword']);
    $tukhoa = $func->changeTitle($tukhoa);

    if ($tukhoa) {
        $where = "";
        $where = "find_in_set('hienthi',status) and (name$lang LIKE ? or slugvi LIKE ? or slugen LIKE ?) ";
        $params = array("%$tukhoa%", "%$tukhoa%", "%$tukhoa%");

        if(isset($_GET['id_cate']) && !empty($_GET['id_cate'])){
            $where .= " AND id_list=? ";
            $params[] = $_GET['id_cate'];
        }

        if(isset($_GET['chieudai']) && !empty($_GET['chieudai'])){
            $where .= " AND id_chieudai=? ";
            $params[] = $_GET['chieudai'];
        }

        if(isset($_GET['chieurong']) && !empty($_GET['chieurong'])){
            $where .= " AND id_chieurong=? ";
            $params[] = $_GET['chieurong'];
        }

        if(isset($_GET['sotang']) && !empty($_GET['sotang'])){
            $where .= " AND id_sotang=? ";
            $params[] = $_GET['sotang'];
        }

        if(isset($_GET['sophong']) && !empty($_GET['sophong'])){
            $where .= " AND id_sophong=? ";
            $params[] = $_GET['sophong'];
        }

        if(isset($_GET['mattien']) && !empty($_GET['mattien'])){
            $where .= " AND id_mattien=? ";
            $params[] = $_GET['mattien'];
        }

        if(isset($_GET['phongcach']) && !empty($_GET['phongcach'])){
            $where .= " AND id_phongcach=? ";
            $params[] = $_GET['phongcach'];
        }

        $curPage = $getPage;
        $perPage = 20;
        $startpoint = ($curPage * $perPage) - $perPage;
        $limit = " limit " . $startpoint . "," . $perPage;
        $sql = "select * FROM #_news where $where order by numb,id desc $limit";
        $news = $d->rawQuery($sql, $params);
        $sqlNum = "select count(*) as 'num' from #_news where $where order by numb,id desc";
        $count = $d->rawQueryOne($sqlNum, $params);
        $total = (!empty($count)) ? $count['num'] : 0;
        $url = $func->getCurrentPageURL();
        $paging = $func->pagination($total, $perPage, $curPage, $url);

    }
}



