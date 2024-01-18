<div class="header">
    <div class="header-top">
        <div class="wrap-content d-flex align-items-start justify-content-between">
            <div class="slogan-header"><marquee behavior="" direction=""><?=$slogan["name$lang"]?></marquee></div>
            <div class="boxtopright-header d-flex justify-content-end align-items-center">
                <div class="menu-header text-right">
                    <div class="d-inline-block">
                        <a class="d-inline-block text-decoration-none active" href="" title="Home">Home</a>
                    </div>
                    <div class="d-inline-block">
                        <a class="d-inline-block text-decoration-none " href="gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                    </div>
                    <div class="d-inline-block">
                        <a class="d-inline-block text-decoration-none " href="tin-tuc" title="Tin tức & sự kiện">Tin tức & sự kiện</a>
                    </div>
                    <div class="d-inline-block">
                        <a class="d-inline-block text-decoration-none " href="lien-he" title="Liên hệ">Liên hệ</a>
                    </div>
                    <div class="d-inline-block">
                        <a class="d-inline-block text-decoration-none " href="bao-gia" title="Báo giá">Báo giá</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <a class="logo-header" href="">
                <img class='lazy'  onerror="this.src='thumbs/130x110x2/assets/images/noimage.png';"
                data-src='thumbs/130x110x2/storage/upload/photo/<?=$logo["photo"]?>' alt='<?=$setting["name$lang"]?>'/>
            </a>
            <a class="banner-header" href="">
                <img class='lazy'  onerror="this.src='thumbs/930x140x2/assets/images/noimage.png';"
                     data-src='thumbs/930x140x2/storage/upload/photo/<?=$banner["photo"]?>' alt='<?=$setting["name$lang"]?>'/>			</a>
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
    <div class="wrap-content">
        <ul class="d-flex align-items-center justify-content-start">
            <li><a class="active transition" href="" title="Trang chủ"><i class="fas fa-home icon-home-menu"></i></a></li>
            <?php if (count($ttlist)) { ?>
                    <?php foreach ($ttlist as $klist => $vlist) {
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>

                        <li>

                            <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>

                            <?php if (!empty($spcat)) { ?>

                                <ul>

                                    <?php foreach ($spcat as $kcat => $vcat) {

                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>

                                        <li>

                                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                            <?php if (!empty($spitem)) { ?>

                                                <ul>

                                                    <?php foreach ($spitem as $kitem => $vitem) {

                                                        $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>

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

            <?php } ?>
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
            <li><a class="active transition" href="" title="Trang chủ">Trang chủ</a></li>
            <li><a class=" transition" href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
            <li>
                <a class="has-child  transition" href="dich-vu" title="Dịch Vụ">Dịch Vụ</a>
                <?php if (count($ttlist)) { ?>

                    <ul>

                        <?php foreach ($ttlist as $klist => $vlist) {

                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>

                            <li>

                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>

                                <?php if (!empty($spcat)) { ?>

                                    <ul>

                                        <?php foreach ($spcat as $kcat => $vcat) {

                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>

                                            <li>

                                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                                <?php if (!empty($spitem)) { ?>

                                                    <ul>

                                                        <?php foreach ($spitem as $kitem => $vitem) {

                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>

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
                <a class="has-child  transition" href="tin-tuc" title="Tin tức & sự kiện">Tin tức & sự kiện</a>
            </li>
            <li><a class=" transition" href="bao-gia" title="Báo giá">Báo giá</a></li>
            <li><a class=" transition" href="lien-he" title="Liên hệ">Liên hệ</a></li>
        </ul>
    </nav>
</div>