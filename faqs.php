<?php $title = "Hỏi đáp" ?>
<?php include "header.php"; ?>
<div id="pod-block-faq" class="uk-section" data-src="imgs/bg_faq.jpg" uk-img>
    <div class="uk-container uk-container-small">
        <div class="pod-block-header uk-text-center uk-margin-medium">
            <h2>How Can We Help You?</h2>
            <p class="uk-margin-small-top pod-desc-faq">FAQs, quick fixes, and official info on every Dropbox feature. Just a search away.</p>
        </div>
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-5-6@m">
                <div class="uk-margin">
                    <form class="pod-form1 uk-search uk-search-default uk-background-default uk-overflow-hidden uk-width-1-1">
                        <a href="" uk-search-icon></a>
                        <input class="uk-search-input" type="search" placeholder="Search for answers...">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-small">
        <h4 class="pod-title1">Featured Articles</h4>
        <ul uk-accordion>
            <?php
            $data = array(
                array(
                    'question' => 'What is PodEz and how does it work?',
                    'open' => true,
                    'answer' => 'PodEz is a complete commerce platform that lets you start, grow, and manage a business.
Create and customize an online store. Sell in multiple places, including web, mobile, social media, online marketplaces, brick-and-mortar locations, and pop-up shops. Manage products, inventory, payments, and shipping. PodEz is completely cloud-based and hosted, which means you don’t have to worry about upgrading or maintaining software or web servers.',
                ),
                array(
                    'question' => 'How much does PodEz cost?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'What is PodEz and how does it work?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'Can I use my own domain name with PodEz?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'In what countries can I use PodEz?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
            );
            foreach ($data as $k1 => $v1){ ?>
                <li class="pod-question1 uk-margin-small <?= ($v1['open']) ? 'uk-open' : '' ?>">
                    <a class="uk-accordion-title" href="#"><?= $v1['question'] ?></a>
                    <div class="uk-accordion-content">
                        <p><?= $v1['answer'] ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <h4 class="pod-title1">Communication</h4>
        <ul uk-accordion>
            <?php
            $data = array(
                array(
                    'question' => 'Pairing your phone with PodEz?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'How to configure your notifications?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'Problems sending or receiving messages?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'question' => 'Recover and restore deleted files or folders?',
                    'open' => false,
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
            );
            foreach ($data as $k1 => $v1){ ?>
                <li class="pod-question1 uk-margin-small <?= ($v1['open']) ? 'uk-open' : '' ?>">
                    <a class="uk-accordion-title" href="#"><?= $v1['question'] ?></a>
                    <div class="uk-accordion-content">
                        <p><?= $v1['answer'] ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="pod-common uk-section uk-background-norepeat uk-background-bottom-right uk-height" data-src="imgs/bg_contact.png" uk-img>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle uk-grid-large" uk-grid>
            <div>
                <div class="pod-block-header uk-margin-large">
                    <h2>
                        Need a helping hand? <br>
                        We’re all ears
                    </h2>
                </div>
                <form class="pod-form2">
                    <fieldset class="uk-fieldset">


                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Your Name">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="email" placeholder="Email">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Subject">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" placeholder="Message"></textarea>
                        </div>

                        <div class="uk-margin">
                            <a href="#" class="uk-button pod-btn1 uk-button-default uk-button-large">Send</a>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div>
                <h5 class="pod-contact-title uk-margin-medium">Contact us</h5>
                <ul class="uk-list pod-contact-list">
                    <li class="uk-position-relative uk-margin-medium">
                        <span class="uk-position-top-left" uk-icon="location"></span>
                        <div class="pod-label-txt">Location</div>
                        <div class="pod-txt">
                            South Miles Ave <br>
                            Royersford, PA 19468
                        </div>
                    </li>
                    <li class="uk-position-relative uk-margin-medium">
                        <span class="uk-position-top-left" uk-icon="mail"></span>
                        <div class="pod-label-txt">Email Address</div>
                        <div class="pod-txt">
                            support@podez.com
                        </div>
                    </li>
                    <li class="uk-position-relative uk-margin-medium">
                        <span class="uk-position-top-left" uk-icon="receiver"></span>
                        <div class="pod-label-txt">Phone No.</div>
                        <div class="pod-txt">
                            +123 456 789
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>