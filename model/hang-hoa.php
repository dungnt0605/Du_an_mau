<?php
require_once 'pdo.php';

function hang_hoa_insert($ten_hh, $price, $sale, $imageS, $ma_loai, $dac_biet, $view, $ngaynhap, $mota){
    $sql = "INSERT INTO hang_hoa( ten_hh, don_gia, giam_gia, image, ngay_nhap, mo_ta, so_luot_xem, ma_loai, dac_biet) VALUES ( '$ten_hh', '$price', '$sale', '$imageS', '$ngaynhap', '$mota', '$view', '$ma_loai', '$dac_biet')";
    pdo_execute($sql);
}

function hang_hoa_update($ma_hh, $ten_hh, $price, $sale, $imageS, $ma_loai, $dac_biet, $view, $ngay_nhap, $mota){
    $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,image=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hh, $price, $sale, $imageS, $ma_loai, $dac_biet, $view, $ngay_nhap, $mota, $ma_hh);
}

function hang_hoa_search($kyw="",$iddm=0)  {
    $sql = "SELECT * FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai  WHERE 1 " ;
    if($kyw != ""){
        $sql .= " and h.ten_hh LIKE '%" . $kyw . "%'";
    }
    if($iddm > 0){
        $sql .= " and l.ma_loai = '" . $iddm . "'";
    }
    $sql .= " ORDER BY ma_hh DESC";
    return pdo_query($sql);
}
function hang_hoa_delete($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_hh);
    }
}

function hang_hoa_delete_all(){
    $sql = "DELETE FROM hang_hoa";

        pdo_execute($sql);
    
}
function hang_hoa_select_new10(){
    $sql = "SELECT * FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai  WHERE 1 ORDER BY ma_hh DESC LIMIT 0, 9";
    return pdo_query($sql);
}

function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa order by ma_hh DESC ";
    return pdo_query($sql);
}

function hang_hoa_select_cart_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai  WHERE ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            return pdo_query_one($sql, $ma);
        }
    }
    else{
        return pdo_query_one($sql, $ma_hh);
    }
    return pdo_query_one($sql, $ma_hh);
}

function hang_hoa_select_by_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai  WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}

function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function hang_hoa_select_top10(){
    $sql = "SELECT * FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai  WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function hang_hoa_select_dac_biet(){
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}

function hang_hoa_select_by_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function hang_hoa_select_innerjoin_loai(){
    $sql = "SELECT h.* , l.ten_loai FROM hang_hoa h INNER JOIN loai l ON h.ma_loai = l.ma_loai ";
    return pdo_query($sql);
}

function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }