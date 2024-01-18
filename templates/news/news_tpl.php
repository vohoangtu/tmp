<div class="block-title __border text-center mb-4">
    <h3>
        <span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
    </h3>
</div>

<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $item) {
            include TEMPLATE . "components/news_item.php";
        }
    } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>