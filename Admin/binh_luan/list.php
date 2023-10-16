<div class="sp_ds_sp">
    <h2 class="text-center fw-bold ">DANH SÁCH BÌNH LUẬN</h2>
    <div class="d-flex align-items-center ">

        <form action="index.php?act=dsBL" method="post">
            <input type="text" name="kyw" class="" placeholder="Tìm kiếm ...">
            <button class=" fw-bold" type="submit" name="search">GO</button>
        </form>
        <div class="flex between">
            <a href="#"><button class="text-white fw-bold">Thêm loại hàng</button></a>
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
            <th>MÃ BÌNH LUẬN</th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>NỘI DUNG</th>
            <th>MÃ SẢN PHẢM</th>
            <th>NGÀY BÌNH LUẬN</th>
            <TH>THAO TAC</TH>
            
        </tr>
        <?php foreach ($value_bl as $key) : ?>
            <?php
                $editBL = "index.php?act=editBL&id=" . $key['ma_bl'];
                $deleteBL = "index.php?act=deleteBL&id=" . $key['ma_bl'];
                ?>
                <tr>
                    <td>
                        <form action="index.php?act=dsBL" method="post">
                            <input type="checkbox" name="deleteid[]" value="<?= $key['ma_bl'] ?>">
                        </form>
                    </td>
                    <td><?= $key['ma_bl'] ?></td>
                    <td><?= $key['ma_kh'] ?></td>
                    <td><?= $key['noi_dung'] ?></td>
                    <td><?= $key['ma_hh'] ?></td>
                    <td><?= $key['ngay_bl']   ?></td>
                  
                    <td>
                        <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?= $editBL ?>"><button class="sp_ds_edit">Sửa</button></a>
                        <button class="sp_ds_delete" onclick="confirmDelete('<?= $deleteBL ?>')">Xóa</button>
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