<?php 
if (isset($_SESSION['user']) && is_array(isset($_SESSION['user']))) {

    extract($_SESSION['user']);

}
?>
<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">

            <form action="index.php?act=edit_taikhoan" method="post" class="sanpham_add" enctype="multipart/form-data">
                <h2 class="text-center">Cập nhật</h2>
                <label for="">Tên đăng nhập :</label><br>
                <input type="text" name="name"  value="<?=$name ?>"><br>

                <label for="">Mật khẩu :</label><br>
                <input type="text" name="pass"  value="<?=$pass ?>"><br>

                <label for="">Ảnh đại diện :</label><br>
                <input type="hidden" name="avatar" value="<?=$avatar ?>"><br>
                <input type="file" name="avatar" accept="imageT2/"><br>

                <label for="">Số điện thoại :</label><br>
                <input type="text" name="sdt" pattern="[0-9]{10}" required value="<?=$sdt ?>"><br>

                <label for="">Email :</label><br>
                <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required value="<?=$email ?>"><br>

                <label for="">Địa chỉ :</label><br>
                <input type="text" name="adress" value="<?=$dia_chi ?>">

                <label for="">Vai trò :</label><br>
                <select name="vai_tro" id="">
                    <option value="1" <?= ($vai_tro == 1 ) ? 'selected' : '' ?> >Admin</option>
                    <option value="0" <?= ($vai_tro == 0 ) ? 'selected' : '' ?> >Khách hàng</option>
                </select><br>


                <input type="hidden" name="ma_kh" value="<?=$ma_hk?>">
                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->
                <a style="text-decoration: underline;" href="#" class="my-3 ">DANH SÁCH</a> <br>
                <div class="flex">

                    <button type="submit" name="update" class="fw-bold">Cập nhật</button>
                    <input type="reset" value="NHẬP LẠI" class="fw-bold reset">
                </div>

                <?php

                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }
                ?>
            </form>
        </main>

       
    </div>
</main>