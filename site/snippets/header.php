<html>

<head>
    <?= css('assets/style.css') ?>
</head>

<body class="font-Pregular subpixel-antialiased <?php e($page->template() == "interviews", ' bg-interviews') ?>">
    <?php snippet('menu') ?>