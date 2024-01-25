<?php foreach ($splist as $klist => $vlist) {
    $indexProducts = $cache->get("select * from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) limit 16", array('san-pham'), 'result', 7200);
    if(count($indexProducts) > 0){
        ?>
        <div id="productList_<?=$klist?>" class="index-product-list mb-5">
            <div class="container">
                <div class="block-title text-center">
                    <h3>
                        <span><?=$vlist["name$lang"]?></span>
                    </h3>
                    <div class="slogan-index">
                        <p>Hãy gọi cho chúng tôi, Tư vấn, Thiết kế miễn phí cho bạn.<br>
                            Dịch vụ khách hàng 24/7. Chất lượng hàng đầu.</p>
                    </div>
                </div>
                <?php
                echo '<div class="row">';

                        foreach ($indexProducts as $k => $item) {

                            echo '<div class="col-lg-3 col-md-4 col-6">';

                                include TEMPLATE . "components/product_item.php";

                            echo '</div>';

                        }

        echo '</div>';
        ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>


<div class="service-noibat">
    <div class="container">
        <div class="block-title text-center">
            <h3>
                <span>DỊCH VỤ NỔI BẬT</span>
            </h3>
        </div>
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:15,
        screen:725|items:3|margin:20,screen:975|items:4|margin:40" data-rewind="1"
             data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
            <?php foreach ($indexServices as $item) { ?>
                <div>
                    <div class="news-item service-item service-item-circle position-relative mb-4
                    overflow-hidden">
                        <a class="box-news text-decoration-none" href="<?= $item[$sluglang] ?>" title="<?= $item['name' . $lang] ?>">
                            <p class="pic-news scale-img mb-0">
                                <?= $func->getImage(['sizes' => '480x480x1', 'isWatermark' => true, 'prefix' => 'news', 'upload' =>
                                    UPLOAD_NEWS_L, 'image' => $item['photo'], 'alt' => $item['name' . $lang]]) ?>
                            </p>
                            <div class="shadown"></div>
                            <h3 class="name-news text-split"><?= $item['name' . $lang] ?></h3>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
<section id="about-index">
    <div class="container">
        <div class="about-box d-flex align-items-start justify-content-between flex-wrap">
            <div class="about-left">
                <div class="about-bg"></div>
                <a href="gioi-thieu" title="<?=$gioithieuIndex["name$lang"]?>">
                    <img class="img-block-auto" onerror="this.src='thumbs/558x335x1/assets/images/noimage.png';" src="thumbs/558x335x1/upload/news/<?=$gioithieuIndex["name$lang"]?>" alt="<?=$gioithieuIndex["name$lang"]?>"/>
                </a>
            </div>
            <div class="about-right">
               <?=html_entity_decode($gioithieuIndex["desc$lang"])?>
                <p>
                    <a href="gioi-thieu" class="readmore" title="Xem thêm">
                        Xem thêm
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="block-main-services mb-5">
    <div class="container">
        <div class="block-title text-center">
            <h3>
                <span>HÌNH ẢNH THỰC TẾ</span>
            </h3>
        </div>
        <div>
            <div class="gallery-items row g-0">
                <?php foreach($gallery as $item){ ?>
                    <div class="col-md-3 col-6">
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $item['photo'] ?>">
                            <?= $func->getImage(['sizes' => '480x480x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' =>
                                UPLOAD_PRODUCT_L, 'image' => $item['photo'], 'alt' => $item['name' . $lang]]) ?>
                        </a>
                    </div>
                <?php } ?>
            </a>
        </div>
    </div>
</div>



    <section id="video-fanpage-form-index">
        <div class="container">
            <div class="video-fanpage-form-box d-flex justify-content-between flex-wrap">
                <div class="col-page">
                    <h5>Fanpage</h5>
                    <div class="col-desc">
                        <?=$addons->set('video-fotorama', 'video-fotorama', 3); ?>
                    </div>
                </div>
                <div class="col-page">
                    <h5>Form liên hệ</h5>
                    <div class="col-desc">
                        <form class="validation-contact" novalidate method="post" action="lien-he" enctype="multipart/form-data">
                            <div class="input-contact">
                                <input type="text" class="form-control" id="ten" name="ten" placeholder="Họ tên" required />
                                <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                            </div>
                            <div class="input-contact">
                                <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại" required />
                                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                            </div>
                            <div class="input-contact">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                            </div>
                            <div class="input-contact">
                                <textarea class="form-control" id="noidung" name="noidung" placeholder="Nội dung" required /></textarea>
                                <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit-contact" value="Đăng ký ngay" disabled />
                            <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
