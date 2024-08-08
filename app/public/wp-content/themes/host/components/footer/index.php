<?php $option = get_field('page_content', 'information'); ?>
<footer class="resp-[py/42] container ">
  <div class="ml-auto  resp-[width/48] resp-[height/48] resp-[mb/24] rounded-full border-[1px] border-gray flex justify-center items-center">
    <?php renderAssetsSVG('arrow-bottom') ?>
  </div>
  <div class="flex flex-col tablet:flex-row justify-between items-center border-t-[1px] border-gray resp-[pt/24]">
    <div class="flex flex-1 resp-[gap/24] text-white">
      <a href="" class="flex items-center resp-[gap/10]">
        Instagram
        <span>
          <?php renderAssetsSVG('arrow') ?>
        </span>
      </a>
      <a href="" class="flex items-center resp-[gap/10]">
        Facebook
        <span>
          <?php renderAssetsSVG('arrow') ?>
        </span></a>
    </div>

    <div class="flex-1 flex justify-center">
      <?php renderAssetsSVG('logo') ?>
    </div>


    <div class="flex-1 text-white text-right">
      © 2024 Host n Post Company.
    </div>
  </div>
</footer>