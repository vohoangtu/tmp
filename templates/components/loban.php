<div class="title"><span>Thước lỗ ban</span></div>
<div class="clear"></div>
<div id="lobanOuter" style="height:460px;top:30px;">
    <div id="abc"></div>
    <div class="loban-touch-left"></div>
    <div class="loban-touch-right"></div>
    <div id="sodoLoban"></div>
    <div id="container-sodo"><input type="text" value="450" name="sodo" id="sodo" /> mm (nhập số)</div>
    <div id="thanhdo"></div>
    <p class="loban-note">Hãy kéo thước</p>
    <p class="loban-t loban-522"><strong>Thước Lỗ Ban 52.2cm:</strong> Khoảng thông thủy (cửa, cửa sổ...)</p>
    <p class="loban-t loban-429"><strong>Thước Lỗ Ban 42.9cm (Duong trạch):</strong> Khối xây dựng (bếp, bệ, bậc...)</p>
    <p class="loban-t loban-388"><strong>Thước Lỗ Ban 38.8cm (âm phần):</strong> Đồ nội thất (bàn thờ, tủ...)</p>
    <div id="loban-wrapper">
        <div id="loban-scroller">
            <div id="pullRight" style="display:none;">
                <span class="pullRightIcon"></span><span class="pullRightLabel">Kéo qua phải...</span>
            </div>
            <ul id="loban-thelist">
                <li>
                    <img src="ajax/thuoc522.png" />
                    <img src="ajax/thuoc429.png" />
                    <img src="ajax/thuoc388.png" />
                </li>
            </ul>
            <div id="pullLeft" style="display:none;">
                <span class="pullLeftIcon"></span><span class="pullLeftLabel">Kéo qua trái...</span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div style="height:50px;"></div><div class="row row-full-width"  id="row-984454988">
    <div class="col small-12 large-12"  ><div class="col-inner"  >
        </div></div>
    <style scope="scope">
    </style>
</div>
<?php
$attributes = new \Illuminate\Support\Collection($d->rawQuery("select * from #_news WHERE type IN ('loai-mong', 'loai-mai', 'so-tang') and find_in_set('hienthi', status)",
    []));
$loadnhaList = new \Illuminate\Support\Collection($d->rawQuery("select * from #_news_list WHERE type = ? and find_in_set('hienthi', status)",
    ['loai-nha']));
?>
<div id="sec_home">
    <div class="center-layout">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="title"><span>Dự toán chi phí</span></div>
                <div class="clear"></div>
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
            <?php
                $attributes = new \Illuminate\Support\Collection($d->rawQuery("select id, namevi, type from #_news_attribute", []));
                $productList = $d->rawQuery("Select * from #_news_list where find_in_set('hienthi', status) ");
            ?>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="title"><span>Công cụ tìm kiếm</span></div>
                <div class="clear"></div>
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
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div id="sec_home2">
    <div class="center-layout">
        <div class="title"><span>Tra cứu phong thủy</span></div>
        <div class="clear"></div>
        <div class="tracuu-content">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="col-tracuu">
                        <div class="tracuu-inner">
                            <p class="tit">Xem hướng nhà</p>
                            <div class="form-group clearfix">
                                <label for="sel2">Năm sinh gia chủ:</label>
                                <select class="form-control halfform" id="namsinh" name="namsinh">
                                    <?php $from = 1940; while ($from++ < date("Y")){ ?>
                                    <option value="<?=$from?>"><?=$from?></option>
                                    <?php } ?>

                                </select>
                                <select class="form-control halfform" id="gioitinh" name="gioitinh">
                                    <option value="nam">Nam</option>
                                    <option value="nu" selected="">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Hướng nhà:</label>
                                <select name="trend" id="trend" class="boxInput form-control">
                                    <option value="huong-dong" selected="">Hướng đông</option>
                                    <option value="huong-tay">Hướng Tây</option>
                                    <option value="huong-nam">Hướng Nam</option
                                    <option value="huong-bac">Hướng Bắc</option>
                                    <option value="huong-dong-bac">Hướng Đông
                                        Bắc</option>
                                    <option value="huong-dong-nam">Hướng Đông Nam</option>
                                    <option value="huong-tay-bac">Hướng Tây
                                        Bắc</option><option value=huong-tay-nam">Hướng Tây Nam</option>
                                </select>
                            </div>
                            <a href="javascript:;" class="xemngay xemhuongnha">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="col-tracuu">
                        <div class="tracuu-inner">
                            <p class="tit">Xem tuổi xây dựng</p>
                            <div class="flex_tracc">
                                <div class="form-group clearfix">
                                    <label for="sel2">Năm sinh gia chủ:</label>
                                    <select class="form-control " name="namsinh_1" id="namsinh_1">
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Năm xây dựng:</label>
                                    <select class="form-control " name="namxay" id="namxay">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                        <option value="2043">2043</option>
                                        <option value="2044">2044</option>
                                        <option value="2045">2045</option>
                                        <option value="2046">2046</option>
                                        <option value="2047">2047</option>
                                        <option value="2048">2048</option>
                                        <option value="2049">2049</option>
                                        <option value="2050">2050</option>
                                        <option value="2051">2051</option>
                                        <option value="2052">2052</option>
                                        <option value="2053">2053</option>
                                        <option value="2054">2054</option>
                                        <option value="2055">2055</option>
                                        <option value="2056">2056</option>
                                        <option value="2057">2057</option>
                                        <option value="2058">2058</option>
                                        <option value="2059">2059</option>
                                        <option value="2060">2060</option>
                                        <option value="2061">2061</option>
                                        <option value="2062">2062</option>
                                        <option value="2063">2063</option>
                                        <option value="2064">2064</option>
                                        <option value="2065">2065</option>
                                        <option value="2066">2066</option>
                                        <option value="2067">2067</option>
                                        <option value="2068">2068</option>
                                        <option value="2069">2069</option>
                                        <option value="2070">2070</option>
                                        <option value="2071">2071</option>
                                        <option value="2072">2072</option>
                                    </select>
                                </div>
                            </div>
                            <a href="javascript:;" class="xemngay xemtuoi">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="quangcao"><a href="https://www.google.com/" title="Quảng cáo"><img class="w100 lazy" data-src="upload/photo/quangcao-1959.jpg" alt="Quảng cáo"/></a></div>
