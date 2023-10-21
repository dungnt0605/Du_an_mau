<?php 
if(is_array($sp_one)){
    extract($sp_one);
}

?>
<div class="Danhmuc_add">
   
        <h1 class="text-center my-5">CẬP NHẬT SẢN PHẨM</h1>

    <div class="row frmtitle  ">
        
            <form action="index.php?act=updateSP" method="post"  enctype="multipart/form-data">
                
                <label for="" class="mt-3">Tên sản phẩm :</label><br>
                <input type="text" name="ten_hh"  value="<?=$ten_hh ?>"><br>
                
                <label for="" class="mt-3">Đơn Giá :</label><br>
                <input type="text" name="price"   value="<?=$don_gia ?>"><br>

                <label for="" class="mt-3">Giảm giá :</label><br>
                <input type="text" name="sale"   value="<?=$giam_gia ?>"><br>

                <label for="" class="mt-3">Ảnh sản phẩm :</label><br>
                <input type="hidden" name="imageS" value="<?= $image ?>">
                <input type="file" name="imageS" accept="imageT2/"  value="<?=$image ?>"><br>

                <label for="" class="mt-3">Ngày nhập :</label><br>
                <input type="date" name="ngaynhap"   value="<?=$ngay_nhap ?>"><br>

                <label for="" class="mt-3">Mô tả :</label><br>
                <textarea class="form-control" name="mota"  rows="3"><?=$mo_ta ?></textarea>
             
                <label for="" class="mt-3">số lượt xem :</label><br>
                <input type="text" name="view"   value="<?=$so_luot_xem ?>"><br>

                <label for="" class="mt-3">Đặc biệt :</label><br>
                <select name="dacbiet" id=""  >
                    <option value="1" <?= ($dac_biet == 1) ? "selected" : '' ?>>Có</option>
                    <option value="0" <?= ($dac_biet == 0) ? "selected" : '' ?>>Không</option>
                </select><br>

                <label for="" class="mt-3" >Loại hàng hóa :</label><br>
                <select name="ma_loai"   >
                    <?php foreach (Loai_select_all() as $row) : ?>
                        <option value="<?=$row['ma_loai'] ?>" <?= ($ma_loai == $row['ma_loai']) ? "selected" : '' ?>><?=$row['ten_loai'] ?></option>
                    <?php endforeach; ?>
                </select>                
                <input type="hidden" name="ma_hh" value="<?=$ma_hh ?>">
                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->

                <div class="row d-flex mb-5">
                    <a href="index.php?act=ds_sp" class="my-3 ">DANH SÁCH</a>
                    <button type="submit" name="themmoi" class="btn btn-dark w-25 ms-3 me-3 text-white fw-bold">CẬP NHẬT</button>
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