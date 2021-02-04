<div class="my-40 <?= $template ?>">
    <div class="pl-2">
        <div class="font-Pbold mb-4">
            <?= $page->title()->html() ?><br />
            <?= $page->subtitle()->html() ?><br />
            <?= $page->place()->html() ?><br />
        </div>
        <div class="my-2 mb-8 text-16 leading-16 2xl:text-19 2xl:leading-19">
            <?= $page->date()->toDate('d–m–Y') ?> <br />
            <?= $page->category() ?> <?php $users = $page->author()->toUsers();
                                        if ($users->exists()) : ?>by <?php endif ?>
        <?php foreach ($users as $user) : ?>
            <a href="<?= $site->url() ?>/authors/<?= $user->name()->slug() ?>"><?= $user->name() ?></a>
        <?php endforeach ?>
        </div>
    </div>
    <?php foreach ($page->text()->toBlocks() as $block) : ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> <?php if ($block->type() != 'image') : ?> mx-2 my-4 max-w-4xl <?php endif ?><?php if ($block->type() == 'image') : ?> text-12 leading-12 text-gray <?php endif ?>">
            <?= $block ?>
        </div>
    <?php endforeach ?>
</div>