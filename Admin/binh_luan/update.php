<?php 
if(is_array($kh_one)){
    extract($kh_one);
}
?>
<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">
            <form action="index.php?act=updateKH" method="post" class="sanpham_add" enctype="multipart/form-data">
                <h2 class="text-center">Cập nhật thông tin</h2>
                <label for="">Tên đăng nhập :</label><br>
                <input type="text" name="name" value="<?= $name ?>"><br>

                <label for="">Mật khẩu :</label><br>
                <input type="text" name="pass"  value="<?= $pass ?>"><br>

                <label for="">Ảnh đại diện :</label><br>
                <input type="hidden" name="avatar" value="<?= $avatar ?>">
                <input type="file" name="avatar" accept="imageT2/"><br>
                <img style="width: 100px;" src="../imageT2/<?= $avatar ?>" alt=""><br>

                <label for="">Số điện thoại :</label><br>
                <input type="text" name="sdt"  value="<?= $sdt ?>"><br>

                <label for="">Email :</label><br>
                <input type="email" name="email"  value="<?= $email ?>"><br>

                <label for="">Địa chỉ :</label><br>
                <input type="text" name="adress" value="<?= $dia_chi ?>"><br>

                <label for="">Vai trò :</label><br>
                <select name="vai_tro" id="">
                    <option value="1" <?= ($vai_tro == 1) ? 'selected' : '' ?>>Admin</option>
                    <option value="0" <?= ($vai_tro == 0) ? 'selected' : '' ?>>Khách hàng</option>
                </select><br>


                <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->
                <a style="text-decoration: underline;" href="index.php?act=dsKH" class="my-3 ">DANH SÁCH</a> <br>
                <div class="flex between">
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