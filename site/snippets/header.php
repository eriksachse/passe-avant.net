<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta property="og:image" content="<?php if ($page->cover()->isNotEmpty()) : ?><?= $page->cover()->toFile()->resize(1200)->url() ?><?php else : ?><?= $kirby->url('assets') ?>/images/PASSE-AVANT-orange.jpg<?php endif ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Carina Bukuts, Sonja Borstner">
    <meta name="publisher" content="Carina Bukuts, Sonja Borstner">
    <meta name="copyright" content="Carina Bukuts, Sonja Borstner, Erik Sachse, Anne Büttner">
    <meta name="description" content="PASSE-AVANT is an online magazine for contemporary art">
    <meta name="keywords" content="contemporary, art, magazine, journal">
    <meta name="page-topic" content="Kultur">
    <meta name="page-type" content="Katalog Verzeichnis">
    <meta http-equiv="content-language" content="en">
    <meta name="robots" content="index, follow">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url('assets') ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url('assets') ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url('assets') ?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?= $kirby->url('assets') ?>/images/site.webmanifest">
    <link rel="mask-icon" href="<?= $kirby->url('assets') ?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= $kirby->url('assets') ?>/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-config" content="<?= $kirby->url('assets') ?>/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <title><?= $site->title() ?> | <?= $page->title() ?></title>



    <?= css('assets/style.css') ?>

</head>

<body id="container" class="font-Pregular antialiased <?php e($page->template() == "interviews", ' bg-interviews') ?>">
    <?php snippet('menu') ?><div class="leading-19 text-19 2xl:text-23 2xl:leading-23">
        <div style="position: fixed; top: 0;right: 0;" id="counter" class="m-2 color-gray text-12 leading-12"></div>