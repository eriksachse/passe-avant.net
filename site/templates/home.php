<?= css('assets/swiper/swiper.css') ?>
<?php snippet('header') ?>


<div class="swiper-container bg-gray-500 relative z-0">
    <div class="swiper-wrapper">
        <?php foreach ($pages->children()->published() as $home) : ?>
            <?php if ($home->frontpage()->bool()) : ?>
                <div class="rounded-3xl relative overflow-hidden h-full swiper-slide">
                    <div class="swiper-image bg-100%" style="background-image: url(
                        <?php if ($image = $home->thumbnail()->toFile()) : ?>
                            <?= $image->resize(700)->url() ?>
                        <?php endif ?>)">

                    </div>
                    <a href="<?= $home->url() ?>" class="swiper-title text-2xl p-4 text-29 leading-29 <?php
                                                                                                        e($home->template() == "interview", 'home_interview');
                                                                                                        e($home->template() == "review", 'home_review');
                                                                                                        e($home->template() == "feature", 'home_feature')
                                                                                                        ?>">
                        <div class="font-Pbold uppercase"><?= $home->title() ?></div>
                        <div class="font-Pbolditalic"><?= $home->subtitle() ?></div>
                    </a>
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
        on: {},
    });
</script>