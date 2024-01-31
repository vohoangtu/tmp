<div class="wrap-about content">
    <div class="wrap-content d-flex align-items-start justify-content-between">
        <div class="item-about text-center">
            <label>Đôi nét về</label>
            <h3>CÔNG TY HẢO TIẾN PHÁT</h3>
            <p class="text-split"><?=$gioithieuIndex["desc$lang"]?></p>
            <a class="more-about" href="gioi-thieu">Xem tất cả</a>
        </div>
        <div class="item-about">
            <?php foreach ($sliderGioithieu as $item){ ?>
            <div class="about">
                <a class="box-about text-decoration-none" href="gioi-thieu" title="1">
                    <img onerror="this.src='thumbs/230x230x2/assets/images/noimage.png';" src="thumbs/230x230x1/storage/upload/photo/<?=$item["photo"]?>" alt="1">
                </a>
            </div>
           <?php } ?>
        </div>
    </div>
</div>

<div class="wrap-product wrap-content content">
<?php foreach ($splistnb as $klist => $vlist) {
    $indexProducts = $cache->get("select * from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) and id_list=? limit 6", array('san-pham', $vlist['id']), 'result', 7200);
    $indexCats= $cache->get("select * from #_product_cat where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) and id_list=? limit 4", array('san-pham', $vlist['id']), 'result', 7200);
    if(count($indexProducts) > 0){
        ?>


    <div class="model-product">
        <div class="title-list d-flex align-items-center justify-content-start">
            <span><?=$vlist["namevi"]?></span>
            <div class="title-cat">
                <?php foreach($indexCats as $cat){ ?>
                    <label data-idl="<?=$vlist["id"]?>" data-idc="<?=$cat["id"]?>"><?=$cat["namevi"]?></label>
                <?php } ?>
            </div>
        </div>
        <div class="group-product d-flex align-items-start justify-content-between">
            <div class="avatar-list">
                <a class="text-decoration-none" href="<?=$vlist["slugvi"]?>" title="<?=$vlist["namevi"]?>">
                    <img onerror="this.src='thumbs/300x600x2/assets/images/noimage.png';" src="thumbs/300x600x1/storage/upload/product/<?=$vlist["photo"]?>" alt="<?=$vlist["namevi"]?>">
                </a>
            </div>
            <div class="col-pro">
                <div class="row">
                    <?php
                    foreach ($indexProducts as $k => $item) { ?>
                        <div class="col-lg-4 col-6">
                            <div class="product">
                                <a class="box-product text-decoration-none" href="<?=$item["slug$lang"]?>" title="<?=$item["name$lang"]?>">
                                    <p class="pic-product scale-img"><img onerror="this.src='thumbs/260x230x2/assets/images/noimage.png';" src="thumbs/260x230x1/storage/upload/product/<?=$item["photo"]?>" alt="<?=$item["name$lang"]?>"></p>
                                    <h3 class="name-product text-split"><?=$item["name$lang"]?></h3>
                                </a>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>


    <?php } ?>
<?php } ?>
</div>



<div class="wrap-step content">
    <div class="wrap-content">
        <div class="title-main">
            <span>Quy trình sản xuất</span>
            <p>Luôn đem đến những sản phẩm chất lượng đến tay người dùng</p>
        </div>
        <div class="square-step d-flex align-items-start justify-content-between">
            <div class="box-step d-flex align-items-center justify-content-start">
                <a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="tay-rua-khuon">
                    <div class="info-step">
                        <h3 class="name-step text-split">1. TẨY RỬA KHUÔN</h3>
                        <p class="desc-step text-split">Tẩy rửa dầu mỡ trên mặt khuôn</p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i1-8330.png" alt="TẨY RỬA KHUÔN">
                        </p>
                    </div>
                </a>
                <a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="say-kho-lam-sach-be-mat">
                    <div class="info-step">
                        <h3 class="name-step text-split">2. SẤY KHÔ, LÀM SẠCH BỀ MẶT</h3>
                        <p class="desc-step text-split">Cho vào lò sấy khô ở nhiệt độ 300 độ C và phun cát làm sạch bề mặt khuôn</p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i1-5468.png" alt="SẤY KHÔ, LÀM SẠCH BỀ MẶT">
                        </p>
                    </div>
                </a>
                <a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="phun-phu-son-lot">
                    <div class="info-step">
                        <h3 class="name-step text-split">3. PHUN PHỦ SƠN LÓT</h3>
                        <p class="desc-step text-split">Phun phủ lớp sơn lót thật đều trên bề mặt </p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i3-4244.png" alt="PHUN PHỦ SƠN LÓT">
                        </p>
                    </div>
                </a>
            </div><div class="box-step d-flex align-items-center justify-content-end">											<a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="buoc-2">
                    <div class="info-step">
                        <h3 class="name-step text-split">4. PHUN PHỦ LỚP SƠN CHỐNG DÍNH</h3>
                        <p class="desc-step text-split">Phun phủ lớp sơn chống dính thứ hai và cho vào lò sấy</p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i2-6773.png" alt="PHUN PHỦ LỚP SƠN CHỐNG DÍNH">
                        </p>
                    </div>
                </a>
                <a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="kiem-tra-khuon">
                    <div class="info-step">
                        <h3 class="name-step text-split">5. KIỂM TRA KHUÔN</h3>
                        <p class="desc-step text-split">Kiểm tra khuôn trước khi đóng gói </p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i2-7883.png" alt="KIỂM TRA KHUÔN">
                        </p>
                    </div>
                </a>
                <a class="item-square d-flex align-items-center justify-content-between text-decoration-none" href="giao-hang">
                    <div class="info-step">
                        <h3 class="name-step text-split">6. GIAO HÀNG</h3>
                        <p class="desc-step text-split">Giao hàng đến tay Quý khách hàng</p>
                    </div>
                    <div class="line-step">
                        <p class="pic-step scale-img"><img onerror="this.src='thumbs/60x60x2/assets/images/noimage.png';" src="upload/news/i3-2967.png" alt="GIAO HÀNG">
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



<div class="wrap-newsnb py-5">
    <div class="container">
        <div class="title-main">
            <span>Tin tức thị trường</span>
            <p>Luôn đem đến những sản phẩm chất lượng đến tay người dùng</p>
        </div>
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10" data-md-items="2:10"
             data-lg-items="3:10" data-xlg-items="3:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
             data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
             data-nav="0" data-navtext="" data-navcontainer="">
            <?php foreach($newsnb as $item){ ?>
             <div class="item-newsnb">
                <p class="pic-newsnb">
                    <a class="scale-img" href="<?=$item["slugvi"]?>" title="<?=$item["namevi"]?>">
                        <img class="lazy w-100" onerror="this.src='thumbs/576x432x1/assets/images/noimage.png';"
                             data-src="thumbs/576x432x1/storage/upload/news/<?=$item["photo"]?>"
                             alt="<?=$item["namevi"]?>" title="<?=$item["namevi"]?>" />
                    </a>
                </p>
                <div class="info-newsnb">
                    <div class="time-newshome"><div><span>23</span><span>11/2023</span></div></div>
                    <div>
                        <h3 class="mb-0">
                            <a class="name-newsnb text-split text-decoration-none" href="<?=$item["slugvi"]?>"
                               title="<?=$item["namevi"]?>"><?=$item["namevi"]?></a>
                        </h3>
                        <p class="desc-newsnb text-split"><?=$item["descvi"]?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>



<div class="wrap-partner">
    <div class="wrap-content d-flex align-items-center justify-content-between">
        <div class="title-partner">
            <span>Đối tác khách hàng</span>
        </div>
        <div class="owl-page owl-carousel owl-theme owl-partner" data-xsm-items="1:10" data-sm-items="6:10" data-md-items="5:10"
             data-lg-items="5:10" data-xlg-items="6:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
             data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
             data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach($partner as $item){ ?>
                <a class="partner text-decoration-none" href="<?=$item["link"]?>" target="_blank" title="cj">
                    <img onerror="this.src='thumbs/170x100x2/assets/images/noimage.png';" src="thumbs/170x100x1/storage/upload/photo/<?=$item["photo"]?>" alt="cj"/>
                </a>
                <?php } ?>
        </div>

    </div>
</div>
