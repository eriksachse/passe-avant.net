<div class="my-40 <?= $template ?>">
    <div class="pl-2">
        <div class="font-Pbold">
            <?= $page->title()->html() ?><br />
            <?= $page->subtitle()->html() ?><br />
            <?= $page->place()->html() ?><br />
        </div>
        <div class="my-4 text-16 leading-16">
            <?= $page->date()->toDate('d–m–Y') ?> <br />
            <?= $page->category() ?> <?php $users = $page->author()->toUsers();
                                        if ($users->exists()) : ?>by <?php endif ?>
        <?php foreach ($users as $user) : ?>
            <a href="<?= $site->url() ?>/authors/<?= $user->name()->slug() ?>"><?= $user->name() ?></a>
        <?php endforeach ?>
        </div>
    </div>
    <?php foreach ($page->text()->toBlocks() as $block) : ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?> <?php if ($block->type() != 'image') : ?> m-4 <?php endif ?><?php if ($block->type() == 'image') : ?> text-12 leading-12 text-gray <?php endif ?>">
            <?= $block ?>
        </div>
    <?php endforeach ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var figures = document.querySelectorAll('figure')
        figures.forEach((figure) => {

            var width = figure.querySelector("img").getBoundingClientRect().width;
            var caption = figure.querySelector('figcaption');
            console.log(caption)
            console.log(figure)
            figure.classList.add("mb-4")
            if (caption) {
                caption.style.width = width - "15"
                caption.classList.add("mx-4", 'my-1')
            }

        });
    });
</script>