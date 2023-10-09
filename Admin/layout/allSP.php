<div class="sp_new_10">
    <h2>TOP 10 SẢN PHẨM MỚI NHẤT</h2>
    <div class="admin_list_sp ">

        <?php foreach ($new_sp_10 as $value) : ?>
            <div class=" list_sp-item">
                <img style="height: 270px; object-fit: cover;" src="../imageT2/<?= $value['image'] ?>" class="" alt="...">
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
            </div>
        <?php endforeach; ?>
    </div>
</div>