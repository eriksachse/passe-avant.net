<div class="my-40 <?= $template ?>">
    <div class="pl-2">
        <div class="font-Pbold mb-4">
            <?= $page->title()->html() ?><br />
            <?php if ($page->subtitle()->isNotEmpty()) : ?>
                <?= $page->subtitle()->html() ?><br />
            <?php endif;
            if ($page->person()->isNotEmpty()) : ?>
                <?= $page->person()->html() ?><br />
            <?php endif;
            if ($page->place()->isNotEmpty()) : ?>
                <?= $page->place()->html() ?><br />
            <?php endif ?>
        </div>
        <div class="my-2 mb-8 text-16 leading-16 2xl:text-19 2xl:leading-19">
            <?= $page->date()->toDate('d–m–Y') ?> <br />
            <?= $page->category() ?>
            <?php $users = $page->authors()->toUsers();
            if ($users->isNotEmpty()) : ?>by <?php endif;
                                            foreach ($users as $user) : ?>
            <a href="<?= $site->url() ?>/authors/<?= $user->name()->slug() ?>"><?= $user->name() ?></a>
        <?php endforeach ?>
        </div>
    </div>
    <?php foreach ($page->text()->toBlocks() as $block) : ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> <?php if ($block->type() != 'image') : ?> mx-2 my-4 max-w-4xl 2xl:max-w-6xl <?php endif ?><?php if ($block->type() == 'image') : ?> text-12 leading-12 text-gray <?php endif ?>">
            <?= $block ?>
        </div>
    <?php endforeach ?>
</div>