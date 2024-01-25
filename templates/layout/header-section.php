<div class="header">
    <div class="header-bottom">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <a class="logo-header" href="">
                <img class='lazy'  onerror="this.src='thumbs/130x110x2/assets/images/noimage.png';"
                data-src='thumbs/130x110x2/storage/upload/photo/<?=$logo["photo"]?>' alt='<?=$setting["name$lang"]?>'/>
            </a>
            <a class="banner-header" href="">
                <img class='lazy'  onerror="this.src='thumbs/650x70x2/assets/images/noimage.png';"
                     data-src='storage/upload/photo/<?=$banner["photo"]?>' alt='<?=$setting["name$lang"]?>'/>			</a>
            <div class="thelastbox-header">
                <div class="hotline-header">
                    <a class="d-block text-decoration-none"
                       href="tel:<?=$optsetting["hotline"]?>"><?=$optsetting["hotline"]?></a>
                    <a class="d-block text-decoration-none"
                       href="tel:<?=$optsetting["phone"]?>"><?=$optsetting["phone"]?></a>
                </div>
            </div>
        </div>
    </div>
</div><div class="menu">
    <div class="container">
        <ul class="d-flex align-items-center justify-content-start">
            <li class="col-auto"><a class="active transition" href="" title="Trang chủ">Trang Chủ</a></li>
            <li class="col-auto"><a class="active transition" href="gioi-thieu" title="Trang chủ">Giới Thiệu</a></li>
            <li class="col-auto">
                <a class="active transition" href="san-pham" title="Sản Phẩm">Sản Phẩm</a>
                <?php if (count($splist)) { ?>
                <ul>
                <?php foreach ($splist as $klist => $vlist) {
                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
            <li class="col-auto">

                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>

                <?php if (!empty($spcat)) { ?>

                    <ul>

                        <?php foreach ($spcat as $kcat => $vcat) {

                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>

                            <li>

                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                <?php if (!empty($spitem)) { ?>

                                    <ul>

                                        <?php foreach ($spitem as $kitem => $vitem) {

                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>

                                            <li>

                                                <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>

                                                <?php if (!empty($spsub)) { ?>

                                                    <ul>

                                                        <?php foreach ($spsub as $ksub => $vsub) { ?>

                                                            <li>

                                                                <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>

                                                            </li>

                                                        <?php } ?>

                                                    </ul>

                                                <?php } ?>

                                            </li>

                                        <?php } ?>

                                    </ul>

                                <?php } ?>

                            </li>

                        <?php } ?>

                    </ul>

                <?php } ?>

            </li>

            <?php } ?>
        </ul>
            <?php } ?>
            </li>


            <li class="col-auto">
                <a class="has-child  transition" href="dich-vu" title="Dịch Vụ">Dịch Vụ</a>
            </li>
            <li class="col-auto">
                <a class="has-child  transition" href="cong-trinh" title="Công Trình Dự Án">Công Trình Dự Án</a>
            </li>
            <li class="col-auto">
                <a class="has-child  transition" href="tin-tuc" title="Tin tức">Tin tức</a>
            </li>
            <li class="col-auto"><a class=" transition" href="lien-he" title="Liên hệ">Liên hệ</a></li>
            <li class="col-auto">
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="Bạn cần tìm kiếm gì?" onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"></p>
                </div>
            </li>
        </ul>
    </div>
</div><div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="Nhập từ khóa cần tìm..." onkeypress="doEnter(event,'keyword-res');"/>
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li class="col-auto"><a class="transition" href="" title="Trang chủ">Trang chủ</a></li>
            <li><a class=" transition" href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
            <li>
                <a class="has-child  transition" href="dich-vu" title="Dịch Vụ">Dịch Vụ</a>
                <?php if (count($splist)) { ?>

                    <ul>

                        <?php foreach ($splist as $klist => $vlist) {

                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>

                            <li>

                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>

                                <?php if (!empty($spcat)) { ?>

                                    <ul>

                                        <?php foreach ($spcat as $kcat => $vcat) {

                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>

                                            <li>

                                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                                <?php if (!empty($spitem)) { ?>

                                                    <ul>

                                                        <?php foreach ($spitem as $kitem => $vitem) {

                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>

                                                            <li>

                                                                <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>

                                                                <?php if (!empty($spsub)) { ?>

                                                                    <ul>

                                                                        <?php foreach ($spsub as $ksub => $vsub) { ?>

                                                                            <li>

                                                                                <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>

                                                                            </li>

                                                                        <?php } ?>

                                                                    </ul>

                                                                <?php } ?>

                                                            </li>

                                                        <?php } ?>

                                                    </ul>

                                                <?php } ?>

                                            </li>

                                        <?php } ?>

                                    </ul>

                                <?php } ?>

                            </li>

                        <?php } ?>

                    </ul>

                <?php } ?>
            </li>
            <li>
                <a class="has-child  transition" href="dich-vu" title="Dịch Vụ">Dịch Vụ</a>
            </li>
            <li>
                <a class="has-child  transition" href="cong-trinh" title="Công Trình Dự Án">Công Trình Dự Án</a>
            </li>
            <li>
                <a class="has-child  transition" href="tin-tuc" title="Tin tức">Tin tức</a>
            </li>
            <li><a class=" transition" href="lien-he" title="Liên hệ">Liên hệ</a></li>
        </ul>
    </nav>
</div>