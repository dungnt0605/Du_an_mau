<?php

$ds_bl = binh_luan_select_all();


?>
<div class="comment">

   

    <h2 class="text-center befor after"> BÌNH LUẬN </h2>
    <?php if (isset($thongbao)&& $thongbao != '') { ?>
        <p><?= $thongbao; ?></p>
    <?php } ?>

    
    <div class="content_box">
        <?php foreach ($ds_bl as $bl) : ?>
            <?php extract($bl) ; ?>
            <div class="box_bl">
                <h4><?=  $name ?></h4>
                <div class="content_bl"><?= $noi_dung ?></div>
                <div class="flex">
                    <p><?= $ngay_bl ?></p>
                </div>
            </div>

        <?php endforeach ?>
    </div>

    
    <form action="index.php?act=binh_luan" method="POST" class="bl_search">
        <div class="flex ">
            <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>" >
            <input type="text" name="content" placeholder="Viết bình luận...">
            <button class="blue-btn" type="submit" name="gui_bl" >Gửi bình luận</button>
        </div>
    </form>

</div>