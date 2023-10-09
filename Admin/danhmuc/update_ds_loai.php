<?php 

    if(is_array($updatedm)){
        extract($updatedm);
    }
?>

<div class="row m-auto card w-50 my-5 px-4 py-4 bg-success bg-gradient bg-opacity-10 ">
    <div class="row frmtitle my-3">
        <h1>Cập nhật hàng hóa</h1>
    </div>
    <div class="row frmtitle  ">
        
            <form action="index.php?act=updateDM" method="post"  enctype="multipart/form-data">
                <!-- <label for="">Mã loại :</label><br>
                <input type="text" name="maloai" disabled class="w-100"><br> -->

                <label for="">Tên loại :</label><br>
                <input type="text" name="tenloai" class="w-100" value="<?=(isset($ten_loai) && $ten_loai != "" ) ? $ten_loai : "" ; ?>"><br>

                <label for="" class="mt-2">Ảnh :</label><br>
                <input type="hidden" name="imageL" value="<?=$image ?>">
                <input type="file" name="imageL" accept="imageT2/"><br>

                <input type="hidden" name="ma_loai" value="<?=(isset($ma_loai) && $ma_loai != "" ) ? $ma_loai : "" ; ?>">
                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->

                <div class="row d-flex mb-5">
                    <a href="index.php?act=dsloai" class="my-3">DANH SÁCH</a>
                    <button type="submit" name="themmoi" class="btn btn-dark w-25 ms-3 me-3 text-white fw-bold">SỬA</button>
                    <input type="reset" value="NHẬP LẠI" class="btn btn-secondary w-25 text-white fw-bold">
                </div>

                <?php 

                    if(isset($thongbao) && $thongbao != ""){
                        echo $thongbao;
                    }
                ?>
            </form>
        
    </div>
</div>