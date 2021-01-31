<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if ($items->isNotEmpty()) :

?>
  <div class="fixed w-full z-10 top-0 text-17 ">
    <nav class="flex md:flex-row flex-col text-center justify-center uppercase font-Pbold m-2">
      <div class="flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></div>
      <?php foreach ($items as $item) : ?>
        <div class="flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors <?php e($item->isOpen(), ' active-menu') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </div>
      <?php endforeach ?>
      <div class="flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors">
        <a href="<?= $pages->find('about')->url() ?>">About</a>
      </div>
      <form class="flex-shrink-0 hidden md:block md:mx-4 w-20<?php e($page->template() == "home", ' text-green') ?>" action="<?= page('search')->url() ?>">
        <input type="search" name="q" value="" placeholder="SEARCH" class="<?php e($page->template() == "home", ' placeholder-green') ?> uppercase placeholder-black orange-shadow bg-transparent focus:outline-none" onfocus="this.placeholder = ''" onblur="this.placeholder = 'SEARCH'">
      </form>
    </nav>
  </div>
<?php endif ?>