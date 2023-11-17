<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    extract($user);
?>
    <a href='index.php?act=dieu_huong_user'>
        <ul class='home_login'>
            <li class='sign-in '>
                <div class='flex'>
                    <img src='./imageT2/<?= $avatar ?>' alt=''>
                    <h3><?= $name ?></h3>
                </div>
                <ul class=' user-small mt-5'>
                    <li> <a href='index.php?act=quen_mk'> Quên mật khẩu </a></li>
                    <li> <a href='index.php?act=edit_taikhoan'> Cập nhật tài khoản</a></li>
                    <?php
                    if ($vai_tro == 1) {
                        echo "
                        <li> <a href='Admin/index.php' > Đăng nhập Admin</a></li>";
                    }
                    ?>
                    <li> <a href='index.php?act=out_taikhoan'> Đăng xuất</a></li>
                </ul>
            </li>

        </ul>
    </a>

<?php } else { ?>
    <div class="home_login">
        <a href="index.php?act=sign_in">ĐĂNG NHẬP /</a>
        <a href="index.php?act=login">ĐĂNG KÝ</a>


    </div>
<?php
}
?>