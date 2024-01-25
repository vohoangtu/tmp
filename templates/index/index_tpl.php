<?php foreach ($splist as $klist => $vlist) {
    $indexProducts = $cache->get("select * from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) limit 16", array('san-pham'), 'result', 7200);
    if(count($indexProducts) > 0){
        ?>
        <div id="productList_<?=$klist?>" class="index-product-list mb-5">
            <div class="container">
                <div class="block-title text-center">
                    <h3>
                        <span><?=$vlist["name$lang"]?></span>
                    </h3>
                    <div class="slogan-index">
                        <p>Hãy gọi cho chúng tôi, Tư vấn, Thiết kế miễn phí cho bạn.<br>
                            Dịch vụ khách hàng 24/7. Chất lượng hàng đầu.</p>
                    </div>
                </div>
                <?php
                echo '<div class="row">';

                        foreach ($indexProducts as $k => $item) {

                            echo '<div class="col-lg-3 col-md-4 col-6">';

                                include TEMPLATE . "components/product_item.php";

                            echo '</div>';

                        }

        echo '</div>';
        ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<section class="news-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-4">
                <div class="title-news"><h2>Tin tức sự kiện</h2></div>
                <div class="clearfix"></div>
                <div class="content-news">
                     <?php foreach($newsnb as $item){ ?>
                    <div class="item-news">
                        <div class="col-sm-4">
                            <a
                                    href="<?=$item["slugvi"]?>" title="<?=$item["namevi"]?>">
                                <img class='lazy'  onerror="this
                                                .src='thumbs/130x110x1/assets/images/noimage.png';"
                                     data-src='thumbs/130x110x1/storage/upload/news/<?=$item["photo"]?>' alt='<?=$item["namevi"]?>'/>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <div class="ps-2">
                                <div class="name-news" style="margin-top:0">
                                    <a href="<?=$item["slugvi"]?>"
                                       title="<?=$item["namevi"]?>"><?=$item["namevi"]?></a>
                                </div>
                                <div class="desc-news text-split"><?=$item["descvi"]?></div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-sm-12 col-md-4">
                <div class="title-news"><h2>Hỗ trợ trực tuyến</h2></div>
                <div class="clearfix"></div>
                <div class="content-support">
                    <div class="hotline-support">
                        0934 007 099 </br> 0932 160 899					</div>
                </div>
            </div>
            <div class="col-sm-12 col-sm-12 col-md-4">
                <div class="title-news"><h2>Fanpage facebook</h2></div>
                <div class="clearfix"></div>
                <div class="content-face">
                    <div id="fb-root"></div>
                    <script type="text/javascript">
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));

                    </script>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-small-header="false" data-height="350" data-width="400" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>

</section>