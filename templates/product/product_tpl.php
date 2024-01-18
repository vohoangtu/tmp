<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main w-clear">
    <div class="grid-page">
    <?php if (!empty($product)) {
        echo '<div class="row">';
        foreach ($product as $k => $item) {
            echo '<div class="col-lg-3 col-md-4 col-6">';
                include TEMPLATE . "components/product_item.php";
            echo '</div>';
        }
        echo '</div>';
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
</div>