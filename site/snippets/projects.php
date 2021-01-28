<section class="projects<?php e($template == "interviews", ' grid grid-cols-2 gap-y-16');
                        e($template == "features", ' grid features-grid') ?>">


    <?php foreach ($pages->find($template)->children()->listed() as $article) : ?>

        <article class="<?php e($template == "interviews", 'h-interviews interviews');
                        e($template == "features", 'features') ?> relative text-center">
            <a href="<?= $article->url() ?>">
                <img src="<?php if ($image = $article->thumbnail()->toFile()) :
                                echo $image->resize(700)->url();
                            endif ?>">
            </a>
            <div class="<?php e($template == "interviews", 'interviews-title') ?>">
                <h1 class="font-Pbold orange-shadow<?php e($template == "interviews", ' text-white') ?>">
                    <?= $article->title()->html() ?>
                    <br />
                    <?= $article->subtitle()->html() ?><br />
                    <?= $article->place()->html() ?>
                </h1>
                <p>
                    <?php e($template != "interviews", $article->text()->toBlocks()->filterBy('type', 'text')->excerpt(140)) ?>
                </p>
            </div>

        </article>
    <?php endforeach ?>

</section>
<?php if ($template == "features") : ?>
    <script>
        function resizeGridItem(item) {
            grid = document.getElementsByClassName("grid")[0];
            rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
            rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
            rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
            item.style.gridRowEnd = "span " + rowSpan;
        }

        function resizeAllGridItems() {
            allItems = document.getElementsByClassName("item");
            for (x = 0; x < allItems.length; x++) {
                resizeGridItem(allItems[x]);
            }
        }

        function resizeInstance(instance) {
            item = instance.elements[0];
            resizeGridItem(item);
        }

        window.onload = resizeAllGridItems();
        window.addEventListener("resize", resizeAllGridItems);

        allItems = document.getElementsByClassName("features");
        for (x = 0; x < allItems.length; x++) {
            imagesLoaded(allItems[x], resizeInstance);
        }
    </script>
<?php endif ?>