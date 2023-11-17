<?php

if (is_array($updatedm)) {
    extract($updatedm);
}
?>

<div class="Danhmuc_add ">

    <h1 class="text-center my-5">Cập nhật hàng hóa</h1>

    <div class="row frmtitle  ">

        <form action="index.php?act=updateDM" method="post" enctype="multipart/form-data">
            <!-- <label for="">Mã loại :</label><br>
                <input type="text" name="maloai" disabled class="w-100"><br> -->

            <label for="">Tên loại :</label><br>
            <input type="text" name="tenloai" class="w-100" value="<?= (isset($ten_loai) && $ten_loai != "") ? $ten_loai : ""; ?>"><br>

            <label for="" class="mt-2">Ảnh :</label><br>
            <input type="hidden" name="imageL" value="<?= $image_loai ?>">
            <input type="file" name="imageL" accept="imageT2/"><br>

            <input type="hidden" name="ma_loai" value="<?= (isset($ma_loai) && $ma_loai != "") ? $ma_loai : ""; ?>">
            <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->
            <a href="index.php?act=dsloai" class="my-3">DANH SÁCH</a>
            <div class=" d-flex between">

                <button type="submit" name="themmoi" class="text-white fw-bold">SỬA</button>
                <input type="reset" value="NHẬP LẠI" class=" reset text-white fw-bold">
            </div>

            <?php

            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </form>

    </div>
</div>