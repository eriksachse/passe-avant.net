<?php snippet('header') ?>
<?php
$email = $page->email()->value();
$articles = page('reviews', 'interviews', 'features', 'opinions')->children()->listed()->filter(function ($article) use ($email) {
    return $article->authors()->toUsers()->has(kirby()->user($email));
});
?>
<div class="my-40">
    <div class="font-Pbold leading-29 mb-10 p-2">

        <?= $page->bio()->kirbytext() ?>

    </div>
    <div>
        <?php foreach ($articles as $article) : ?>
            <div class="mb-20">
                <div>
                    <?php if ($article->cover()->isNotEmpty()) : ?>
                        <img src="<?= $article->cover()->toFile()->resize(300)->url() ?>">
                    <?php endif ?>
                    <?php if ($article->cover()->isEmpty()) : ?>
                        <img src="../assets/images/empty.png">
                    <?php endif ?>
                </div>
                <div class="p-2 max-w-3xl">
                    <a href="<?= $article->url() ?>">
                        <?php if ($date = $article->date()) : ?>
                            <div class="date">
                                <?= $article->date()->toDate('d–m–Y') ?> <span class=" text-orange uppercase font-Pregularitalic"><?= $article->template() ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="m-4">
                            <?= $article->title() ?>
                        </div>
                        <div>
                            <?= $article->headline() ?>
                        </div>
                        <?php if ($article->category()->isNotEmpty()) : ?>
                            <div class="uppercase">
                                <?= $article->category() ?>
                            </div>
                        <?php endif ?>
                        <div class=" preview">
                            <?= $article->preview()->kirbytext() ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>

<?php snippet('footer') ?>