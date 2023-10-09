<div class="home_list_top10">
    <button class="fw-bold text-center">
        <h3>TOP 10</h3>
    </button>

    <?php foreach ($top10  as $key) : ?>

        <?php $link_sp = "index.php?act=sanpham_ct&id_sp=" . $key['ma_hh'] . "&id_dm=" .$key['ma_loai'];?>
        <div class="home_top_btn flex">
            <a  href="<?= $link_sp ?>">
                <button  class="flex">
                    <img style="width: 40px; height: 50px; object-fit: cover;" src="./imageT2/<?= $key['image'] ?>" alt="">
                    <?= $key['ten_hh'] ?>
                </button>
            </a>
        </div>
    <?php endforeach; ?>

</div>