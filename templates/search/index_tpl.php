<div class="block-title __border text-center mb-4">
    <h3>
        <span>Công cụ tìm kiếm</span>
    </h3>
</div>
<div class="col-sm-12 col-12">
    <div class="frm_tknc">
        <form action="tim-kiem">
            <input type="text" name="keyword" value="" placeholder="Nhập từ khóa tìm kiếm">
            <select name="id_cate">
                <option value="">-- Chọn Danh Mục --</option>
                <?php foreach($productList as $list){ ?>
                    <option value="<?=$list["slug$lang"]?>"><?=mb_strtoupper($list["name$lang"])?></option>
                <?php } ?>
            </select>
            <div class="r_sel ">
                <?php foreach ($config['news']['xay-dung']['attributes'] as $attribute => $title){ ?>
                    <select name="<?=$attribute?>">
                        <option value="">-- <?=$title?> --</option>
                        <?php foreach($attributes->where('type', '=', $attribute) as $item){ ?>
                            <option value="<?=$item['id']?>"><?=$item["namevi"]?></option>
                        <?php } ?>
                    </select>
                <?php } ?>
            </div>
            <div class="act_tk">
                <button type="submit"><i class="fas fa-search"></i> TÌM KIẾM</button>
            </div>
        </form>
    </div>
</div>

<div class="block-title __border text-center my-4">
    <h3>
        <span>tìm kiếm</span>
    </h3>
</div>
<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $item) {
            include TEMPLATE . "components/product_item.php";
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
