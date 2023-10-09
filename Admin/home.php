<main class="home-container">
        <div class="home__admin">
            <main class="home_ad_main">
                <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="overflow: hidden; height: 550px;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="15000">
                            <img src="https://images.pexels.com/photos/384555/pexels-photo-384555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-3">Mèo Birman</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="12000">
                            <img src="https://images.pexels.com/photos/2181171/pexels-photo-2181171.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-3">Mèo Anh Lông Ngắn</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="9000">
                            <img src="https://images.pexels.com/photos/6456287/pexels-photo-6456287.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-3">Mèo </h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="6000">
                            <img src="https://sassykoonz.com/wp-content/uploads/2019/10/AdobeStock_216178182-scaled.jpeg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-3">Mèo Maine Coon</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/8414449/pexels-photo-8414449.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-3">Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> -->
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
                    <!-- Danh sách sản phẩm -->
                    <?php

                    // if(isset($_GET['home'])){
                    //     $home = $_GET['home'];
                    //     switch ($home) {
                    //         case 'dm_cat':
                                
                    //             break;
                            
                    //         default:
                                
                    //             include "layout/allSP.php" ;
                    //         break;
                    //     }
                    // }
                    
                    include "layout/allSP.php" ;
                    ?>
            </main>

            <aside class="home_ad_">

                <!-- LOGIN -->
                <?php require "layout/login.php"; ?>
                <!-- DANH MỤC -->
                <?php 
                    
                    require "layout/danh_muc.php"; ?>
                <!-- TOP 10 -->
                <?php require "layout/top10.php"; ?> 

            </aside>
        </div>
    </main>