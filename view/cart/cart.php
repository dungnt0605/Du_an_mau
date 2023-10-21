<main class="home-container">
    <div class="home__admin">
        <main class="home_sp_main">
            <h2 class="befor after text-center "> GIỎ HÀNG </h2>
            <div class="cart_ds">
                <div class="d-flex align-items-center ">

                    <div class="flex between">
                        <a href="index.php"><button class="text-white fw-bold">Thêm sản phẩm</button></a>
                        
                            <div class="sp_ds_list_btn flex">
                                <!-- <label for="box"><button class="btn btn-dark my-3 mx-3">Chọn tất cả</button></label> -->
                                <form action="index.php?act=deletecart" method="POST">
                                <button type="submit" name="deleteAll">Xóa các mục đã chọn</button>
                            </form>
                                <!-- <label for="box"><button type="submit">Bỏ chọn tất cả</button></label> -->
                            </div>
                        
                    </div>
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

                <script>
                    function confirmDelete(deleteUrl) {
                        if (confirm('Bạn có muốn XÓA không ?')) {
                            window.location.href = deleteUrl; // Chuyển hướng đến URL xóa nếu bạn đồng ý
                        }
                    }
                </script>

            </div>
        </main>

        <aside class="col-lg-3">
            <!-- DANH MỤC -->
            <?php require "view/layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "view/layout/top10.php"; ?>

        </aside>
    </div>
</main>