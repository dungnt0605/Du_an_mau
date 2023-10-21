<div class="sp_new_10">
    <h2 class="text-center my-5">TOP 10 SẢN PHẨM MỚI NHẤT</h2>
    <div class="admin_list_sp ">

        <?php foreach ($new_sp_10 as $value) : ?>
            <?php $link_sp = "index.php?act=sanpham_ct&id_sp=" . $value['ma_hh'] . "&id_dm=" . $value['ma_loai']; ?>

            <div class=" list_sp-item">
                <a href="<?= $link_sp ?>">
                    <img style="height: 270px; object-fit: cover;" src="./imageT2/<?= $value['image'] ?>" class="" alt="...">
                    <div class="ad_list-text">
                        <h3><?= $value['ten_hh'] ?></h3>
                        <p><?= $value['don_gia'] ?> VND</p>
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