<div class="home_list-group">
    <button class="fw-bold text-center">
        <h3>DANH MỤC</h3>
    </button>
    <?php foreach ($value_loai as $key) : ?>
        <?php $link_dm = "index.php?act=ds_sp_loai&id_dm=" . $key['ma_loai']; ?>
        <div class="home_list_btn flex">
            <a href="<?= $link_dm ?>">
                <button class="flex">
                    <img style="width: 40px;" src="./imageT2/<?= $key['image_loai'] ?>" alt="">
                    <?= $key['ten_loai'] ?>
                </button>
            </a>
        </div>
    <?php endforeach; ?>
    
        <form action="index.php?act=ds_sp_loai" method="POST" class="ds_search">
            <div class="flex between">
                
                <input type="search" name="search" placeholder="Tìm kiếm ...">
                <button class="blue-btn" type="submit" name="search-btn">Search</button>
            </div>
        </form>
    
</div>