<div class="row">    <div class="col-md-8">        <div class="block-title __border text-center mb-4">            <h3>                <span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>            </h3>        </div>        <div class="content-main row">            <?php if (!empty($news)) {                foreach ($news as $k => $item) {                    include TEMPLATE . "components/news_item.php";                }            } else { ?>                <div class="col-12">                    <div class="alert alert-warning w-100" role="alert">                        <strong><?= khongtimthayketqua ?></strong>                    </div>                </div>            <?php } ?>            <div class="clear"></div>            <div class="col-12">                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>            </div>        </div>    </div>    <div class="col-md-4 content1" id="right-nav-navigation">        <div class="block-title __border text-center mb-4">            <h3>                <span>DANH MỤC SẢN PHẨM</span>            </h3>        </div>        <?php if (count($splist)) { ?>            <ul class="cateUl">                <?php foreach ($splist as $klist => $vlist) {                    $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>                    <li class="col-auto">                        <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>                    </li>                <?php } ?>            </ul>        <?php } ?>    </div></div>