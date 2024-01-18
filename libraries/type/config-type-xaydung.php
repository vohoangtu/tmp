<?php

$nametype = "xay-dung";
$config['news'][$nametype]['title_main'] = "Xây Dựng";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['list'] = true;

$config['news'][$nametype]['chieudai'] = true;
$config['news'][$nametype]['chieurong'] = true;
$config['news'][$nametype]['sotang'] = true;
$config['news'][$nametype]['sophong'] = true;
$config['news'][$nametype]['mattien'] = true;
$config['news'][$nametype]['phongcach'] = true;

$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(

);

$config['news'][$nametype]['attributes'] = array(
    'chieudai' => 'Chiều Dài',
    'chieurong' => 'Chiều Rộng',
    'sotang' => 'Số Tầng',
    'sophong' => 'Số Phòng',
    'mattien' => 'Mặt Tiền',
    'phongcach' => 'Phong Cách',

);


$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tin tức (List) */
$config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
$config['news'][$nametype]['images_list'] = true;
$config['news'][$nametype]['show_images_list'] = true;
$config['news'][$nametype]['slug_list'] = true;
$config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['gallery_list'] = array(

);
$config['news'][$nametype]['desc_list'] = true;
$config['news'][$nametype]['desc_cke_list'] = true;
$config['news'][$nametype]['content_list'] = true;
$config['news'][$nametype]['content_cke_list'] = true;
$config['news'][$nametype]['seo_list'] = true;
$config['news'][$nametype]['width_list'] = 320;
$config['news'][$nametype]['height_list'] = 240;
$config['news'][$nametype]['thumb_list'] = '100x100x1';
$config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

$nametype = "bang-gia";
$config['news'][$nametype]['title_main'] = "Bảng Giá";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    // $nametype => array(
    //     "title_main_photo" => "Hình ảnh Tin tức",
    //     "title_sub_photo" => "Hình ảnh",
    //     "check_photo" => array("hienthi" => "Hiển thị"),
    //     "number_photo" => 3,
    //     "images_photo" => true,
    //     "avatar_photo" => true,
    //     "name_photo" => true,
    //     "width_photo" => 540,
    //     "height_photo" => 540,
    //     "thumb_photo" => '100x100x1',
    //     "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    // ),
    // "video" => array(
    //     "title_main_photo" => "Video Tin tức",
    //     "title_sub_photo" => "Video",
    //     "check_photo" => array("hienthi" => "Hiển thị"),
    //     "number_photo" => 2,
    //     "video_photo" => true,
    //     "name_photo" => true
    // ),
    // "taptin" => array(
    //     "title_main_photo" => "Tập tin Tin tức",
    //     "title_sub_photo" => "Tập tin",
    //     "check_photo" => array("hienthi" => "Hiển thị"),
    //     "number_photo" => 2,
    //     "file_photo" => true,
    //     "name_photo" => true,
    //     "file_type_photo" => '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif'
    // )
);
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

$nametype = "thiet-ke-noi-that";
$config['news'][$nametype]['title_main'] = "Thiết Kế Nội Thất";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['list'] = true;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Tin tức",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    ),
    "video" => array(
        "title_main_photo" => "Video Tin tức",
        "title_sub_photo" => "Video",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "video_photo" => true,
        "name_photo" => true
    ),
    "taptin" => array(
        "title_main_photo" => "Tập tin Tin tức",
        "title_sub_photo" => "Tập tin",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "file_photo" => true,
        "name_photo" => true,
        "file_type_photo" => '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif'
    )
);
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tin tức (List) */
$config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
$config['news'][$nametype]['images_list'] = true;
$config['news'][$nametype]['show_images_list'] = true;
$config['news'][$nametype]['slug_list'] = true;
$config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['gallery_list'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Tin tức cấp 1",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 320,
        "height_photo" => 240,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif',
    ),
    "video" => array(
        "title_main_photo" => "Video Tin tức cấp 1",
        "title_sub_photo" => "Video",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "video_photo" => true,
        "name_photo" => true
    )
);
$config['news'][$nametype]['desc_list'] = true;
$config['news'][$nametype]['desc_cke_list'] = true;
$config['news'][$nametype]['content_list'] = true;
$config['news'][$nametype]['content_cke_list'] = true;
$config['news'][$nametype]['seo_list'] = true;
$config['news'][$nametype]['width_list'] = 320;
$config['news'][$nametype]['height_list'] = 240;
$config['news'][$nametype]['thumb_list'] = '100x100x1';
$config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';




$nametype = "loai-nha";
$config['news'][$nametype]['title_main'] = "Hình Thức Xây Dựng";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['list'] = true;
$config['news'][$nametype]['price'] = true;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['gallery'] = array(

);
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tin tức (List) */
$config['news'][$nametype]['title_main_list'] = "Danh mục cấp 1";
$config['news'][$nametype]['images_list'] = false;
$config['news'][$nametype]['show_images_list'] = false;
$config['news'][$nametype]['slug_list'] = false;
$config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['gallery_list'] = array(

);
$config['news'][$nametype]['desc_list'] = false;
$config['news'][$nametype]['desc_cke_list'] = false;
$config['news'][$nametype]['content_list'] = false;
$config['news'][$nametype]['content_cke_list'] = false;
$config['news'][$nametype]['seo_list'] = false;
$config['news'][$nametype]['width_list'] = 320;
$config['news'][$nametype]['height_list'] = 240;
$config['news'][$nametype]['thumb_list'] = '100x100x1';
$config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

$nametype = "loai-mong";
$config['news'][$nametype]['title_main'] = "Loại Móng";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['price'] = true;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['gallery'] = array(

);
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';


$nametype = "loai-mai";
$config['news'][$nametype]['title_main'] = "Loại Mái";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['price'] = true;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['gallery'] = array(

);
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';




$nametype = "so-tang";
$config['news'][$nametype]['title_main'] = "Số Tầng";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['price'] = true;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['gallery'] = array(

);
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 270;
$config['news'][$nametype]['height'] = 270;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';