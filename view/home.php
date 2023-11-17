<main class="home-container">
    <div class="home__admin">
        <main class="home_ad_main">
            <div class="banner">
                <div class="btn">
                    <button onclick="back()" class="control next"><i class="fa-solid fa-angle-left"></i></button>

                    <button onclick="next()" class="control prev"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>


            <?php require "layout/allSP.php"; ?>


        </main>

        <aside class="col-lg-3">
            <!-- DANH MỤC -->
            <?php require "layout/danh_muc.php"; ?>
            <!-- TOP 10 -->
            <?php require "layout/top10.php"; ?>

        </aside>
    </div>
</main>