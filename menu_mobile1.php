<div id="my-id" uk-offcanvas="overlay: true; mode: push">
    <div class="uk-offcanvas-bar uk-overflow-auto uk-flex uk-flex-column uk-padding-remove">
        <nav class="menu_m">
            <div class="lq-login-regis" hidden>
                <div>
                    <img src="imgs/user1.png" alt="">
                    <span class="login-txt uk-text-uppercase"><a class="uk-link-reset" href="#">đăng nhập</a></span>
                    <div class="regis-forgot">
                        <a href="#">đăng ký</a> / <a href="#">quên mật khẩu</a>
                    </div>
                </div>
            </div>
            <ul class="uk-list uk-margin-remove">
                <?php
                $data = array
                (
                    array(
                        'title' => 'ABOUT',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'FEATURES',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'HOW IT WORK',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'FAQ',
                        'mode' => '',
                        'href' => 'faqs.php',
                    ),
                    array(
                        'title' => 'SIGN IN',
                        'mode' => '',
                        'href' => '#',
                    ),
                );
                foreach ($data as $k1 => $v1) { ?>
                    <li class="uk-margin-remove <?= (isset($v1['active']) ? 'uk-active' : '') ?>">
                        <a class="uk-padding-small uk-display-block" href="<?= $v1['href'] ?>">
                            <?= $v1['title'] ?>
                            <?php switch ($v1['mode']) {
                                case 'live':
                                    echo "<span class=\"uk-badge live uk-text-small uk-text-uppercase\">live</span>";
                                    break;
                                case 'ads':
                                    echo "<span class=\"uk-badge ads uk-text-small uk-text-uppercase\">ads</span>";
                                    break;
                                default:
                                    echo "";
                            } ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="copyright_m">
            <div class="uk-padding-small"><small>Copyright © 2019 POD-EZ. All rights reserved.</small></div>
        </div>
    </div>
</div>