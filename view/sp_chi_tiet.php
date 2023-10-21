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
                    <p>Giống mèo : <?= $ten_loai ?></p>
                    <p>Xuất xứ : Việt Nam</p>
                    <p>Sức khỏe : Đã tiêm 2 mũi</p>
                    <div class="flex">
                        <button type="submit" name="add_card" class="cam-btn">Thêm vào giỏ hàng</button>
                        <form action="index.php?act=cart" method="POST">
                            <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                            <input type="hidden" name="ten_hh" value="<?= $ten_hh ?>">
                            <input type="hidden" name="image" value="<?= $image ?>">
                            <input type="hidden" name="don_gia" value="<?= $don_gia ?>">
                            <input type="hidden" name="giam_gia" value="<?= $giam_gia ?>">
                            <button class="blue-btn" type="submit" name="add">Mua ngay</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="mota mt-5">
                <h2>Mô Tả :</h2> <br>
                <p><?= $mo_ta ?></p>
            </div>
            <div class="extend_sp">
                <div class="sp_new_10">
                    <h2 class=" name text-center befor after"> <?= $ten_loai ?></h2>
                    <div class="admin_list_sp ">

                        <?php foreach ($sp_theo_dm as $value) : ?>
                            <?php $link_sp = "index.php?act=sanpham_ct&id_sp=" . $value['ma_hh'] . "&id_dm=" . $value['ma_loai']; ?>

                            <div class=" list_sp-item">
                                <a href="<?= $link_sp ?>">

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
                                            <form action="index.php?act=cart" method="POST">
                                                <input type="hidden" name="ma_hh" value="<?= $value['ma_hh'] ?>">
                                                <input type="hidden" name="ten_hh" value="<?= $value['ten_hh'] ?>">
                                                <input type="hidden" name="image" value="<?= $value['image'] ?>">
                                                <input type="hidden" name="don_gia" value="<?= $value['don_gia'] ?>">
                                                <input type="hidden" name="giam_gia" value="<?= $value['giam_gia'] ?>">
                                                <button class="ad_liss_sp_btn_cart" type="submit" name="add"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                            </form>

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

            <!-- DANH MỤC -->
            <?php require "layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "layout/top10.php"; ?>

        </aside>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          
                $("#binhluan").load("view/binh_luan/bl_form.php", {
                    ma_hh: <?= $ma_hh ?>
                });
        
        });
    </script>
    <div id="binhluan" class="row">
        <?php
        //require "binh_luan/binh_luan_form.php"; 

        ?>

    </div>
</main>