<div class="home_list_top10">
    <button class="fw-bold text-center">
        <h3>TOP 10</h3>
    </button>

    <?php foreach (hang_hoa_select_top10() as $key) : ?>
        <div class="home_top_btn flex">
            <a href="#">
                <button class=" flex">
                    <img style="width: 40px; height: 50px; object-fit: cover;" src="../imageT2/<?= $key['image'] ?>" alt="">
                    <?= $key['ten_hh'] ?>
                </button>
            </a>
        </div>
    <?php endforeach; ?>

</div>
