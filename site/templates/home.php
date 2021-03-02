<?= css('assets/swiper/swiper.css') ?>
<?php snippet('header') ?>


<div class="swiper-container bg-gray-500 relative z-0">
    <div class="swiper-wrapper">
        <?php
        // let's fetch all visible children from the blog page and sort them by their date field
        $articles = $pages->children()->published()->sortBy(function ($page) {
            return $page->date()->toDate();
        }, 'desc');
        ?>
        <?php foreach ($articles as $home) : ?>
            <?php if ($home->frontpage()->bool()) : ?>
                <div class="rounded-3xl relative overflow-hidden h-full swiper-slide">
                    <div class="swiper-image bg-100%" style="background-image:

                        <?php if (
                            $home->template() == "feature"
                            || $home->template() == "review"
                            || $home->template() == "interview"
                            || $home->template() == "opninion"
                        ) : ?>
                        url( <?php if ($image = $home->thumbnail()->toFile()) : ?>
                                <?= $image->resize(700)->url() ?>
                            <?php endif ?> )
                        <?php endif ?>
                        
                        ">

                        <?php if (
                            $home->template() == "ad"
                        ) : ?>
                            <div class="grid grid-cols-2">
                                <?php $ads = $home->ads()->toStructure();
                                foreach ($ads as $ad) : ?>
                                    <div class="<?= $ad->size() ?>">
                                        <a href="<?= $ad->link() ?>" target="_blank">
                                            <?php if ($image = $ad->thumbnail()->toFile()) : ?>
                                                <img src="<?= $image->resize(700)->url() ?>">
                                            <?php endif ?>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                    </div>

                    <?php if (
                        $home->template() == "feature"
                        || $home->template() == "review"
                        || $home->template() == "interview"
                        || $home->template() == "opninion"
                    ) : ?>
                        <a href="<?= $home->url() ?>" class="swiper-title text-2xl p-4 px-12 text-29 leading-29 <?php
                                                                                                                e($home->template() == "interview", 'home_interview');
                                                                                                                e($home->template() == "review", 'home_review');
                                                                                                                e($home->template() == "feature", 'home_feature')
                                                                                                                ?>">
                            <div class="font-Pbold uppercase"><?= $home->title() ?></div>
                            <div class="font-Pbolditalic"><?= $home->subtitle() ?></div>
                        </a>
                    <?php endif ?>
                    <div class="swiper-type bg-green rounded border border-black capitalize">
                        <?= $home->template() ?>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?= js('assets/swiper/swiper.min.js') ?>
<?php snippet('footer') ?>

<script>
    const borders = ["b1", "b2", "b3", "b4", "b5", "b6"];

    const sliders = document.getElementsByClassName("swiper-slide");

    for (var i = 0; i < sliders.length; i++) {
        var randomBorder = borders[Math.floor(Math.random() * borders.length)];
        console.log(randomBorder);
        sliders[i].classList.add(randomBorder);
    }

    var swiper = new Swiper(".swiper-container", {
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 14,
        slideToClickedSlide: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        on: {
            transitionStart: function() {
                var active = document.getElementsByClassName('swiper-slide')
                // console.log(active)
                for (var i = 0; i < active.length; i++) {
                    active[i].style.border = "0px solid red"
                    active[i].firstElementChild.style.pointerEvents = "none"
                }
            },
            transitionEnd: function(swiper) {
                var active = document.getElementsByClassName('swiper-slide-active')[0]
                active.firstElementChild.style.pointerEvents = "all"
            }
        },
    });
</script>