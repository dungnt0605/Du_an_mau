<?php
session_start();
include "model/binh-luan.php";
include "model/hang-hoa.php";
include "model/khach-hang.php";
include "model/loai.php";
include "model/thong-ke.php";
include "view/header.php";
$top10 = hang_hoa_select_top10();
$value_loai = loai_select_all();
$new_sp_10 = hang_hoa_select_new10();
if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham_ct':
            if (isset($_GET['id_sp']) || isset($_GET['id_dm'])) {
                $ma_hh = $_GET['id_sp'];
                $ma_loai = $_GET['id_dm'];
                $sp_ct = hang_hoa_select_by_id($ma_hh);
                $sp_theo_dm = hang_hoa_select_by_loai($ma_loai);
                $ten_title = loai_select_by_id($ma_loai);
                include "view/sp_chi_tiet.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'ds_sp_loai':
            if (isset($_POST['search']) && isset($_POST['search-btn'])) {
                $ten_hh = $_POST['search'];
            } else {
                $ten_hh = "";
            }
            if (isset($_GET['id_dm'])) {
                $ma_loai = $_GET['id_dm'];
                $ten_title = loai_select_by_id($ma_loai);
                $value_sp_loai = hang_hoa_search($ten_hh, $ma_loai);
                include "view/ds_sanpham.php";
            } else {
                $ma_loai = 0;
            }
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                $vai_tro = $_POST['vai_tro'];

                $image = $_FILES['avatar'];
                $avatar = $image['name'];
                $target_file = 'imageT2/' . $avatar;
                move_uploaded_file($image['tmp_name'], $target_file);

                khach_hang_insert($name, $pass, $sdt, $email, $avatar, $adress, $vai_tro);
                $thongbao = "Đăng nhập thành công , vui lòng đăng nhập !";
            }
            include "view/tai_khoan/sign_up.php";
            break;
        case 'sign_in':
            include "view/tai_khoan/sign_in.php";
            break;
        case 'dangnhap':
            if (isset($_POST['sign_in'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = khach_hang_check_by_id($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    // $value_user  = khach_hang_select_by_id($ma_kh);
                    // $thongbao = "Bạn đã đăng nhập thành công !";
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký !";
                    include "view/tai_khoan/sign_up.php";
                }
            }
            break;
        case 'out_taikhoan':

            break;
        
        case 'edit_taikhoan':
            if (isset($_POST['update'])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                $vai_tro = $_POST['vai_tro'];
                $ma_kh = $_POST['ma_kh'];
                $avatar = $_POST['avatar'];

                $image = $_FILES['avatar'];
                if($image['size'] > 0){
                    $avatar = $image['name'];
                }
                $target_file = 'imageT2/' . $avatar;
                move_uploaded_file($image['tmp_name'], $target_file);
                khach_hang_update($pass, $name , $sdt,  $email ,$avatar, $adress, $vai_tro ,$ma_kh);
                $_SESSION['user'] = khach_hang_check_by_id($name , $pass);
                $thongbao = "Cập nhật thành công , vui lòng đăng nhập !";
                header('location: index.php?act=edit_taikhoan');
            }
            include "view/tai_khoan/edit_taikhoan.php";
            
            break;

        case 'quen_mk' :
            break;
        case 'gioi_thieu':
            include "view/gioi_thieu.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
