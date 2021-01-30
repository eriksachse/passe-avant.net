<?php snippet('header') ?>

<div class="grid grid-cols-2 m-2 mt-28 gap-12 about">
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
            <div>
                <div class="uppercase"><?= $item->compartment() ?></div>
                <div class="pb-4 pl-8">
                    <a href="<?= $item->website() ?>" target="_blank"><?= $item->name()->html() ?></a>
                </div>
            </div>
        <?php endforeach ?>


    </div>
</div>
<?php snippet('footer') ?>