<?php $title = "Trang chủ" ?>
<?php include "header.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand@m">
                <div class="pod-block-header uk-margin-medium">
                    <span class="uk-text-uppercase">who are we</span>
                    <h2>About PodEz</h2>
                    <p class="pod-desc2">At Podez, we make it easy to sell your own idea. Over 20 exclusive products will make your store stand out from the crowd.</p>
                    <p class="pod-desc">We believe that good design is powerful, hard work is essential, and exploring the unknown is important. We focus on how to help you sell better, and you can just focus on selling. All the features you want, none of the hassle.</p>
                    <div>
                        <a href="#" class="uk-button pod-btn1 uk-button-default uk-button-large">More about us</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <img src="imgs/img5.png" alt="">
            </div>
        </div>
    </div>
</div>
<div id="pod-block-customer" class="uk-section uk-position-relative">
    <div class="floating-shapes">
        <span data-parallax='{"x": 50, "y": -20, "rotateZ":500}'>
            <img src="imgs/shape/shape1.png" alt="">
        </span>
        <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
            <img src="imgs/shape/shape2.png" alt="">
        </span>
        <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
            <img src="imgs/shape/shape3.png" alt="">
        </span>
        <span data-parallax='{"x": -20, "y": 380}'>
            <img src="imgs/shape/shape4.png" alt="">
        </span>
        <span data-parallax='{"x": 200, "y": 70}'>
            <img src="imgs/shape/shape5.png" alt="">
        </span>
        <span data-parallax='{"x": 250, "y": 380, "rotateZ":1500}'>
            <img src="imgs/shape/shape6.png" alt="">
        </span>
    </div>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
                <div class="pod-block-header uk-margin-medium">
                    <span class="uk-text-uppercase">our community</span>
                    <h2>Customer Review</h2>
                </div>
                <div class="pod-customer owl-carousel owl-theme">
                    <?php
                    $data = array(
                        array(
                            'desc' => 'Freelancer hoàn thành công việc rất tốt và chuyên nghiệp, đáp ứng tất cả những yêu cầu của tôi đưa ra. Sẽ làm việc lại với freelancer này trong tương lai.',
                            'img' => 'https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-0/p370x247/62308992_10156814080283411_1022742669362724864_n.jpg?_nc_cat=110&_nc_oc=AQktgubE4fz5DAaWtj4K8AWKzG8xJTy5Xi4OIP2PcZi6u8-Ucx7kjOOZ2BF1m2-1ObU&_nc_ht=scontent.fhan3-1.fna&oh=151a74abc4a6988dad9a50b96bf80fd4&oe=5D899BF3',
                            'name' => 'Nguyen Manh Thang',
                            'office' => 'CEO',
                        ),
                        array(
                            'desc' => 'This app is great. I\'m new to this but this app really helps me. great that the shipping price is included in the cost. wish there are more items to choose from though. please add more stuff.',
                            'img' => 'https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-9/53189234_1027192717473217_4973914510675935232_n.jpg?_nc_cat=105&_nc_oc=AQnx47cDHDctEzJnaBx8r2hHS3FrMYdeZgJVrp9__Iz1JINuI74txeo1Mnvd03bqKtw&_nc_ht=scontent.fhan4-1.fna&oh=46ff7bc314985cb968d6e001ad94ff4e&oe=5D92A9E1',
                            'name' => 'Hai LE Manh',
                            'office' => 'Freelancer',
                        ),
                        array(
                            'desc' => 'Hoàng Anh là freelancer rất tích cực trong công việc và giao tiếp, nhanh nhẹn và thông minh. Sẵn sàng hợp tác với bạn khi có dự án mới.',
                            'img' => 'https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/64586113_1733627210114548_6739190101336653824_n.jpg?_nc_cat=100&_nc_oc=AQnmcH8vOMwLuEhmNB8N9wPKhcs9j_5ZJ9Qa1DX8O-VYEG5jhcMj7aeqd7y9iPs1iYU&_nc_ht=scontent.fhan3-3.fna&oh=ff3d00622f5e267625929709d59fb097&oe=5D86DF1D',
                            'name' => 'Heather Coleman',
                            'office' => 'Manager',
                        ),
                    );
                    foreach ($data as $k1 => $v1){ ?>
                        <div class="item">
                            <p class="pod-desc1">“<?= $v1['desc']; ?>”</p>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="<?= $v1['img'] ?>" alt="" uk-cover>
                                        <canvas width="40" height="40"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h6 class="pod-name1 uk-margin-remove"><?= $v1['name'] ?></h6>
                                    <small><?= $v1['office'] ?></small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <script>
                    $('.pod-customer').owlCarousel({
                        loop:false,
                        margin:10,
                        nav:true,
                        dots: false,
                        autoHeight:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:1
                            },
                            1000:{
                                items:1
                            }
                        }
                    })
                </script>
            </div>
            <div class="uk-flex-first@m">
                <img src="imgs/custom-banner-left.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="pod-block-header uk-text-center uk-margin-medium">
            <span class="uk-text-uppercase">products</span>
            <h2>Featured Products</h2>
        </div>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-medium uk-margin-medium" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'imgs/img1.jpg',
                    'title' => 'Hoodie',
                    'price' => '$33.5',
                ),
                array(
                    'img' => 'imgs/img2.jpg',
                    'title' => 'T-Shirt',
                    'price' => '$12.5',
                ),
                array(
                    'img' => 'imgs/img3.jpg',
                    'title' => 'Zip Hoodie',
                    'price' => '$29.5',
                ),
                array(
                    'img' => 'imgs/img4.jpg',
                    'title' => 'Sweatshirt',
                    'price' => '$20',
                ),
            );
            foreach ($data as $k1 => $v1){ ?>
                <div>
                    <div class="pod-img1">
                        <img src="<?= $v1['img'] ?>" alt="">
                    </div>
                    <div class="uk-text-center uk-margin-small pod-txt1">
                        <h6><a href="#"><?= $v1['title'] ?></a></h6>
                        <p><?= $v1['price'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="uk-text-center">
            <a href="#" class="uk-button pod-btn1 uk-button-default uk-button-large">All products</a>
        </div>
    </div>
</div>
<div id="pod-block-getapp" class="uk-section" data-src="imgs/bg-getapp.jpg" uk-img>
    <div class="uk-container">
        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-expand">
                <div class="pod-box-img uk-box-shadow-medium">
                    <img src="imgs/Orderdetail.jpg" alt="">
                </div>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <div class="pod-block-header">
                    <span class="uk-text-uppercase">install now</span>
                    <h2>Get The App</h2>
                </div>
                <p class="pod-desc">Get the latest resources for installing, and updating PodEz. Select your device platform and Use Our app and Enjoy Your Life.</p>
                <div class="uk-margin-medium">
                    <a href="#" class="uk-button uk-button-secondary uk-button-large pod-install"><span uk-icon="download"></span> Install here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>