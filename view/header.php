<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/css.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
    <title>Trang chủ</title>
</head>

<body>

    <header class="flex between">
        <div class="logo flex">
        <a href="index.php"><img src="./imageT2/logo/51456b4063722b731891adeb090b6d5b-removebg-preview 1.png" alt="logo"></a>

        </div>
        <nav class="nav__pc flex">
            <ul class="nav_list flex">
                <li><a class="fw-bold" href="index.php">TRANG CHỦ</a></li>
                <li><a class="fw-bold" href="index.php?act=gioi_thieu">GIỚI THIỆU</a></li>
                <li><a class="fw-bold" href="index.php?act=lien_he">LIÊN HỆ</a></li>
                <li><a class="fw-bold" href="index.php?act=hoi_dap">HỎI ĐÁP</a></li>

                <li><a href="index.php?act=cart"><button class="ad_liss_sp_btn_cart"><i class="fa-solid fa-cart-arrow-down"></i></button></a></li>
            </ul>
            <?php
            require "layout/login.php";
            ?>
        </nav>
        <label for="nav_mobile_input" class="nav_bars-btn"><i class="fa-solid fa-bars"></i></label>

        <!-- hidden ẩn đi -->
        <input type="checkbox" hidden name="" class="nav_input" id="nav_mobile_input">

        <label for="nav_mobile_input" class="nav_overlay"></label>

        <nav class="nav__mobile">
            <label for="nav_mobile_input" class="nav__mobile-close"><i class="fa-solid fa-xmark"></i></label>
            <ul class="nav_mobile_list">
                <li><a class="nav_mobile_link fw-bold" href="index.php">TRANG CHỦ</a></li>
                <li><a class="nav_mobile_link fw-bold" href="index.php?act=gioi_thieu">GIỚI THIỆU</a></li>
                <li><a class="nav_mobile_link fw-bold" href="index.php?act=lien_he">LIÊN HỆ</a></li>
                <li><a class="nav_mobile_link fw-bold" href="index.php?act=hoi_dap">HỎI ĐÁP</a></li>
            </ul>

        </nav>
    </header>