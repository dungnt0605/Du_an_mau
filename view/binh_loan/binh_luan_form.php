<?php 
$ipro = $_REQUEST['ipro'];
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
<div class="home_list-group">
    <button class="fw-bold text-center">
        <h3>BÌNH LUẬN</h3>
    </button>
    <div class="content_box">
        <?php 
            echo "hí anh em " . $ipro;
        ?>
    </div>
    
        <form action="index.php?act=add_bl" method="POST" class="ds_search">
            <div class="flex between">
                <input type="text" name="msg" >
                <button class="blue-btn" type="submit" name="gui_bl">Gửi bình luận</button>
            </div>
        </form>
    
</div>
</body>
</html>