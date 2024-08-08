<section class="container resp-[pt/140] resp-[pb/80]">
    <h2 class="title-2 resp-[mb/93] text-gradient">
        Pricing
    </h2>

    <div class="flex resp-[gap/24] flex-col tablet:flex-row flex-wrap tabletMax:flex-nowrap">
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="resp-[px/24] resp-[py/24] tabletMax:resp-[w-min/200]  tabletMax:resp-[w-max/292] border-[1px] border-white rounded-[24px]  tablet:w-[calc(50%_-_12px)] tabletMax:w-auto">
                <div class="resp-[svg-width/16] resp-[svg-height/16] rounded-full resp-[mb/13]">
                    <?php renderAssetsSVG('dot') ?>
                </div>

                <h4 class="title-4 resp-[mb/36] uppercase">
                    Free
                </h4>

                <div class="border-b-[1px] border-gray resp-[pb/14] resp-[mb/12]">
                    <span class="resp-[font/48] text-white font-arial-regular">$ 0.00</span>
                    <span class="resp-[font/16] text-gray">/monthly</span>
                </div>

                <div class="text-white resp-[mb/48]  ">
                    <div class="resp-[mb/6]">
                        What`s included:
                    </div>

                    <ul class="pricing-list resp-[pl/18]">
                        <li>
                            Edit business details
                        </li>
                        <li>
                            Add up to 3 active events
                        </li>
                        <li>
                            In-app business login with 3 highlight stories per night
                        </li>
                    </ul>
                </div>

                <a href="" class="btn !w-full text-center">Get free</a>
            </div>
        <?php } ?>
    </div>
</section>