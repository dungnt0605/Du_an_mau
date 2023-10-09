<div class="sanpham_add">
    <div class="row frmtitle my-3">
        <h2 class="text-center">THÊM SẢN PHẨM</h2>
    </div>
    <div class="row frmtitle  ">
        
            <form action="index.php?act=addSP" method="post"  enctype="multipart/form-data">
                
                <label for="" >Tên sản phẩm :</label><br>
                <input type="text" name="ten_hh" ><br>
                
                <label for="" >Đơn Giá :</label><br>
                <input type="text" name="price"  ><br>

                <label for="" >Giảm giá :</label><br>
                <input type="text" name="sale"  ><br>

                <label for="" >Ảnh sản phẩm :</label><br>
                <input type="file" name="imageS" accept="imageT2/" ><br>

                <label for="" >Ngày nhập :</label><br>
                <input type="date" name="ngaynhap"  ><br>

                <label for="" >Mô tả :</label><br>
                <textarea class="form-control" name="mota"  rows="3"></textarea><br>
             
                <label for="" >số lượt xem :</label><br>
                <input type="text" name="view"  ><br>

                <label for="" >Đặc biệt :</label><br>
                <select name="dacbiet" id="" >
                    <option value="1">Có</option>
                    <option value="0">Không</option>
                </select><br>

                <label for=""  >Loại hàng hóa :</label><br>
                <select name="ma_loai"  >
                    <?php foreach (Loai_select_all() as $row) : ?>
                        <option value="<?=$row['ma_loai'] ?>"><?=$row['ten_loai'] ?></option>
                    <?php endforeach; ?>
                </select>   <br>

            
                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->
                <a style="text-decoration: underline;" href="index.php?act=ds_sp" class="my-3 ">DANH SÁCH</a> <br>
                <div class="flex">
                    
                    <button type="submit" name="themmoi" class="fw-bold">THÊM MỚI</button>
                    <input type="reset" value="NHẬP LẠI" class="fw-bold reset">
                </div>

                <?php 

                    if(isset($thongbao) && $thongbao != ""){
                        echo $thongbao;
                    }
                ?>
            </form>
        
    </div>
</div>