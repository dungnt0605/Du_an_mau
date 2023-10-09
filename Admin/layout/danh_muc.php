<div class="home_list-group ">
    <button class="fw-bold text-center">
            <h3>DANH MỤC</h3>
        </button>
    <?php foreach (loai_select_all() as $key) : ?>
    <?php
            $id_danhmuc = "home.php?home=dm_cat&id=" . $key['ma_loai'];
            ?>
        <div class="home_list_btn flex">
            
            <a href="<?= $id_danhmuc ?>">
                <button class="flex">
                    <img style="width: 40px;" src="../imageT2/<?= $key['image_loai'] ?>" alt="">
                    <?= $key['ten_loai'] ?>
                </button>
            </a>
        </div>
    <?php endforeach; ?>
    <button class="">
        <form action="" method="POST" >
            <input type="search" name="search" placeholder="Tìm kiếm ...">
            <!-- <button type="submit" name="search-btn"  >Tìm kiếm</button> -->
        </form>
    </button>
</div>