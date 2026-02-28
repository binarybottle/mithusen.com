<!-- Marquee element -->
<div class="absolute bottom-2 overflow-x-hidden font-comic w-full text-black">
    <div class="animate-marquee whitespace-nowrap w-fit">
        <?php
        if (have_rows('marquee', 'option')) :

            // Loop through rows.
            while (have_rows('marquee', 'option')) : the_row(); ?>

                <span class="px-2 text-xl lg:text-4xl"><?php the_sub_field('marqueetext'); ?></span>

        <?php endwhile;
        endif; ?>
    </div>
    <div class="absolute left-0 top-0 animate-marquee2 whitespace-nowrap w-fit">
        <?php
        if (have_rows('marquee', 'option')) :

            // Loop through rows.
            while (have_rows('marquee', 'option')) : the_row(); ?>

                <span class="px-2 text-xl lg:text-4xl"><?php the_sub_field('marqueetext'); ?></span>

        <?php endwhile;
        endif; ?>
    </div>
</div>