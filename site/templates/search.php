<?php snippet('header') ?>

<div class="mt-28 mb-20 p-2">

    <?php foreach ($results as $result) : ?>
        <div>
            <a href="<?= $result->url() ?>">
                <?= $result->title() ?>
            </a>
        </div>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>