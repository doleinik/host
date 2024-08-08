<section class="container flex justify-between flex-col tabletMax:flex-row resp-[gap/24] resp-[pt/80] resp-[pb/125]">
    <div class="resp-[w-max/420]">
        <h2 class="title-2 text-gradient">
            Business Reviews
        </h2>

        <div>

        </div>
    </div>

    <div class="flex flex-wrap resp-[gap/24] resp-[w-max/665] resp-[pt/42] resp-[mr/35]">
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="resp-[px/24] resp-[py/24] border-[1px] border-gray rounded-b-[24px] border-t-[0] flex-1 max-w-[49%]  min-w-[40%] even:resp-[translate-y/45]">
                <p class="text-white resp-[font/14] resp-[mb/24]">
                    “Joining Host n Post brought our bar new customers and increased visibility in the market. The user-friendly interface and powerful analytics tools have helped us manage our events efficiently and attract more visitors. Very happy with the results!" - Happy Hours Bar
                </p>

                <div class="flex items-center resp-[gap/16]">
                    <div class="w-[36px] h-[36px] rounded-full bg-white">

                    </div>
                    <div class="text-white font-arial-regular resp-[font/14]">
                        Wade Warren
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>