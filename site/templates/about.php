<?php snippet('header') ?>

<div class="grid grid-cols-2 m-2 mt-28 gap-12">
    <div>
        <div class="font-Pbold pb-12">
            <?= $page->headline()->kirbyText() ?>
        </div>
        <div class="text">
            <?= $page->text()->kirbytext() ?></div>
    </div>
    <div>

        <div class="font-Pbold pb-12">PASSE-AVANT</div>
        <div>Editor-in-Chief</div>
        <div class="pb-4 pl-8 ">
            <?= $page->editorinchief()->kirbytext() ?>
        </div>
        EDITORS
        <div class="pb-4 pl-8 text">
            <?= $page->editors()->kirbytext() ?>
        </div>
        FOUNDERS
        <div class="pb-4 pl-8">
            <?= $page->founders()->kirbytext() ?>
        </div>
        CONTACT
        <div>
            <div class="pb-4 pl-8 ">
                <?= $page->email()->kirbytext() ?>
                <p><a href="tel:<?= $page->phone() ?>"><?= $page->phone() ?></a></p>

                <?php
                $socials = $page->social()->toStructure();
                foreach ($socials as $item) : ?>
                    <div>
                        <a href="<?= $item->platform()->url() ?>" target="_blank"><?= $item->platform()->html() ?></a>
                    </div>
                <?php endforeach ?>

            </div>
        </div>


        <?php
        $contributions = $page->contributions()->toStructure();
        foreach ($contributions as $item) : ?>
            <a href=""><?= $item->name()->html() ?></a>
        <?php endforeach ?>

        ART DIRECTION
        <div class="text">
            <p>
                <a href="http://studiobuettner.com/" target="_blank">Anne Büttner</a>
            </p>
        </div>


        WEBSITE DEVELOPMENT
        <div class="text">
            <p>
                <a href="https://napoleon.services/" target="_blank">Erik Sachse</a>
            </p>
        </div>


        TYPEFACE
        <div class="text">
            <p>
                <a href="https://www.jung-lee.nl/pirelli/regular/128pt/black/lava-red" target="_blank">Pirelli</a> by <a href="https://www.jung-lee.nl" target="_blank">Jung-Lee</a>
            </p>
        </div>
    </div>
</div>
<?php snippet('footer') ?>