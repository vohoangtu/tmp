<div class="index-product-noibat">
    <div class="container">
        <div class="title-pro">
            <span>Sale off</span>
        </div>
        <div class="owl-page owl-carousel owl-theme"
             data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:3|margin:10,screen:767|items:3|margin:10,screen:991|items:4|margin:40,screen:1199|items:5|margin:40"
             data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
             data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0"
             data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
             data-nav="1" data-navcontainer=".control-spnb">

            <?php
            foreach ($indexProductsNoiBat as $k => $item) { ?>
                <?php include TEMPLATE . "components/product_item.php"; ?>
            <?php } ?>
        </div>
    </div>
</div>
<div class="bg_spcap1 bg_bgsize w-clear" id="top-menu">
    <div class="container w-clear">
        <div class="owl-page owl-carousel owl-theme"
             data-items="screen:0|items:2|margin:50,screen:425|items:2|margin:50,screen:575|items:3|margin:50,screen:767|items:3|margin:100,screen:991|items:3|margin:100,screen:1199|items:5|margin:100"
             data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="0"
             data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0"
             data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
             data-nav="1" data-navcontainer=".control-spnb">
            <?php foreach ($indexProductListsNoiBat as $k => $item) { ?>
                <div class="product-list">
                    <a class="box-product-list text-decoration-none" title="<?= $item["name$lang"] ?>"
                       href="#menu<?= $item["id"] ?>">
                        <div class="pic-product-list">
                            <div href="<?= $item['id'] ?>" title="<?= $item["name$lang"] ?>" class="scale-img">
                                <img onerror="this.src='thumbs/100x100x1/assets/images/noimage.png';"
                                     src='thumbs/100x100x1/storage/upload/product/<?= $item["photo"] ?>'
                                     alt='<?= $item["name$lang"] ?>'/>
                            </div>
                        </div>
                        <h3 class="m-0 text-split"><?= $item["name$lang"] ?></h3>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

<?php
$indexSPMoi = 0;
?>

<div class="bg_spnb bg_bgsize w-clear py-5">
    <div class="wrap-main container w-clear">
        <div class="title-pro">
            <span>Sản phẩm mới</span>
        </div>
        <div class="all-spmoi spmoi_dt">
            <div class="grid_2 paddingg_30">
                <div class="grid_2 paddingg_30">
                    <?php
                    for ($indexSPMoi; $indexSPMoi < 4; $indexSPMoi++) {
                        $item = $indexProductsNoiBat[$indexSPMoi];
                        ?>
                        <?php include TEMPLATE . "components/product_item.php"; ?>
                    <?php } ?>
                </div>
                <?php if (isset($indexProductsNoiBat[$indexSPMoi])) {
                    $item = $indexProductsNoiBat[$indexSPMoi];
                    include TEMPLATE . "components/product_item.php";
                } ?>
            </div>
            <div class="grid_4 paddingg_30 all_bottom_pronew">
                <?php
                $endIndexGrid4 = $indexSPMoi + 4;
                for ($indexSPMoi; $indexSPMoi < $endIndexGrid4; $indexSPMoi++) {
                    $item = $indexProductsNoiBat[$indexSPMoi];
                    ?>
                    <?php include TEMPLATE . "components/product_item.php"; ?>
                <?php } ?>
            </div>
        </div>

        <div class="all-spmoi spmoi_mb">
            <div class="grid_4 paddingg_30 grid_3_md paddingg_15_xs grid_2_sm  paddingg_5_xs all_bottom_pronew">
                <?php foreach ($indexProductsNoiBat as $k => $item) { ?>
                    <?php include TEMPLATE . "components/product_item.php"; ?>
                <?php } ?>
            </div>
        </div>
        <div class="clear"></div>
        <a href="san-pham" title="Sản phẩm" class="more_pro_list">Xem tất cả sản phẩm</a>
    </div>

</div>

<div class="bg_qc bg_bgsize w-clear">
    <div class="container">
		<div class="qc-item" owl-item-animation>
			<a class="qc-image scale-img" href="https://www.facebook.com/storemevabeThienPhuc" target="_blank">
				<img class='lazy'
					 onerror="this.src='http://thienphucbabycare.com/thumbs/1366x470x1/assets/images/noimage.png';"
					 data-src='http://thienphucbabycare.com/thumbs/1366x470x1/upload/photo/get-special-offers-from-us-by-buying-in-the-store-5316.png'
					 alt=''/> </a>
		</div>
	</div>
</div>
<?php foreach ($indexProductListsNoiBat as $k => $item) {
    $indexProductCatsNoiBat = $iCache->remember('indexProductCatsNoiBat_' . $item['id'], 3600, function () use (
        $lang, $d, $item
    ) {
        $productNB = new \Illuminate\Support\Collection($d->rawQuery("select * from #_product_cat where type = ? and id_list=? and find_in_set('noibat',status) and find_in_set('hienthi',status)", ['san-pham', $item['id']]));

        return $productNB;
    });
    ?>
    <div class="bg_spcap1_xt bg_bgsize w-clear py-5" id="menu<?= $item['id'] ?>">
        <div class="container">
            <div class="title-product">
                <div class="title_project">
                    <span><?= $item["name$lang"] ?></span>
                    <div class="title-cat slick-cat center title-product-<?= $item['id'] ?>">
                        <?php foreach ($indexProductCatsNoiBat as $kcatItem => $catItem) { ?>
                            <a class="text-decoration-none a-title-product" data-list="<?= $item['id'] ?>"
                               data-cat="<?= $catItem['id'] ?>"><?= $catItem["name$lang"] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="paging-product-category paging-product-category-<?= $item['id'] ?> "
                 data-type="san-pham" data-list="<?= $item['id'] ?>"></div>
            <!--        <a href="--><?php //=$item["slug$lang"]?><!--" title="-->
            <?php //=$item["name$lang"]?><!--" class="more_pro_list">Xem tất cả sản phẩm</a>-->
        </div>
    </div>
<?php } ?>


<div class="bg_qc bg_bgsize w-clear">
    <div class="container">
		<div class="qc-item" owl-item-animation>
			<a class="qc-image scale-img" href="" target="_blank">
				<img class='lazy'
					 onerror="this.src='http://thienphucbabycare.com/thumbs/1366x470x1/assets/images/noimage.png';"
					 data-src='http://thienphucbabycare.com/thumbs/1366x470x1/upload/photo/chrome-white-and-bakers-brown-minimalist-new-born-little-one-facebook-cover-1-8333.png'
					 alt=''/> </a>
		</div>
	</div>
</div>


<div class="bg_info bg_bgsize w-clear">
    <div class="wrap-main w-clear">

        <div class="left_intro w-clear">

            <div class="image_dknt">
                <img class='lazy'
                     onerror="this.src='http://thienphucbabycare.com/thumbs/430x550x1/assets/images/noimage.png';"
                     data-src='http://thienphucbabycare.com/thumbs/430x550x1/upload/photo/welcome-baby-poster-1554.png'
                     alt=''/></div>
            <div class="bg_dknt">

                <div class="title_dknt"><span>Đăng ký nhận tin</span></div>
                <form class="validation-newsletter" id="form-newsletter" novalidate method="post" action=""
                      enctype="multipart/form-data">

                    <div class="newsletter-input">
                        <input type="fullname" class="form-control text-sm" id="fullname-newsletter"
                               name="dataNewsletter[fullname]" placeholder="Họ và tên" required/>
                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                    </div>


                    <div class="newsletter-input">
                        <input type="phone" class="form-control text-sm" id="phone-newsletter"
                               name="dataNewsletter[phone]" placeholder="Số điện thoại" required/>
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                    </div>
                    <div class="newsletter-input">
                        <input type="email" class="form-control text-sm" id="email-newsletter"
                               name="dataNewsletter[email]" placeholder="Email"/>
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                    </div>
                    <div class="newsletter-input">
                        <textarea type="text" class="form-control" id="content-newsletter"
                                  name="dataNewsletter[content]" placeholder="Nội dung"/></textarea>
                        <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                    </div>

                    <div class="clear"></div>
                    <div class="newsletter-button">
                        <input type="submit" class="btn btn-sm " value="Đăng ký ngay">
                        <input type="hidden" name="submit-newsletter" value="1">

                        <input type="hidden" class="btn btn-sm btn-danger " name="recaptcha_response_newsletter"
                               id="recaptchaResponseNewsletter">
                    </div>
                </form>
            </div>

        </div>
        <div class="right_intro w-clear">
            <div class="title-intro">

                <span>Tin tức nổi bật</span>
            </div>
            <div class="slick-news-for">
                <div class="news-shadow-lrn">
                    <div class="news-shadow-lrn-article position-relative d-flex justify-content-between">
                        <div class="news-shadow-lrn-image ">
                            <a class="scale-img" href="d-d-d"
                               title="𝐋𝐢́ 𝐝𝐨 𝐜𝐨𝐧 𝐜𝐡𝐚̣̂𝐦 𝐭𝐚̆𝐧𝐠 𝐜𝐚̂𝐧 ?𝐌𝐨𝐦 đ𝐚̃ 𝐜𝐡𝐨 𝐜𝐨𝐧 𝐚̆𝐧 đ𝐮́𝐧𝐠 𝐜𝐚́𝐜𝐡 𝐜𝐡𝐮̛𝐚?  𝐂𝐚́𝐜 𝐦𝐨𝐦 𝐜𝐮̀𝐧𝐠 đ𝐨̣𝐜 𝐯𝐚̀ 𝐥𝐮̛𝐮 𝐲́ 𝐧𝐡𝐞́ ">
                                <img
                                    onerror="this.src='http://thienphucbabycare.com/thumbs/240x165x1/assets/images/noimage.png';"
                                    src='http://thienphucbabycare.com/thumbs/240x165x1/upload/news/th-8775.jpg'
                                    alt='𝐋𝐢́ 𝐝𝐨 𝐜𝐨𝐧 𝐜𝐡𝐚̣̂𝐦 𝐭𝐚̆𝐧𝐠 𝐜𝐚̂𝐧 ?𝐌𝐨𝐦 đ𝐚̃ 𝐜𝐡𝐨 𝐜𝐨𝐧 𝐚̆𝐧 đ𝐮́𝐧𝐠 𝐜𝐚́𝐜𝐡 𝐜𝐡𝐮̛𝐚?  𝐂𝐚́𝐜 𝐦𝐨𝐦 𝐜𝐮̀𝐧𝐠 đ𝐨̣𝐜 𝐯𝐚̀ 𝐥𝐮̛𝐮 𝐲́ 𝐧𝐡𝐞́ '/>
                            </a>
                        </div>
                        <div class="news-shadow-lrn-info ">
                            <h3 class="news-shadow-lrn-name">
                                <a class="text-decoration-none transition text-split" href="d-d-d"
                                   title="𝐋𝐢́ 𝐝𝐨 𝐜𝐨𝐧 𝐜𝐡𝐚̣̂𝐦 𝐭𝐚̆𝐧𝐠 𝐜𝐚̂𝐧 ?𝐌𝐨𝐦 đ𝐚̃ 𝐜𝐡𝐨 𝐜𝐨𝐧 𝐚̆𝐧 đ𝐮́𝐧𝐠 𝐜𝐚́𝐜𝐡 𝐜𝐡𝐮̛𝐚?  𝐂𝐚́𝐜 𝐦𝐨𝐦 𝐜𝐮̀𝐧𝐠 đ𝐨̣𝐜 𝐯𝐚̀ 𝐥𝐮̛𝐮 𝐲́ 𝐧𝐡𝐞́ ">𝐋𝐢́
                                    𝐝𝐨 𝐜𝐨𝐧 𝐜𝐡𝐚̣̂𝐦 𝐭𝐚̆𝐧𝐠 𝐜𝐚̂𝐧 ?𝐌𝐨𝐦 đ𝐚̃ 𝐜𝐡𝐨 𝐜𝐨𝐧 𝐚̆𝐧 đ𝐮́𝐧𝐠 𝐜𝐚́𝐜𝐡 𝐜𝐡𝐮̛𝐚? 𝐂𝐚́𝐜 𝐦𝐨𝐦 𝐜𝐮̀𝐧𝐠
                                    đ𝐨̣𝐜 𝐯𝐚̀ 𝐥𝐮̛𝐮 𝐲́ 𝐧𝐡𝐞́ </a>
                            </h3>
                            <div class="news-shadow-lrn-desc text-split"></div>
                            <a href="d-d-d" class="more_news"
                               title="𝐋𝐢́ 𝐝𝐨 𝐜𝐨𝐧 𝐜𝐡𝐚̣̂𝐦 𝐭𝐚̆𝐧𝐠 𝐜𝐚̂𝐧 ?𝐌𝐨𝐦 đ𝐚̃ 𝐜𝐡𝐨 𝐜𝐨𝐧 𝐚̆𝐧 đ𝐮́𝐧𝐠 𝐜𝐚́𝐜𝐡 𝐜𝐡𝐮̛𝐚?  𝐂𝐚́𝐜 𝐦𝐨𝐦 𝐜𝐮̀𝐧𝐠 đ𝐨̣𝐜 𝐯𝐚̀ 𝐥𝐮̛𝐮 𝐲́ 𝐧𝐡𝐞́ ">Xem
                                thêm</a>
                        </div>
                    </div>
                </div>
                <div class="news-shadow-lrn">
                    <div class="news-shadow-lrn-article position-relative d-flex align-items-center justify-content-between flex-row-reverse">
                        <div class="news-shadow-lrn-image ">
                            <a class="scale-img" href="21-luu-y-khi-cham-be-duoi-1-tuoi"
                               title="21 Lưu Ý Khi Chăm Bé Dưới 1 Tuổi">
                                <img
                                    onerror="this.src='http://thienphucbabycare.com/thumbs/240x165x1/assets/images/noimage.png';"
                                    src='http://thienphucbabycare.com/thumbs/240x165x1/upload/news/hinh-anh-baby-con-trai-ngo-nghinh-de-thuong-1649.jpg'
                                    alt='21 Lưu Ý Khi Chăm Bé Dưới 1 Tuổi'/>
                            </a>
                        </div>
                        <div class="news-shadow-lrn-info ">
                            <h3 class="news-shadow-lrn-name">
                                <a class="text-decoration-none transition text-split"
                                   href="21-luu-y-khi-cham-be-duoi-1-tuoi"
                                   title="21 Lưu Ý Khi Chăm Bé Dưới 1 Tuổi">21 Lưu Ý Khi Chăm Bé Dưới 1 Tuổi </a>
                            </h3>
                            <div class="news-shadow-lrn-desc text-split">Những lưu ý dưới đây chắc chắn các mẹ sẽ cần
                                trong giai đoạn con dưới 1 tuổi. Bởi đây là giai đoạn mẹ có nhiều lo lắng hơn bất cứ
                                thời điểm nào.
                                Cùng ThienPhucBabyCare tham khảo 21 lưu ý mẹ nhé!!
                            </div>
                            <a href="21-luu-y-khi-cham-be-duoi-1-tuoi" class="more_news"
                               title="21 Lưu Ý Khi Chăm Bé Dưới 1 Tuổi">Xem thêm</a>
                        </div>
                    </div>
                </div>
                
                <div class="news-shadow-lrn">
                    <div class="news-shadow-lrn-article position-relative d-flex align-items-center justify-content-between flex-row-reverse">
                        <div class="news-shadow-lrn-image ">
                            <a class="scale-img" href="thuc-don-cho-be-1-tuoi-bieng-an-du-chat-giup-be-tang-can"
                               title="Thực Đơn Cho Bé 1 Tuổi Biếng Ăn, Đủ Chất, Giúp Bé Tăng Cân">
                                <img
                                    onerror="this.src='http://thienphucbabycare.com/thumbs/240x165x1/assets/images/noimage.png';"
                                    src='http://thienphucbabycare.com/thumbs/240x165x1/upload/news/z423635886112981f4e577280ecd052a6a4efee1db48a5-1683.jpg'
                                    alt='Thực Đơn Cho Bé 1 Tuổi Biếng Ăn, Đủ Chất, Giúp Bé Tăng Cân'/>
                            </a>
                        </div>
                        <div class="news-shadow-lrn-info ">
                            <h3 class="news-shadow-lrn-name">
                                <a class="text-decoration-none transition text-split"
                                   href="thuc-don-cho-be-1-tuoi-bieng-an-du-chat-giup-be-tang-can"
                                   title="Thực Đơn Cho Bé 1 Tuổi Biếng Ăn, Đủ Chất, Giúp Bé Tăng Cân">Thực Đơn Cho Bé 1
                                    Tuổi Biếng Ăn, Đủ Chất, Giúp Bé Tăng Cân </a>
                            </h3>
                            <div class="news-shadow-lrn-desc text-split">Khi bé bước vào độ tuổi ăn dặm, là khoảng thời
                                gian khiến nhiều bà mẹ phải đau đầu vì không biết làm thế nào để bé ăn ngon. Bên cạnh
                                đó, phải cho bé ăn dặm như thế nào, bao nhiêu bữa là đủ cũng là thắc mắc của nhiều mẹ
                                bỉm. Cùng Huggies tham khảo một số thực đơn cho bé 1 tuổi ăn dặm cũng như những điều bạn
                                cần biết khi cho bé ăn gì là gì nhé.
                            </div>
                            <a href="thuc-don-cho-be-1-tuoi-bieng-an-du-chat-giup-be-tang-can" class="more_news"
                               title="Thực Đơn Cho Bé 1 Tuổi Biếng Ăn, Đủ Chất, Giúp Bé Tăng Cân">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="bg_article bg_bgsize py-5">
	<div class="container w-clear">
		<div class="all_article">
			<div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:4|margin:25,screen:991|items:4|margin:50,screen:1199|items:5|margin:50" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-article">
				<div class="item_article">
					<div class="bd_article flexnowidth justifylex topbottomflex" title="Gía cả hợp lí" href="gia-ca-hop-li">
						<div class="img_article ">
							<img   onerror="this.src='http://thienphucbabycare.com/thumbs/65x65x2/assets/images/noimage.png';" src='http://thienphucbabycare.com/thumbs/65x65x2/upload/news/thietkechuacoten12-removebg-preview-9484.png' alt='Gía cả hợp lí'/>              </div>
						<div class="des_article">
							<h3 class="text-split m-0">Gía cả hợp lí</h3>
							<span class="text-split"></span>
						</div>
					</div>
				</div>
				<div class="item_article">
					<div class="bd_article flexnowidth justifylex topbottomflex" title="Tư vấn nhiệt tình" href="tu-van-nhiet-tinh">
						<div class="img_article ">
							<img   onerror="this.src='http://thienphucbabycare.com/thumbs/65x65x2/assets/images/noimage.png';" src='http://thienphucbabycare.com/thumbs/65x65x2/upload/news/3190422-removebg-preview-5912.png' alt='Tư vấn nhiệt tình'/>              </div>
						<div class="des_article">
							<h3 class="text-split m-0">Tư vấn nhiệt tình</h3>
							<span class="text-split"></span>
						</div>
					</div>
				</div>
				<div class="item_article">
					<div class="bd_article flexnowidth justifylex topbottomflex" title="Sản phẩm chất lượng" href="san-pham-chat-luong">
						<div class="img_article ">
							<img   onerror="this.src='http://thienphucbabycare.com/thumbs/65x65x2/assets/images/noimage.png';" src='http://thienphucbabycare.com/thumbs/65x65x2/upload/news/310831-removebg-preview-6843.png' alt='Sản phẩm chất lượng'/>              </div>
						<div class="des_article">
							<h3 class="text-split m-0">Sản phẩm chất lượng</h3>
							<span class="text-split"></span>
						</div>
					</div>
				</div>
				<div class="item_article">
					<div class="bd_article flexnowidth justifylex topbottomflex" title="Giao nhanh" href="giao-nhanh">
						<div class="img_article ">
							<img   onerror="this.src='http://thienphucbabycare.com/thumbs/65x65x2/assets/images/noimage.png';" src='http://thienphucbabycare.com/thumbs/65x65x2/upload/news/thietkechuacoten14-removebg-preview-5616.png' alt='Giao nhanh'/>              </div>
						<div class="des_article">
							<h3 class="text-split m-0">Giao nhanh</h3>
							<span class="text-split"></span>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>


