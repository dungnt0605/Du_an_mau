
<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">

            <form action="index.php?act=login" method="post" class="sanpham_add" enctype="multipart/form-data">
                <h2 class="text-center">Đăng ký</h2>
                <label for="">Tên đăng nhập :</label><br>
                <input type="text" name="name"><br>

                <label for="">Mật khẩu :</label><br>
                <input type="text" name="pass" ><br>

                <label for="">Ảnh đại diện :</label><br>
                <input type="file" name="avatar" accept="imageT2/"><br>

                <label for="">Số điện thoại :</label><br>
                <input type="text" name="sdt" pattern="[0-9]{10}" required><br>

                <label for="">Email :</label><br>
                <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required><br>

                <label for="">Địa chỉ :</label><br>
                <input type="text" name="adress">

                <label for="">Vai trò :</label><br>
                <select name="vai_tro" id="">
                    <option value="1">Admin</option>
                    <option value="0">Khách hàng</option>
                </select><br>



                <!-- <img src="../imageT2/fol_2.jpg" alt=""> -->
                <a style="text-decoration: underline;" href="#" class="my-3 ">DANH SÁCH</a> <br>
                <div class="flex">

                    <button type="submit" name="login" class="fw-bold">Đăng ký</button>
                    <input type="reset" value="NHẬP LẠI" class="fw-bold reset">
                </div>

                
            </form>
        </main>

        <aside class="col-lg-3">

            <!-- DANH MỤC -->
            <?php require "view/layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "view/layout/top10.php"; ?>

        </aside>
    </div>
</main>