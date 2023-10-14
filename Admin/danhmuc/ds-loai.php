<div class="sp_ds_sp">
    <h2 class="text-center fw-bold ">DANH SÁCH HÀNG HÓA</h2>
    <div class="d-flex align-items-center ">

        <form action="index.php?act=dsloai" method="post">
            <input type="text" name="kyw" class="" placeholder="Tìm kiếm ...">
            <button class=" fw-bold" type="submit" name="search">GO</button>
        </form>
        <div class="flex between">
            <a href="index.php?act=addDM"><button class="text-white fw-bold">Thêm loại hàng</button></a>
            <div class="sp_ds_list_btn flex">
                <a onclick="confirm('Bạn có muốn Xóa những mục mình vừa chọn k ?')" href="#"><button class="btn btn-dark my-3 mx-3">Chọn tất cả</button></a>
                <button type="submit" name="deleteAll">Xóa các danh mục đã chọn</button>
                <a href="#"><button type="submit">Bỏ chọn tất cả</button></a>
            </div>
        </div>
    </div>

    <table>

        <tr>
            <th></th>
            <th>MÃ LOẠI</th>
            <th>TÊN LOẠI</th>
            <th>ẢNH LOẠI</th>
            <th>THAO TÁC</th>

        </tr>
        <?php foreach ($value_loai as $key) : ?>
            <?php
            $editDM = "index.php?act=editDM&id=" . $key['ma_loai'];
            $deleteDM = "index.php?act=deleteDM&id=" . $key['ma_loai'];
            ?>
            <tr>
                <td>
                    <form action="index.php?act=dsloai" method="post">
                        <input type="checkbox" name="">
                    </form>
                </td>
                <td><?= $key['ma_loai'] ?></td>
                <td><?= $key['ten_loai'] ?></td>
                <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image_loai'] ?>" alt="">
                </td>
                <td>
                    <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?= $editDM ?>"><button class="sp_ds_edit">Sửa</button></a>
                    <button class="sp_ds_delete" onclick="confirmDelete('<?= $deleteDM ?>')">Xóa</button>
                </td>
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