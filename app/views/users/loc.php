<!-- content -->
<div id="content">


    <div class="shop-main container">
        <div class="row">
            <div class="col-md-3">
                <aside class="left-shop">

                    <div class="shop-categories mb30">
                        <h1 class="asidetitle">Danh Mục</h1>
                        <?php if ($maLoai == 1) { ?>
                            <ul>
                                <?php  ?>
                                <li><a href="?url=nam&ma_loai=1&ma_danh_muc=0">Tất cả cả sản phẩm <span><?= $soLuongTatCaSanPham[0]['so_luong_san_pham'] ?></span></a></li>
                                <?php foreach ($danhMucs as $key => $danhMuc) : ?>
                                    <!-- đếm số lượng sản phẩm từng danh mục  -->
                                    <?php $soLuongSanPhams = soLuongSanPhamDanhMuc($danhMuc['ma_danh_muc'], $maLoai); ?>
                                    <li>
                                        <a href="?url=nam&ma_loai=1&ma_danh_muc=<?= $danhMuc['ma_danh_muc'] ?>"><?= $danhMuc['ten_danh_muc'] ?>
                                            <?php foreach ($soLuongSanPhams as $key => $soLuongSanPham) : ?>
                                                <span>
                                                    <?= $soLuongSanPham['so_luong_san_pham'] ?>
                                                </span>
                                            <?php endforeach;   ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php } ?>

                        <!-- Nữ  -->
                        <?php if ($maLoai == 2) { ?>
                            <ul>
                                <li><a href="?url=nu&ma_loai=2&ma_danh_muc=0">Tất cả cả sản phẩm <span><?= $soLuongTatCaSanPham[0]['so_luong_san_pham'] ?></span></a></li>
                                <?php foreach ($danhMucs as $key => $danhMuc) : ?>
                                    <?php $soLuongSanPhams = soLuongSanPhamDanhMuc($danhMuc['ma_danh_muc'], $maLoai); ?>
                                    <li>
                                        <a href="?url=nu&ma_loai=2&ma_danh_muc=<?= $danhMuc['ma_danh_muc'] ?>"><?= $danhMuc['ten_danh_muc'] ?>
                                            <?php foreach ($soLuongSanPhams as $key => $soLuongSanPham) : ?>
                                                <span>
                                                    <?= $soLuongSanPham['so_luong_san_pham'] ?>
                                                </span>
                                            <?php endforeach ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php } ?>


                    </div>
                <!-- FORM  -->
                    <form action=
                    "
                    <?php if ($maLoai == 1) {
                        echo "?url=nam&ma_loai=1";
                    } ?>
                    <?php if ($maLoai == 2) {
                        echo "?url=nu&ma_loai=2";
                    } ?>
                    " 
                    method="POST">
                        <div class="shop-price mb30">
                            <h1 class="asidetitle">Giá</h1>


                            <p>
                                <input type="text" id="amount">
                            </p>


                            <div id="slider-range"></div>


                        </div>

                        <div class="acc-bordered">
                            <div class="accordion">
                                <div id="accordion-container">
                                    <h2 class="accordion-header">Màu sắc</h2>

                                    <div class="accordion-content">
                                        <div class="brands mb30">
                                            <!-- <form action="#"> -->
                                            <ul>
                                                <?php foreach ($getMauSacs as $key => $getMauSac) : ?>
                                                    <li>
                                                        <input type="checkbox" value="<?= $getMauSac['ma_mau_sac'] ?>" name="ma_mau_sac[]"><?= $getMauSac['ten_mau'] ?>
                                                        <span><?= $getMauSac['so_luong_san_pham'] ?></span>
                                                    </li>
                                                <?php endforeach ?>

                                                <!-- <li><input type="checkbox" value="Brand">White <span>(15)</span></li>
                                                <li><input type="checkbox" value="Brand">Black <span>(31)</span></li>
                                                <li><input type="checkbox" value="Brand">Grey <span>(89)</span></li>
                                                <li><input type="checkbox" value="Brand">Red <span>(95)</span></li>
                                                <li><input type="checkbox" value="Brand">Blue <span>(26)</span></li> -->
                                            </ul>
                                            <!-- </form> -->

                                        </div>
                                    </div>
                                    <h2 class="accordion-header">Sizes</h2>
                                    <div class="accordion-content">
                                        <div class="brands mb30">
                                            <!-- <form action="#"> -->
                                            <ul>
                                                <?php foreach ($getKichThuocs as $key => $getKichThuoc) : ?>
                                                    <li><input type="checkbox" value="<?= $getKichThuoc['ma_kich_thuoc'] ?>" name="ma_kich_thuoc[]"><?= $getKichThuoc['ten_kich_thuoc'] ?>
                                                        <span><?= $getKichThuoc['so_luong_san_pham'] ?></span>
                                                    </li>
                                                <?php endforeach ?>


                                                <!-- <li><input type="checkbox" value="Brand">M <span>(31)</span></li>
                                                <li><input type="checkbox" value="Brand">L <span>(89)</span></li>
                                                <li><input type="checkbox" value="Brand">XL <span>(95)</span></li>
                                                <li><input type="checkbox" value="Brand">XXL <span>(26)</span></li>
                                                <li><input type="checkbox" value="Brand">XXXL <span>(26)</span></li>
                                                <li><input type="checkbox" value="Brand">4XL <span>(26)</span></li> -->
                                            </ul>
                                            <!-- </form> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion -->
                        </div>
                        <?php if ($maLoai == 1) { ?>
                            <button type="submit" class="medium-button button-red mt20" style="border: none;">
                                Lọc
                            </button>
                            <!-- <a href="#" class="medium-button button-red mt20" >Lọc</a> -->
                        <?php } ?>
                        <?php if ($maLoai == 2) { ?>
                            <button type="submit" class="medium-button button-red mt20" style="border: none;">
                                Lọc
                            </button>
                        <?php } ?>



                    </form>
                </aside>
                <!-- End aside shop -->
            </div>

            <div class="col-md-9">
                <div class="shop-content">
                    <div class="toolbar">
                        <div class="sort-select">
                            <label>Sắp xếp theo</label>
                            <select class="selectBox">
                                <option>Mặc định</option>
                                <option>Giá tăng dần</option>
                                <option>Giá giảm dần</option>
                            </select>
                        </div>
                        <div class="sort-select">
                            <label>Hiển thị</label>
                            <select class="selectBox">
                                <option>12</option>
                                <option>16</option>
                                <option>20</option>
                            </select>
                        </div>
                        <div class="lg-panel htabs">
                            <span>View</span>
                            <a href="#!" id="list" class="list-btn"><i class="fa fa-th-list"></i></a>
                            <a href="#!" id="grid" class="grid-btn active"><i class="fa fa-th"></i></a>
                        </div>
                    </div>

                    <div class="row shop-grid">
                        <?php foreach ($sanPhams as $key => $sanPham) : ?>


                            <div class="col-md-4 grid-item mb30">
                                <div class="arrival-overlay">
                                    <img src="<?= IMAGES_URL . $sanPham['anh'] ?>" alt="image">
                                    <p class="new" style="padding: 4px; background-color: red; color: #fff;">
                                        Giảm giá 50%
                                    </p>
                                    <div class="arrival-mask">
                                        <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                        <a href="#" class="wishlist">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="arr-content">
                                    <a href="#">
                                        <p><?= $sanPham['ten_san_pham'] ?></p>
                                    </a>
                                    <p class="high-price">6000000 VND</p>
                                    <p class="low-price"><?= $sanPham['gia'] ?> VND</p>

                                    <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                                </div>
                            </div>
                        <?php endforeach ?>

                     <!-- <?php foreach ($sanPhams as $key => $sanPham) : ?>


                        <div class="col-md-4 grid-item mb30">
                            <div class="arrival-overlay">
                                <img src="<?= IMAGES_URL . $sanPham['anh'] ?>" alt="image">
                                <p class="new" style="padding: 4px; background-color: red; color: #fff;">
                                    Giảm giá 50%
                                </p>
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                    <a href="#" class="wishlist">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p><?= $sanPham['ten_san_pham'] ?></p>
                                </a>
                                <p class="high-price">6000000 VND</p>
                                <p class="low-price"><?= $sanPham['gia'] ?> VND</p>

                                <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                            </div>
                        </div>
                        <?php endforeach ?> -->

                        <!-- <div class="col-md-4 grid-item mb30">
                            <div class="arrival-overlay">
                                <img src="<?php echo SWEETPICK_URL ?>upload/arrival1.jpg" alt="">
                                <p class="new" style="padding: 4px; background-color: red; color: #fff;">
                                    Giảm giá 50%
                                </p>
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                    <a href="#" class="wishlist">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Áo chống nước</p>
                                </a>
                                <p class="high-price">6000000 VND</p>
                                <p class="low-price">3000000 VND</p>

                                <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                            </div>
                        </div> -->






                    </div>



                    <div class="shop-pag">
                        <p class="pag-p">Items <span>1 to 12</span> of 78 Total</p>

                        <div class="right-pag">
                            <div class="sort-select">
                                <label>Show</label>
                                <select class="selectBox">
                                    <option>12</option>
                                    <option>24</option>
                                    <option>36</option>
                                </select>
                            </div>

                            <div class="pagenation clearfix">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End content -->