<div class="sp_ds_sp">
    <h2 class="text-center fw-bold ">DANH SÁCH KHÁCH HÀNG</h2>
    <div class="d-flex align-items-center ">

        <form action="index.php?act=dsKH" method="post">
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
            <th>MÃ KHÁCH HÀNG</th>
            <th>TÊN KHÁCH HÀNG</th>
            <th>MẬT KHẨU</th>
            <th>ẢNH ĐẠI DIỆN</th>
            <th>VAI TRÒ</th>
            <th>ĐỊA CHỈ</th>
            <TH>SDT</TH>
            <TH>THAO TAC</TH>
            
        </tr>
        <?php foreach ($value_kh as $key) : ?>
            <?php
                $editKH = "index.php?act=editKH&id=" . $key['ma_kh'];
                $deleteKH = "index.php?act=deleteKH&id=" . $key['ma_kh'];
                ?>
                <tr>
                    <td>
                        <form action="index.php?act=dsKH" method="post">
                            <input type="checkbox" name="deleteid[]" value="<?= $key['ma_kh'] ?>">
                        </form>
                    </td>
                    <td><?= $key['ma_kh'] ?></td>
                    <td><?= $key['name'] ?></td>
                    <td><?= $key['pass'] ?></td>
                    <td>
                        <img style="width: 100px;" src="../imageT2/<?= $key['avatar'] ?>" alt="">
                    </td>
                    <td><?= ($key['vai_tro'] == 1) ? 'Admin' : 'Khách hàng'  ?></td>
                    <td><?= $key['dia_chi'] ?></td>
                    <td><?= $key['sdt']   ?></td>
                    <!-- <td>
                    <img style="width: 100px;" src="../imageT2/<?= $key['image'] ?>" alt="">
                </td> -->
                    <td>
                        <a onclick="confirm('Bạn có muốn SỬA không ?')" href="<?= $editKH ?>"><button class="sp_ds_edit">Sửa</button></a>
                        <button class="sp_ds_delete" onclick="confirmDelete('<?= $deleteKH ?>')">Xóa</button>
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