<?php
extract($sp_ct);
extract($ten_title);

?>
<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">

            <form action="" method="post" class="login" enctype="multipart/form-data">
            <label for="" >Tên đăng nhập :</label><br>
                <input type="text" name="name" ><br>
                
                <label for="" >Mật khẩu :</label><br>
                <input type="text" name="pass"  ><br>

                <label for="" >Ảnh đại diện :</label><br>
                <input type="file" name="avatar" accept="imageT2/" ><br>

                <label for="" >Số điện thoại :</label><br>
                <input type="text" name="sdt" accept="imageT2/" ><br>

                <label for="" >Email :</label><br>
                <input type="email" name="email"  ><br>

                <label for="" >Địa chỉ :</label><br>
                <input type="text" name="adress">             

                <label for="" >Vai trò :</label><br>
                <select name="vai_tro" id="" >
                    <option value="1">Admin</option>
                    <option value="0">Khách hàng</option>
                </select><br>

                
            
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
        </main>

        <aside class="col-lg-3">

            <!-- LOGIN -->
            <?php require "layout/login.php"; ?>
            <!-- DANH MỤC -->
            <?php require "layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "layout/top10.php"; ?>

        </aside>
    </div>
</main>