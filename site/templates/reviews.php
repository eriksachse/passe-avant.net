<?php snippet('header') ?>

<?php
snippet('projects', ['template' => $page->template()])
?>


<?php snippet('footer') ?>
<script>
    const borders = ["b1", "b2", "b3", "b4", "b5", "b6"];

    const articles = document.querySelectorAll("img");

    for (var i = 0; i < articles.length; i++) {
        var randomBorder = borders[Math.floor(Math.random() * borders.length)];
        console.log(randomBorder);
        articles[i].classList.add(randomBorder);
    }
</script>