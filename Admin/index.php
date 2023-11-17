<?php

include "../model/binh-luan.php";
include "../model/hang-hoa.php";
include "../model/khach-hang.php";
include "../model/loai.php";
include "../model/thong-ke.php";
include "header.php";
loai_select_all();
$new_sp_10 = hang_hoa_select_new10();
//controller
// echo "<img src='../imageT2/ba-tu_1.jpg' alt=''>";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'addDM': //ADD danh mục
            //Kiểm tra người dùng có click vào nút adđ hay k
            if (isset($_POST['themmoi'])) {

                $tenloai = $_POST['tenloai'];
                $hinh = $_FILES['imageL'];
                $imageL = $hinh['name'];
                $target_file = '../imageT2/' . $imageL;
                move_uploaded_file($hinh['tmp_name'], $target_file);

                loai_insert($tenloai, $imageL);
                $thongbao  = "Thêm thành công !";
            }
            include "danhmuc/add.php";
            break;



        case 'dsloai': //Danh sách loại
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }

            $value_loai = loai_search($kyw);
            include "danhmuc/ds-loai.php";
            break;

        case 'deleteDM': //Xóa danh mục
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                loai_delete($_GET['id']);
            }
            if (isset($_POST['deleteall'])) {
                loai_delete_all();
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }

            $value_loai = loai_search($kyw);
            include "danhmuc/ds-loai.php";
            break;

        case 'editDM': //Sửa danh mục
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $ma_loai = $_GET['id'];
                $updatedm = loai_select_by_id($ma_loai);
            }

            include "danhmuc/update_ds_loai.php";
            break;
        case 'updateDM': //update danh mục
            if (isset($_POST['themmoi'])) {

                $ten_loai = $_POST['tenloai'];
                $imageL = $_POST['imageL'];
                $hinh = $_FILES['imageL'];
                $ma_loai = $_POST['ma_loai'];
                if ($hinh['size'] > 0) {

                    $imageL = $hinh['name'];
                }
                $target_file = '../imageT2/' . $imageL;
                move_uploaded_file($hinh['tmp_name'], $target_file);
                loai_update($ma_loai, $ten_loai, $imageL);
                $thongbao  = "Thêm thành công !";
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }

            $value_loai = loai_search($kyw);
            include "danhmuc/ds-loai.php";
            break;

        case 'addSP': //add Sản phẩm 
            loai_select_all();
            if (isset($_POST['themmoi'])) {
                $ten_hh = $_POST['ten_hh'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];
                $ngaynhap = $_POST['ngaynhap'];
                $mota = $_POST['mota'];
                $view = $_POST['view'];
                $dac_biet = $_POST['dacbiet'];
                $ma_loai = $_POST['ma_loai'];
                $hinh_sp = $_FILES['imageS'];
                $imageS = $hinh_sp['name'];
                $target_fileSP = "../imageT2/" . $imageS;
                move_uploaded_file($hinh_sp['tmp_name'], $target_fileSP);

                hang_hoa_insert($ten_hh, $price, $sale, $imageS, $ma_loai, $dac_biet, $view, $ngaynhap, $mota);
                $thongbao = "Thêm thành công";
            }
            include "sanpham/add.php";
            break;
        case 'ds_sp':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            loai_select_all();
            hang_hoa_search($kyw, $iddm);
            include "sanpham/danhsach.php";
            break;
        case 'editSP':
            $hang_hoa = hang_hoa_select_all();
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sp_one = hang_hoa_select_by_id($id);
            }
            include "sanpham/update.php";
            break;

        case 'updateSP':
            if (isset($_POST['themmoi'])) {
                $ten_hh = $_POST['ten_hh'];
                $ma_hh = $_POST['ma_hh'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];
                $ngaynhap = $_POST['ngaynhap'];
                $mota = $_POST['mota'];
                $view = $_POST['view'];
                $dac_biet = $_POST['dacbiet'];
                $ma_loai = $_POST['ma_loai'];
                $imageS = $_POST['imageS'];
                $hinh_sp = $_FILES['imageS'];
                if ($hinh_sp['size'] > 0) {
                    $imageS = $hinh_sp['name'];
                }
                $target_fileSP = "../imageT2/" . $imageS;
                move_uploaded_file($hinh_sp['tmp_name'], $target_fileSP);

                hang_hoa_update($ma_hh, $ten_hh, $price, $sale, $imageS, $ma_loai, $dac_biet, $view, $ngaynhap, $mota);
                $thongbao = "Thêm thành công";
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            hang_hoa_search("", 0);
            include "sanpham/danhsach.php";
            break;
        case 'deleteSP':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                hang_hoa_delete($id);
            }
            if (isset($_POST['deleteid']) && isset($_POST['deleteAll'])) {
                foreach ($_POST['deleteid'] as $dl) {
                    hang_hoa_delete($dl);
                }
            }
            if (isset($_POST['deleteall'])) {
                hang_hoa_delete_all();
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            hang_hoa_search("", 0);
            include "sanpham/danhsach.php";
            break;
        case 'login' :
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
            include "tai_khoan/list.php";
            break;

        case 'dsKH':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $value_kh = khach_hang_search($kyw);
            include "tai_khoan/list.php";
            break;

        case 'deleteKH':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                khach_hang_delete($id);
            }
            if (isset($_POST['deleteid']) && isset($_POST['deleteAll'])) {
                foreach ($_POST['deleteid'] as $dl) {
                    khach_hang_delete($id);
                }
            }
            if (isset($_POST['deleteall'])) {
                khach_hang_delete_all();
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            khach_hang_search("");
            include "tai_khoan/list.php";
            break;

        case 'editKH':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kh_one = khach_hang_select_by_id($id);
            }
            include "tai_khoan/update.php";
            break;

        case 'updateKH':
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
                if ($image['size'] > 0) {
                    $avatar = $image['name'];
                }
                $target_file = 'imageT2/' . $avatar;
                move_uploaded_file($image['tmp_name'], $target_file);
                khach_hang_update($pass, $name, $sdt,  $email, $avatar, $adress, $vai_tro, $ma_kh);
                $_SESSION['user'] = khach_hang_check_by_id($name, $pass);
                $thongbao = "Cập nhật thành công !";
            }

            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $value_kh = khach_hang_search($kyW);
            include "tai_khoan/list.php";
            break;

        case 'dsBL':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $value_bl = binh_luan_search($kyw);
            include "binh_luan/list.php";
            break;

        case 'deleteBL':
            if (isset($_GET['id'])) {
                $ma_bl = $_GET['id'];
                binh_luan_delete($ma_bl);
            }
            if (isset($_POST['deleteid']) && isset($_POST['deletebox'])) {
                foreach ($_POST['deleteid'] as $ma_bl) {

                    binh_luan_delete($ma_bl);
                }
            }
            if (isset($_POST['deleteall'])) {
                binh_luan_delete_all();
            }
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $value_bl = binh_luan_search($kyw);
            include "binh_luan/list.php";
            break;
        case 'thongke':
            $list_thong_ke = thong_ke_hang_hoa();
            include "thong_ke/list.php";
            break;

        case 'bieu_do':
            $list_thong_ke = thong_ke_hang_hoa();
            include "thong_ke/bieu_do.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
