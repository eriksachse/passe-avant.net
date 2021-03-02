<?php

// main menu items
$items = $pages->listed();



// only show the menu if items are available
if ($items->isNotEmpty()) :

?>
  <div class="fixed w-full z-20 top-0 text-23 md:text-17 ">
    <nav class="flex md:flex-row flex-col text-center justify-center uppercase font-Pbold m-2">
      <div class="hidden flex-shrink-0 md:hidden md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors" id="menu-closer">Close</div>
      <div class=" flex-shrink-0 block md:hidden md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors" id="menu-opener"><?= $site->title() ?></div>
      <div class="menu-item flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></div>
      <?php foreach ($items as $item) : ?>
        <?php if ($item->template() == 'features' or $item->template() == 'interviews' or $item->template() == 'reviews' or $item->template() == 'opinions') : ?>
          <div class="menu-item flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors <?php e($item->isOpen(), ' active-menu') ?>">
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          </div> <?php endif ?>

      <?php endforeach ?>
      <div class="menu-item flex-shrink-0 hidden md:block md:mx-4 <?php e($page->template() == "home", ' text-green') ?> hover:text-orange orange-shadow transition-colors">
        <a href="<?= $pages->find('about')->url() ?>">About</a>
      </div>
      <form class="menu-item flex-shrink-0 hidden md:block md:mx-4<?php e($page->template() == "home", ' text-green') ?>" action="<?= page('search')->url() ?>">
        <input type="search" name="q" value="" placeholder="SEARCH" class="w-32 md:w-28 text-center md:text-left <?php e($page->template() != "home", ' placeholder-black') ?> <?php e($page->template() == "home", ' placeholder-green') ?> uppercase orange-shadow bg-transparent focus:outline-none" onfocus="this.placeholder = ''" onblur="this.placeholder = 'SEARCH'">
      </form>
    </nav>
  </div>
<?php endif ?>
<div class="hidden fixed w-full h-full bg-menu inset-0 z-10" id="menu-bg"></div>

<script>
  var opener = document.getElementById('menu-opener')
  var closer = document.getElementById('menu-closer')
  var menuItems = document.getElementsByClassName('menu-item')
  var menuBg = document.getElementById('menu-bg')
  opener.addEventListener('click', function() {
    opener.classList.add('opacity-0')
    closer.classList.remove('hidden')
    menuBg.classList.remove('hidden')

    Array.prototype.forEach.call(menuItems, function(el) {
      el.classList.remove('hidden')
    });
  });

  closer.addEventListener('click', function() {
    opener.classList.remove('opacity-0')
    this.classList.add('hidden')
    menuBg.classList.add('hidden')
    Array.prototype.forEach.call(menuItems, function(el) {
      el.classList.add('hidden')
    })
  })
</script>