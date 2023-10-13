<?php
require_once 'pdo.php';


 //Thêm loại mới


function loai_insert($tenloai,$imageL){
    $sql = "INSERT INTO loai(ten_loai,image_loai) VALUES('$tenloai' ,'$imageL')";
    pdo_execute($sql);
}
//search loại
function loai_search($kyw="")  {
    $sql = "SELECT * FROM loai  WHERE 1 " ;
    if($kyw != ""){
        $sql .= " and ten_loai LIKE '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY ma_loai DESC";
    return pdo_query($sql);
}
 // Cập nhật tên loại

function loai_update($ma_loai, $ten_loai ,$imageL){
    $sql = "UPDATE loai SET ten_loai='$ten_loai' , image_loai='$imageL' WHERE ma_loai='$ma_loai'";
    pdo_execute($sql);
}

 // Xóa một hoặc nhiều loại

function loai_delete($ma_loai){
    $sql = "DELETE FROM loai WHERE ma_loai=?";
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_loai);
    }
}

 //Truy vấn tất cả các loại

function loai_select_all(){
    $sql = "SELECT * FROM loai";
    return pdo_query($sql);
}

// Truy vấn một loại theo mã

function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}

 //Kiểm tra sự tồn tại của một loại
 
function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}