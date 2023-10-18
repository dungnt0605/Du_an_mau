<div class="sp_ds_sp">
    <h2 class="text-center fw-bold my-5">THỐNG KÊ SẢN PHẨM DANH MỤC</h2>

    <div class="flex between">
        <!-- <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?= $editSP ?>"><button class="sp_ds_edit">Sửa</button></a> -->
        <a href="index.php?act=bieu_do"><button class="sp_ds_delete">Biểu đồ </button></a>
    </div>
    <table  class="my-5">

        <tr>
            <th>MÃ LOẠI</th>
            <th>TÊN LOẠI</th>
            <th>ẢNH LOẠI </th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ NHỎ NHẤT</th>
            <th>GIÁ LỚN NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
          
        </tr>
        <?php foreach ($list_thong_ke as $key) : ?>
            <?php
            //$editSP = "index.php?act=editSP&id=" . $key['ma_hh'];
            //$deleteSP = "index.php?act=deleteSP&id=" . $key['ma_hh'];
            ?>
            <tr>
                
                <td><?= $key['ma_loai'] ?></td>
                <td><?= $key['ten_loai'] ?></td>
                <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image_loai'] ?>" alt="">
                </td>
                <td><?= $key['so_luong'] ?></td>
                <td><?= $key['gia_min'] ?></td>
                <td><?= $key['gia_max'] ?></td>
                <td><?= $key['gia_avg'] ?> triệu </td>
                <!-- <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image'] ?>" alt="">
                </td> -->
            </tr>
        <?php endforeach; ?>
    </table>



    <script>
        function confirmDelete(deleteUrl) {
            if (confirm('Bạn có muốn XÓA không ?')) {
                window.location.href = deleteUrl; // Chuyển hướng đến URL xóa nếu bạn đồng ý
            }
        }
    </script>

</div>