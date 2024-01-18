<?php
include "../api/config.php";
$target = implode("-", [$_REQUEST['namsinh'],
    $_REQUEST['namxay']]);
function object2array($object) { return @json_decode(@json_encode($object),1); }

$file = LIBRARIES ."/data/xemtuoi/$target.txt";
if(file_exists($file)){
    $content = file_get_contents($file);
}else {
    $xml = simplexml_load_file(LIBRARIES . "/tuoixaydung.xml", 'SimpleXMLElement', LIBXML_NOCDATA);
    $database = new \Illuminate\Support\Collection(object2array($xml));

    $content = new \Illuminate\Support\Collection($database->get("channel"));
    $content = new \Illuminate\Support\Collection($content->get("item"));
    $item = $content->where("link", "=",$target)->first();
    $content =  $item['content'];
    file_put_contents($file, $content);
}
echo json_encode([
    'con' => $content
]);