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
<div class="block-main-services mb-5">
    <div class="container">
        <div class="block-title text-center">
            <h3>
                <span>DỊCH VỤ CHÍNH</span>
            </h3>
        </div>
        <div>
            <div class="paging-dichvu_chinh"></div>
        </div>
    </div>
</div>

<div class="block-main-services mb-5">
    <div class="container">
        <div class="block-title text-center">
            <h3>
                <span>DỊCH VỤ NỔI BẬT</span>
            </h3>
        </div>
        <div>
            <div class="paging-dichvu_noibat"></div>
        </div>
    </div>
</div>

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