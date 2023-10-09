<div class="Danhmuc_add ">
    
        <h1 class="dm_add_title text-center">Thêm mới hàng hóa</h1>

    <div class="row frmtitle  ">
        
            <form action="index.php?act=addDM" method="post"  enctype="multipart/form-data">
                <!-- <label for="">Mã loại :</label><br>
                <input type="text" name="maloai" disabled class="w-100"><br> -->

                <label class="dm_label" for="">Tên loại :</label><br>
                <input type="text" name="tenloai" ><br>

                <label class="dm_label" for="" ">Ảnh :</label><br>
                <input type="file" name="imageL" accept="imageT2/"><br>

                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->

                <a href="index.php?act=dsloai"  >DANH SÁCH</a>
                <div class="flex">
                    <button type="submit" name="themmoi" class="text-white fw-bold">THÊM MỚI</button>
                    <input class="reset" type="reset" value="NHẬP LẠI" class="text-white fw-bold">
                </div>

                <?php 

                    if(isset($thongbao) && $thongbao != ""){
                        echo $thongbao;
                    }
                ?>
            </form>
        
    </div>
</div>