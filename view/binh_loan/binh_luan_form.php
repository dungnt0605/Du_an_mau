<?php
session_start();

require '../../model/binh-luan.php';
$ma_kh = $_SESSION['user']['ma_kh'];
$idpro = $_REQUEST['idpro'];

$ds_bl = binh_luan_select_all();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/css.css">
</head>

<body>
    <div class="comment">

        <h2 class="text-center befor after"> BÌNH LUẬN </h2>

        <div class="content_box">
            <?php
            echo "hí anh em " . $idpro;
           foreach ($ds_bl as $bl) {
                 echo $bl['noi_dung'];
                }
            
            ?>
        </div>
        <form action="<?=$_SERVER['PHP_SELF'] ;?>" method="POST" class="bl_search">
            <div class="flex ">
                <input type="hidden" name="ma_hh" value="<?= $idpro?>">
                <input type="text" name="content">
                <button class="blue-btn" type="submit" name="gui_bl">Gửi bình luận</button>
            </div>
        </form>

    </div>

    <?php
    if(isset($_POST['gui_bl'])) {
        $noi_dung = $_POST['content'];
        $ma_kh = $_SESSION['user']['ma_kh'];
        $ma_hh = $_POST['ma_hh'];
        $ngay_bl = date('h:i:sa d/m/Y ');
        binh_luan_insert($ma_kh, $ma_hh, $noi_dung ,$ngay_bl);
        // header("location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>

</html>