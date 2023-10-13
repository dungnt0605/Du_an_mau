<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">

        <h2 class="fw-bold text-center">Quên mật khẩu</h2>
        <?php
                if(isset($thongbao)){
                    echo $thongbao;
                }
            ?>
        <form action="index.php?act=quen_mk" method="POST">
            <label class="mt-5" for="">Email :</label><br>
            
            <input type="email" name="email" ><br>
            
           
            <button type="submit" name="quen_mk" class="blue-btn">Gửi</button><br>
            <input type="reset" value="Nhập lại">
        </form>
        </main>

        
    </div>
</main>