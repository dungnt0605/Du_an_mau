<main class="home-container">
    <div class="home__admin">
        <main class="home_ad_main">
            <div class="home_side">
                <div class="home_side_main">
                    <img src="https://images.pexels.com/photos/384555/pexels-photo-384555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-feature" alt="sl">
                    <div class="control prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="control next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
                <div class="home_list_box flex">
                    <div class="home_item_box active"><img src="https://images.pexels.com/photos/384555/pexels-photo-384555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                    <div class="home_item_box"><img src="https://images.pexels.com/photos/2181171/pexels-photo-2181171.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                    <div class="home_item_box"><img src="https://images.pexels.com/photos/6456287/pexels-photo-6456287.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                    <div class="home_item_box"><img src="https://sassykoonz.com/wp-content/uploads/2019/10/AdobeStock_216178182-scaled.jpeg" alt=""></div>
                    <div class="home_item_box"><img src="https://images.pexels.com/photos/8414449/pexels-photo-8414449.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                </div>
            </div>

            <?php require "layout/allSP.php"; ?>


        </main>

        <aside class="col-lg-3">

            <!-- LOGIN -->
            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];

                extract($user);
                echo "
                    <div class='home_login flex'>
                        <img  src= './imageT2/$avatar'  alt=''>
                        <h3>$name</h3>
                    </div>
                    ";
            } else {
                require "layout/login.php";
            }
            ?>
            <!-- DANH MỤC -->
            <?php require "layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "layout/top10.php"; ?>

        </aside>
    </div>
</main>