<?php



?>
<div class="sp_ds_loai">
    <h2 class="text-center fw-bold ">DANH SÁCH HÀNG HÓA</h2>
    <a class="dm_add_loai_link" href="index.php?act=addDM">
        <button >Thêm loại hàng</button>
    </a>
    <table border="1px">
        <tr>
            <th></th>
            <th>MÃ LOẠI</th>
            <th>TÊN LOẠI</th>
            <th>ẢNH LOẠI</th>
            <th>THAO TÁC</th>
        </tr>
        <?php foreach (loai_select_all() as $key) : ?>
            <?php
                $editDM = "index.php?act=editDM&id=" . $key['ma_loai'];
                $deleteDM = "index.php?act=deleteDM&id=" . $key['ma_loai'];
            ?>
            <tr>
                <td><input type="checkbox" name=""></td>
                <td><?= $key['ma_loai'] ?></td>
                <td><?= $key['ten_loai'] ?></td>
                <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image'] ?>" alt="">
                </td>
                <td>
                    <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?=$editDM ?>"><button class="dm_ds_edit">Sửa</button></a>
                    <a onclick="confirm('Bạn có muốn XÓA không ?')" href="<?=$deleteDM ?>"><button class="dm_ds_delete">Xóa</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="d-flex justify-content-between">

    </div>
</div>