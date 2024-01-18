<div class="block-title __border text-center mb-4">
    <h3>
        <span>DỰ TOÁN CHI PHÍ</span>
    </h3>
</div>
<div class="col-sm-12 col-12">
    <div class="formdutoan">
        <form class="formtinhtoan clearfix" method="GET" action="du-toan-chi-phi">
            <div class="formitem">
                <span>Chọn loại nhà:</span>
                <select class="loainha" name="loainha">
                    <?php foreach ($loadnhaList  as $list){ ?>
                        <option value="<?=$list["namevi"]?>" data-idtang =""><?=$list["namevi"]?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formitem">
                <span>Chọn hình thức xây nhà:</span>
                <select class="hinhthucxaydung" name="hinhthucxaydung">
                    <?php foreach ($loadnhaList  as $list){
                        $loainha = $d->rawQuery("select * from #_news where id_list = ? and type = 'loai-nha'",
                            [$list['id']]);
                        foreach($loainha as $item){
                        ?>
                            <option value="<?=$item["namevi"]?>_<?=$item["price"]?>"
                                    class="list_<?=$list['id']?>"><?=$item["namevi"]?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="formitem">
                <span>Chiều rộng m2(Ví dụ 2.5):</span>
                <input type="number" name="chieurongform" class="chieurongform" id="chieurongform" />
            </div>
            <div class="formitem">
                <span>Chiều dài m2(Ví dụ 2.5):</span>
                <input type="number" name="chieudaiform" class=" chieudaiform" id="chieurongform" />
            </div>
            <div class="formitem hidentang">
                <span>Nhập số tầng:</span>
                <select class="sotang" name="sotang">
                    <?php foreach ($attributes->where("type", "=", "so-tang") as $sotang){ ?>
                        <option value="<?=$sotang['price']?>"><?=$sotang['namevi']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formitem">
                <span>Chọn loại móng:</span>
                <select class="loaimong" name="loaimong">
                    <?php foreach ($attributes->where("type", "=", "loai-mong") as $item){ ?>
                        <option value="<?=$item['price']?>"><?=$item['namevi']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formitem">
                <span>Chọn loại mái:</span>
                <select class="loaimai" name="loaimai">
                    <?php foreach ($attributes->where("type", "=", "loai-mai") as $item){ ?>
                        <option value="<?=$item['price']?>"><?=$item['namevi']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="bottomdutoan">
                <button type="submit" class="buttomdt">Tính kết quả</button>
                <input type="reset" name="resetdt" class="buttomdt-r" value="Làm lại" />
            </div>

        </form>
    </div>
</div>

<div class="block-title __border text-center my-4">
    <h3>
        <span>KẾT QUẢ TÍNH DIỆN TÍCH VÀ CHI PHÍ XÂY NHÀ</span>
    </h3>
</div>
<div class="content-main row">
   <div class="col-12">
       <?php
       $_chieudai = $_GET['chieudaiform'];
       $_chieurong = $_GET['chieurongform'];
        $_dientich = ($_chieurong * $_chieudai) + ($_chieurong *
                $_chieudai * 0.01) +
            ($_chieurong * $_chieudai * 0.02);
       ?>
       <p>Bạn cần xây dựng <strong><?=$_GET['loainha']?></strong> và chọn hình thức
           <strong><?=$hinhthucxaydung[0] ?? ''?></strong> <?=$_GET['sotang']?> tầng với
       diện tích là <?=$_chieurong?> x <?=$_chieudai?></p>
       <p>Diện tích tầng trệt: <?=($_chieurong * $_chieudai)?> m2</p>
       <p>Mái Tôn: <?=($_chieurong * $_chieudai * 0.02)?> m2</p>
       <p>1 Móng: <?=($_chieurong * $_chieudai * 0.01)?> m2</p>
       <p>Tổng diện tích xây dựng: <?= $_dientich ?> m2</p>
       Chi phí Xây Nhà Cấp 4 : <?=$func->formatMoney($_dientich * ($hinhthucxaydung[1] ?? 0))?></p>
       <p><strong>(Giá trên áp dụng đối với diện tích xây dựng 80m2/1sàn trở lên. Áp dụng với các loại nhà phố thông
               dụng không có kiến trúc kết cấu đặc biệt.)</strong></p>
   </div>
</div>
