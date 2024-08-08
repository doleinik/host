<section class="resp-[pt/170/40] resp-[pb/80/40]">
    <div class="container">
        <div class="flex resp-[mb/15]">
            <h2 class="title-2 text-gradient resp-[mb/60] resp-[w-max/590]">
                Why Invest in a Promoter Title
                on Host n Post?
            </h2>

        </div>

        <div class="flex flex-wrap resp-[gap/24]">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="tablet:flex-1 w-full tablet:resp-[w-max/397] resp-[w-min/397/250/200] resp-[px/32] resp-[py/32] gradient-border-hover">
                    <div class="flex justify-between resp-[mb/10]">
                        <div class="text-white font-arial-regular">
                            0<?= $i + 1 ?>
                        </div>

                        <div class="resp-[svg-width/16] resp-[svg-height/16] rounded-full resp-[mb/13]">
                            <?php renderAssetsSVG('dot') ?>
                        </div>
                    </div>

                    <h4 class="title-4 resp-[mb/65] uppercase  title-gradient-hover">
                        Expand Reach
                    </h4>

                    <p class="text-white">
                        They share engaging stories about your events.
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>