<main class="home-container">
     <?php
            if (isset($thongbao) && $thongbao != "") {
                echo "<p class='text-center' style='color: red;'> ".$thongbao . '</p>';
            }
        ?>
        <main class="home_sign_in">
            <p class="fw-bold text-center my-5">TÀI KHOẢN</p>
            <form action="index.php?act=dangnhap" method="POST">
                <label class="mt-5" for="">Tên đăng nhập</label><br>
                <input type="text" name="user"><br><br>


                <label for="" >Mật khẩu</label><br>
                <input type="password" name="pass">

                <div class="flex mt-5">
                    <input type="checkbox" name="remember" class="remember">
                    <label for="">Ghi nhớ mật khẩu</label>
                </div>
                <div class="flex mt-5 between">
                <button type="submit" name="sign_in" class="blue-btn">Đăng nhập</button>
                <input type="reset" value="Nhập lại" class="cam-btn">
                </div>
                <a style="text-decoration: underline;" href="#">Quên mật khẩu</a><br>
                <a style="text-decoration: underline;" href="index.php?act=login">Đăng ký</a>
            </form>
        </main>

       
   
</main>