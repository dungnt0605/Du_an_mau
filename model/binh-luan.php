<?php
require_once 'pdo.php';

function binh_luan_insert($ma_kh, $ma_hh, $noi_dung ,$ngay_bl){
    $sql = "INSERT INTO `binh_luan`( `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES ('$noi_dung','$ma_hh','$ma_kh','$ngay_bl')";
    pdo_execute($sql);
}

function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung){
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ma_bl);
}

function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_delete_all(){
    $sql = "DELETE FROM binh_luan";

        pdo_execute($sql);
    
}
function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}

function binh_luan_search($kyw="")  {
    $sql = "SELECT * FROM binh_luan  WHERE 1 " ;
    if($kyw != ""){
        $sql .= " and ma_bl LIKE '%" . $kyw . "%'" . "' or ma_hh LIKE '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY ma_bl DESC";
    return pdo_query($sql);
}

function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}

function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
//-------------------------------//
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}