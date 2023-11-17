<?php
function bill_insert($name, $adress, $email, $ngay_bl, $sdt, $pay, $avatar, $tong)
{
    $sql = "INSERT INTO `binh_luan`( `email`, `adress`, `name`, `ngay_bl`) VALUES ('$email','$adress','$name','$ngay_bl')";
    pdo_execute($sql);
}

function tong_bill()
{
    $tong = 0;
    foreach ($_SESSION['cart'] as $key) {

        $ttien = (float)$key[2] * (int)$key[5];
        $tong += $ttien;
    }
}
