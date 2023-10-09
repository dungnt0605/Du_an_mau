<?php
extract($sp_ct);
extract($ten_title);

?>
<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">
            <div class="sp_ct ">
                <div class="img_sp">
                    <img src="./imageT2/<?= $image ?>" alt="">
                </div>
                <div class="sp_text">
                    <h2><?= $ten_hh ?></h2>
                    <span><?= $don_gia ?> VND</span>
                    <div class="ad_list_star flex">
                        <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                        <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                        <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                        <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                        <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                    </div>
                    <p><?= $mo_ta ?></p>
                    <div class="flex">
                        <button type="submit" name="add_card" class="cam-btn" >Thêm vào giỏ hàng</button>
                        <button type="submit" name="buy_now" class="blue-btn">Mua ngay</button>
                    </div>
                </div>

            </div>
            <div class="extend_sp">
                <div class="sp_new_10">
                    <h2 class="text-center mt-5"><?= $ten_loai ?></h2>
                    <div class="admin_list_sp ">

                        <?php foreach ($sp_theo_dm as $value) : ?>
                            <?php $link_sp = "index.php?act=sanpham_ct&id_sp=" . $value['ma_hh'] . "&id_dm=" . $value['ma_loai']; ?>

                            <div class=" list_sp-item">
                                <a href="<?= $link_sp ?>" class="link_sp">
                                    <img style="height: 270px; object-fit: cover;" src="./imageT2/<?= $value['image'] ?>" class="" alt="...">
                                    <div class="ad_list-text">
                                        <h3 class="blue"><?= $value['ten_hh'] ?></h3>
                                        <p class="blue"><?= $value['don_gia'] ?> VND</p>
                                        <div class="ad_list_star flex">
                                            <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                                            <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                                            <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                                            <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                                            <i class="fa-solid fa-star " style="color: #f7e418;font-size: 13px;"></i>
                                        </div>
                                        <div class="ad_list_btn flex between">
                                            <a href="#"><button class="ad_liss_sp_btn">Mua ngay</button></a>
                                            <a href="#"><button class="ad_liss_sp_btn_cart"><i class="fa-solid fa-cart-arrow-down"></i></button></a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>

        <aside class="col-lg-3">

            <!-- LOGIN -->
            <?php require "layout/login.php"; ?>
            <!-- DANH MỤC -->
            <?php require "layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "layout/top10.php"; ?>

        </aside>
    </div>
</main>