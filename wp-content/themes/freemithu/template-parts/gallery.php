<!-- Modal gallery element -->
<?php
$gallery_id = isset($args['id']) ? $args['id'] : '';
if ($gallery_id === "modal-gallery1") {
    $images = get_field('artwork', 'option');
} else if ($gallery_id === "modal-gallery2") {
    $images = get_field('info-gallery', 'option');
} else {
    $images = get_field('more-gallery', 'option');
}

if ($images) : ?>
    <div id="<?php echo esc_attr($gallery_id); ?>" class="micromodal" aria-hidden="true">
        <div class="fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center bg-[#dc7485]" tabindex="-1">

            <div class="h-1/2 md:h-1/2 w-full" role="dialog" aria-modal="true">

                <div class="swiper-gallery h-full">
                    <div class="swiper-wrapper">
                        <?php foreach ($images as $image) : ?>
                            <div class="swiper-slide h-auto sm:h-full w-full sm:w-auto">
                                <div class="swiper-zoom-container">
                                    <img class="w-full sm:h-full sm:w-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button data-prev class="top-1/2 z-20 left-2 absolute text-[#df0025] px-2 text-4xl drop-shadow-md"><</button>
                    <button data-next class="top-1/2 z-20 right-2 absolute text-[#df0025] px-2 text-4xl drop-shadow-md">></button>
                </div>
                <button class="top-8 right-8 absolute text-[#df0025] text-3xl" data-micromodal-close>X</button>
                <?php if ($gallery_id === "modal-gallery3"): ?>
                    <button data-micromodal-trigger="modal-form" data-micromodal-close class="w-24 h-24 sm:w-32 sm:h-32 z-20 absolute bottom-4 md:bottom-16 left-1/2 -translate-x-1/2">
                        <img class="animate-myglow" src="<?php echo get_template_directory_uri(); ?>/assets/enter_button.png">
                    </button>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
