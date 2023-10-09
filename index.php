<?php 
    include "model/binh-luan.php";
    include "model/hang-hoa.php";
    include "model/khach-hang.php";
    include "model/loai.php";
    include "model/thong-ke.php";
    include "view/header.php";
    $top10 = hang_hoa_select_top10();
    $value_loai = loai_select_all();
    $new_sp_10 = hang_hoa_select_new10();
    if(isset($_GET['act']) && $_GET['act']){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham_ct':
                if(isset($_GET['id_sp']) || isset($_GET['id_dm'])){
                    $ma_hh = $_GET['id_sp'];
                    $ma_loai = $_GET['id_dm'];
                    $sp_ct = hang_hoa_select_by_id($ma_hh);
                    $sp_theo_dm = hang_hoa_select_by_loai($ma_loai);
                    $ten_title = loai_select_by_id($ma_loai);
                    include "view/sp_chi_tiet.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'ds_sp_loai':
                if( isset($_POST['search'])){
                    $ten_hh = $_POST['search'];
                }else{
                    $ten_hh = "";

                }
                if( isset($_GET['id_dm'])){
                    $ma_loai = $_GET['id_dm'];
                    $ten_title = loai_select_by_id($ma_loai);
                    $value_sp_loai = hang_hoa_search($ten_hh,$ma_loai);
                    include "view/ds_sanpham.php";
                }else{
                    $ma_loai = 0;
                }
                break; 
            case 'gioi_thieu':
                include "view/gioi_thieu.php";
                break;               
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
