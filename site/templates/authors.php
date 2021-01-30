<?php snippet('header') ?>
<?php
// fetch all used authors emails from all articles
$articles = $pages->children()->listed();
// echo $articles;
$emails = $articles->pluck('author', '-', true);
// echo $emails;
// get a list of all authors filtered by the ones with articles
$authors = $kirby->users()->filterBy('email', 'in', $emails);
?>

<h1>Authors</h1>

<?php foreach ($authors as $author) : ?>
    <article class="author">
        <h1><?= $author->name() ?></h1>
        <?php if ($avatar = $author->avatar()) : ?>
            <figure>
                <img src="<?= $avatar->url() ?>">
            </figure>
        <?php endif ?>
        <?php if ($blog = page('reviews')) : ?>
            <ul class="articles">
                <?php
                // filter all articles per author
                $articles = $blog->children()->listed()->filter(function ($child) use ($author) {
                    return in_array($author->email(), $child->author()->yaml());
                });
                foreach ($articles as $article) : ?>
                    <li><a href="<?= $article->url() ?>"><?= $article->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>

    </article>
<?php endforeach ?>

<?php snippet('footer') ?>