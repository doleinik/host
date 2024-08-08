<?php $option = get_field('page_content', 'information'); ?>
<header class="fixed top-0 w-full right-0 left-0 bg-black">
  <div class="container resp-[py/39/25] flex items-center justify-between resp-[gap/20] ">
    <a href="<?= home_url() ?>" class="tablet:flex-1">
      <?php renderAssetsSVG('logo') ?>
    </a>

    <div class="flex-2 hidden tablet:flex justify-center tabletMiddle:flex header-menu">
      <?php wp_nav_menu(array(
        'container' => 'nav',
        'theme_location' => 'header_menu',
      ));
      ?>
    </div>

    <div class="tablet:flex-1 flex items-center resp-[gap/24] justify-end">

      <div class="btn btn--accent !resp-[px/26]">
        Login for business
      </div>
    </div>
  </div>
</header>