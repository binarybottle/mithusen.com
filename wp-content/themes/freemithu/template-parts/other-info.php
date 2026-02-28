    <!-- Modal other info element -->
    <div id="modal-info" class="micromodal" aria-hidden="true">
        <div class="fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center bg-[#dc7485]" tabindex="-1" data-micromodal-close>
            <div tabindex="-1" class="max-h-[80vh] overflow-y-auto w-full mx-2 md:w-10/12 lg:w-8/12 bg-[#fab8c8] text-lg scrollbar" role="dialog" aria-modal="true">
                <div class="p-2 lg:p-8">
                <?php
                    $images = get_field('info-gallery', 'option');
                    if ($images) : ?>
                        <div class="swiper-info relative overflow-hidden">
                            <div class="swiper-wrapper">
                                <?php foreach ($images as $image) : ?>
                                    <div class="swiper-slide w-full aspect-square md:aspect-video flex-none bg-black">
                                        <img class="h-full w-auto mx-auto object-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p class="px-2 bg-white text-black"><?php echo esc_attr($image['caption']) ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination px-2 text-black w-fit left-auto right-0 bottom-0"></div>
                        </div>
                    <?php endif; ?>
                    <div class="prose prose-lg my-8 prose-p:text-black max-w-none">
                        <?php the_field('info', 'option') ?>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-black text-white w-fit mx-auto px-8 py-2 text-xl" data-micromodal-close>Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>