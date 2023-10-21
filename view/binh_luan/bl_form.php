<?php
session_start();
require '../../model/pdo.php';
require '../../model/binh-luan.php';

$ma_hh = $_REQUEST['ma_hh'];

$ds_bl = binh_luan_select_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/css.css">
</head>

<body>
    <div class="comment">



        <h2 class="text-center befor after my-5"> BÌNH LUẬN </h2>
        <?php if (isset($thongbao) && $thongbao != '') { ?>
            <p><?= $thongbao; ?></p>
        <?php } ?>


        <div class="content_box ">
            <?php foreach ($ds_bl as $bl) : ?>
                <?php extract($bl); ?>
                <div class="box_bl my-5">
                   
                    <div class="content_bl"><?= $noi_dung ?></div>
                    <div class="flex">
                        <p><?= $ngay_bl ?></p>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    <?php if (isset($_SESSION['user'])) { ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="bl_search">
            <div class="flex my-5">
                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                <input type="text" name="content" placeholder="Viết bình luận...">
                <button class="blue-btn" type="submit" name="gui_bl">Gửi bình luận</button>
            </div>
        </form>
        <?php
        if (isset($_POST['gui_bl'])) {
            $noi_dung = $_POST['content'];
            $ma_kh = $_SESSION['user']['ma_kh'];
            $name = $_SESSION['user']['name'];
            $ma_hh = $_POST['ma_hh'];
            $ngay_bl = date('h:i:sa d/m/Y ');
            binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
            header("location : " . $_SERVER['HTTP_REFERER']);
        }
        ?>
<?php }  else{
    echo "<p style='color: red;' class='my-5'> Hãy đăng nhập để được bình luận !</p>";
} ?>
    </div>
</body>

</html>