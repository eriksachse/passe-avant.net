<section class="projects min-h-screen mt-28<?php e($template == "interviews", ' block md:grid md:grid-cols-2 md:gap-y-16');
                                            e($template == "features", ' features-grid');
                                            e($template == "reviews", ' reviews-grid') ?> ">


    <?php foreach ($articles = $pages->find($template)->children()->listed()->paginate(20) as $article) : ?>


        <article class="<?php
                        e($template == "interviews", ' mb-8 md:mb-0 interviews relative text-center');
                        e($template == "features", 'features');
                        e($template == "reviews", 'reviews');
                        e($template == "opinions", 'opinions mb-20') ?> ">

            <?php if ($template == "interviews") : ?>
                <div class="relative">
                <?php endif; ?>

                <a href="<?= $article->url() ?>">
                    <img src="<?php if ($image = $article->thumbnail()->toFile()) :
                                    echo $image->resize(1000)->url();
                                endif ?>">
                </a>

                <?php if ($template == "interviews") : ?>
                    <div class="interviews-title">
                        <div class="font-Pbold orange-shadow text-white relative">
                            <?= $article->title()->html() ?>
                            <br />
                            <?php if ($article->subtitle()->isNotEmpty()) : ?>
                                <?= $article->subtitle()->html() ?>
                                <br />
                            <?php endif;
                            if ($article->person()->isNotEmpty()) : ?>
                                <?= $article->person()->html() ?>
                                <br />
                            <?php endif;
                            if ($article->place()->isNotEmpty()) : ?>
                                <?= $article->place()->html() ?>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($template == "interviews") : ?>
                </div>
            <?php endif; ?>

            <?php if ($template == "features" || $template == "reviews" || $template == "opinions") : ?>
                <div class="m-2 mb-24">
                    <div class="text-17 2xl:text-18">
                        <a href="<?= $article->url() ?>">
                            <?= $article->date()->toDate('d–m–Y') ?>
                        </a>
                    </div>
                    <div class="m-4">
                        <a href="<?= $article->url() ?>">
                            <?= $article->title()->html() ?><br />
                            <?= $article->place()->html() ?>
                        </a>
                    </div>
                    <?php if ($template == "features") : ?>
                        <div class="border border-black rounded inline-block mt-1 p-1 pt-0.5">
                            <a href="<?= $article->url() ?>">
                                <?= $article->category() ?>
                            </a>
                        </div>
                    <?php endif ?>
                    <div class="mt-1">
                        <a href="<?= $article->url() ?>">
                            <?= $article->preview()->html() ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

        </article>

    <?php endforeach ?>
</section>


<?php $pagination = $articles->pagination() ?>
<nav>
    <div class="flex items-center justify-center m-4 mt-24">

        <?php if ($pagination->hasPrevPage()) : ?>
            <div class="mx-1 text-orange">
                <a href="<?= $pagination->prevPageURL() ?>">Previous</a>
            </div>
        <?php else : ?>
            <div class="mx-1">
                <span>Previous</span>
            </div>
        <?php endif ?>

        <?php foreach ($pagination->range(1) as $r) : ?>
            <div class="mx-1">
                <?= $r ?>
            </div>
            <?php endforeach ?>/
            <?php echo $pagination->lastPage(); ?>

            <?php if ($pagination->hasNextPage()) : ?>
                <div class="mx-1 text-orange">
                    <a href="<?= $pagination->nextPageURL() ?>">Next</a>
                </div>
            <?php else : ?>
                <div class="mx-1">
                    <span>Next</span>
                </div>
            <?php endif ?>

    </div>
</nav>
<?php if ($template == "features" || "reviews") : ?>
    <script>
        console.log('reviews')
        /**
  @version: 0.2.2
  @license WTFPL
*/
        function TinyMasonry(el) {
            var self = this
            var columns = []

            function createColumns(n) {
                var width = 100 / n + "%"
                columns = []
                while (n--) {
                    var column = document.createElement("div")
                    column.style.width = width
                    column.style.float = "left"
                    el.appendChild(column)
                    columns.push(column)
                }
            }

            function getShortest() {
                var shortest = columns[0]
                for (var i = columns.length; i--;) {
                    if (columns[i].clientHeight <= shortest.clientHeight) {
                        shortest = columns[i]
                    }
                }
                return shortest
            }

            function layout(tested) {
                var width = tested.parentElement.clientWidth / tested.clientWidth
                var n = Math.min(42, Math.round(width)) || 1
                var child
                while (child = el.firstElementChild) {
                    child.parentNode.removeChild(child)
                }
                el.style.overflow = "hidden"
                createColumns(n)
                self.items.forEach(function(item) {
                    item.style.display = "block"
                    item.style.width = "auto"
                    item.style.visibility = ""
                    getShortest().appendChild(item)
                })
                el.style.minHeight = ""
            }

            self.update = function() {
                if (self.items[0]) {
                    el.classList.add("tinyMasonryLoaded")
                    if (columns[0]) {
                        el.style.minHeight = el.clientHeight + "px"
                    }
                    var tested = self.items[0]
                    tested.style.width = ""
                    if (tested.parentNode && tested.parentNode.parentNode === el) {
                        layout(tested)
                    } else {
                        el.appendChild(tested)
                        setTimeout(layout.bind(0, tested))
                    }
                }
            }

            self.items = [].slice.call(el.children)
            self.update()
            window.addEventListener("resize", self.update)
        }

        if (typeof exports === "object") {
            module.exports = TinyMasonry
        }
        var featuresGrid = document.querySelectorAll('.features-grid')
        var reviewsGrid = document.querySelectorAll('.reviews-grid')
        console.log(featuresGrid, reviewsGrid)
        <?php if ($template == "features") : ?>
            new TinyMasonry(featuresGrid[0])
        <?php endif;
        if ($template == "reviews") :  ?>
            new TinyMasonry(reviewsGrid[0])

        <?php endif ?>
    </script>
<?php endif ?>