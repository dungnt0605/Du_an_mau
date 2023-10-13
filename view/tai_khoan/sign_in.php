<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">

        <p class="fw-bold text-center">TÀI KHOẢN</p>
        <form action="index.php?act=dangnhap" method="POST">
            <label class="mt-5" for="">Tên đăng nhập</label><br>
            <input type="text" name="user"><br>


            <label for="">Mật khẩu</label><br>
            <input type="password" name="pass">

            <div class="flex mt-5">
                <input type="checkbox" name="remember" class="remember">
                <label for="">Ghi nhớ mật khẩu</label>
            </div>
            <button type="submit" name="sign_in" class="blue-btn">Đăng nhập</button><br>
            <a style="text-decoration: underline;" href="#">Quên mật khẩu</a><br>
            <a style="text-decoration: underline;" href="index.php?act=login">Đăng ký</a>
        </form>
        </main>

        
    </div>
</main>