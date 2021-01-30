<html>

<head>
    <?= css('assets/style.css') ?>
</head>

<body class="font-Pregular text-19 leading-19 antialiased <?php e($page->template() == "interviews", ' bg-interviews') ?>">
    <?php snippet('menu') ?>