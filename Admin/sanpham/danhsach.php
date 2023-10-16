<div class="sp_ds_sp">
    <h2 class="text-center fw-bold ">DANH SÁCH HÀNG HÓA</h2>
    <div class="d-flex align-items-center ">

        <form action="index.php?act=ds_sp" method="post">
            <input type="text" name="kyw" class="" placeholder="Tìm kiếm ...">
            <select name="iddm" id="" class="">
                <option value="0" selected>Tất cả</option>
                <?php foreach (Loai_select_all() as $row) : ?>
                    <option value="<?= $row['ma_loai'] ?>"><?= $row['ten_loai'] ?></option>
                <?php endforeach; ?>

            </select>
            <button class=" fw-bold" type="submit" name="search">GO</button>
        </form>
        <div class="flex between">
            <a href="index.php?act=addSP"><button class="text-white fw-bold">Thêm loại hàng</button></a>
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
            <th>MÃ SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th>ĐƠN GIÁ</th>
            <th>GIẢM GIÁ</th>
            <th>ẢNH SẢN PHẨM</th>
            <th>NGÀY NHẬP</th>
            <th>SỐ LƯỢT XEM </th>
            <TH>ĐẶC BIỆT</TH>
            <TH>LOẠI HÀNG</TH>
            <th>THAO TÁC</th>
        </tr>
        <?php foreach (hang_hoa_search($kyw, $iddm) as $key) : ?>
            <?php
            $editSP = "index.php?act=editSP&id=" . $key['ma_hh'];
            $deleteSP = "index.php?act=deleteSP&id=" . $key['ma_hh'];
            ?>
            <tr>
                <td>
                    <form action="index.php?act=deleteSP" method="post">
                        <input type="checkbox" name="deleteid[]" value="<?= $key['ma_hh'] ?>">
                    </form>
                </td>
                <td><?= $key['ma_hh'] ?></td>
                <td><?= $key['ten_hh'] ?></td>
                <td><?= $key['don_gia'] ?></td>
                <td><?= $key['giam_gia'] ?></td>
                <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image'] ?>" alt="">
                </td>
                <td><?= $key['ngay_nhap'] ?></td>
                <td><?= $key['so_luot_xem'] ?></td>
                <td><?= ($key['dac_biet'] == 1 ? 'Có' : 'Không')  ?></td>
                <td><?= $key['ten_loai'] ?></td>
                <!-- <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image'] ?>" alt="">
                </td> -->
                <td>
                    <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?= $editSP ?>"><button class="sp_ds_edit">Sửa</button></a>
                    <button class="sp_ds_delete" onclick="confirmDelete('<?= $deleteSP ?>')">Xóa</button>
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