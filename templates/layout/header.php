<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <a class="logo-header" href="">
                <?= $func->getImage(['sizes' => '133x116x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt'
                => $setting['name' . $lang]]) ?>
            </a>
            <a class="banner-header" href="">
                <?= $func->getImage(['sizes' => '335x99x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt'
                => $setting['name' . $lang]]) ?>
            </a>
            <a class="address-header">
                <p>Địa chỉ:</p>
                <span class=""><?=$optsetting["address"]?></span>
            </a>
            <a class="hotline-header">
                <p>Hotline:</p>
                <span class="blink"><?=$optsetting["hotline"]?></span>
            </a>
        </div>
    </div>
</div>