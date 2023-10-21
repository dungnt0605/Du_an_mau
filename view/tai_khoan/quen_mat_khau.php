<main class="home-container">

    <main class="home_sign_in">

        <h2 class="fw-bold text-center my-5">Quên mật khẩu</h2>
        <?php
        if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
        <form action="index.php?act=quen_mk" method="POST">
            <label class="mt-5" for="">Email :</label><br>

            <input type="email" name="email"><br>

            <div class="flex between my-5">

                <button type="submit" name="quen_mk" class="blue-btn">Gửi</button><br>
                <input type="reset" value="Nhập lại" class="cam-btn">
            </div>
        </form>
    </main>



</main>