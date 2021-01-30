<?php snippet('header') ?>
<?= $page->title()->kirbyText() ?>
<?php foreach ($page->text()->toBlocks() as $block) : ?>
    <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> <?php if ($block->type() != 'image') : ?> m-4 <?php endif ?>">
        <?= $block ?>
    </div>
<?php endforeach ?>
<?php snippet('footer') ?>