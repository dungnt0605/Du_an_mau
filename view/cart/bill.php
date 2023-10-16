<?php 
    if(isset($_SESSION['user'])){
        $name = $_SESSION['user']['name'];
        $adress = $_SESSION['user']['dia_chi'];
        $email = $_SESSION['user']['email'];
        $sdt = $_SESSION['user']['sdt'];
    }else{
        $name = '';
        $adress = '';
        $email = '';
        $sdt = '';
    }

?>

<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">
            <div class="bill-infor">
                <h2 class="my-5">THÔNG TIN ĐẶT HÀNG</h2>
                <form action="" method="">
                    <div class="flex between my-5 ">
                        <label for="">Người đặt hàng :</label>
                        <input type="text" name="name" value="<?=$name ?>">
                    </div>
                    <div class="flex between my-5 ">
                        <label for="">Địa chỉ :</label>
                        <input type="text" name="adress" value="<?=$adress ?>">
                    </div>
                    <div class="flex between my-5 ">
                        <label for="">Email :</label>
                        <input type="email" name="email" value="<?=$email ?>">
                    </div>
                    <div class="flex between my-5 ">
                        <label for="">Điện thoại :</label>
                        <input type="number" name="sdt" value="<?=$sdt ?>">
                    </div>

                    <h2 for="">Phương thức thanh toán</h2><br>
                    <label class="label-pay" for="">Trả tiền khi nhận hàng</label>
                    <input type="radio" name="pay" id="pay">
                    <label class="label-pay" for="">Thanh toán qua ví Momo</label>
                    <input type="radio" name="pay" id="pay">

                </form>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>

                    <th>ẢNH SẢN PHẨM</th>
                    <TH>SỐ LƯỢNG</TH>
                    <TH>TỔNG TIỀN</TH>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                $tong = 0;
                $i = 0;
                ?>
                <?php foreach ($_SESSION['cart'] as $key) : ?>
                    <?php

                    $editcart = "index.php?act=editcart&id=" . $i;
                    $deletecart = "index.php?act=deletecart&id=" . $i;
                    $ttien = (float)$key[2] * (int)$key[5];
                    $tong += $ttien;


                    ?>
                    <tr>
                        <td>

                            <label for="box">hehe</label>
                            <input type="checkbox" name="deleteid[]" value="<?= $i ?>" id="box">

                        </td>
                        <td><?= $key[0] ?></td>
                        <td><?= $key[1] ?></td>
                        <td><?= $key[2] ?></td>

                        <td>
                            <img style="width: 100px;" src="./imageT2/<?= $key[4] ?>" alt="">
                        </td>

                        <td><?= $key[5] ?></td>
                        <td><?= $ttien  ?> Triệu</td>

                        <td>
                            <button class="sp_ds_delete" onclick="confirmDelete('<?= $deletecart ?>')">Xóa</button>
                        </td>
                    </tr>
                    <?php $i += 1; ?>

                <?php endforeach; ?>
                <tr>
                    <td colspan='6'>TỔNG TIỀN</td>
                    <td colspan='2'><?= $tong ?> Triệu</td>
                </tr>
            </table>
            <a href="index.php?act=bill"><button class="cam-btn">Đồng ý đặt hàng </button></a>


        </main>

        <aside class="col-lg-3">

            <!-- DANH MỤC -->
            <?php require "view/layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "view/layout/top10.php"; ?>

        </aside>


</main>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm('Bạn có muốn XÓA không ?')) {
            window.location.href = deleteUrl; // Chuyển hướng đến URL xóa nếu bạn đồng ý
        }
    }
</script>