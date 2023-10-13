<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    extract($user);
    echo "
        <div class='home_login'>
                        <div class='sign-in flex'>
                            <img  src= './imageT2/$avatar'  alt=''>
                            <h3>$name</h3>
                        </div>
                        <!--<ul class=' mt-5'>
                            <li> <a href='index.php?act=quen_mk' style='text-decoration: underline;'> Quên mật khẩu </a></li>
                            <li> <a href='index.php?act=edit_taikhoan' style='text-decoration: underline;'> Cập nhật tài khoản</a></li>
                            <li> <a href='Admin/index.php' style='text-decoration: underline;'> Đăng nhập Admin</a></li>
                            <li> <a href='index.php?act=out_taikhoan' style='text-decoration: underline;'> Đăng xuất</a></li>
                        </ul>-->
                    </div>
                    ";            
} else { ?>
    <div class="home_login">
        <a href="index.php?act=sign_in">ĐĂNG NHẬP /</a>
        <a href="index.php?act=login">ĐĂNG KÝ</a>
        

    </div>
<?php   
}
?>