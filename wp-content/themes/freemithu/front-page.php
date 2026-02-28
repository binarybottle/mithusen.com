<?php

/**
 * The Home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<?php
if (!empty($_POST)) {

    if (isset($_POST['gotcha'])  && wp_verify_nonce($_POST['gotcha'], 'freemithu')) {
 
        $name = sanitize_text_field($_POST['_name']);
        $comment = sanitize_text_field($_POST['_comment']);

        $commentdata = array(
            'comment_post_ID'      => 66,             // To which post the comment will show up.
            //'comment_approved'     => 1,
            'comment_author'       => $name,     // Fixed value - can be dynamic.
            'comment_content'      => $comment, // Fixed value - can be dynamic.
            'comment_type'         => '',                    // Empty for regular comments, 'pingback' for pingbacks, 'trackback' for trackbacks.
            'comment_parent'       => 0,                     // 0 if it's not a reply to another comment; if it's a reply, mention the parent comment ID here.
        );

        // Insert new comment and get the comment ID.
        $comment_id = wp_new_comment($commentdata);
        if (is_wp_error($comment_id)) {
            header('Content-Type: text/plain');
            echo "error";
            exit();
        } elseif ($comment_id) {
            header('Content-Type: text/plain');
			echo "<div class=\"odd:bg-yellow-100 even:bg-lime-100 mb-1 w-fit min-w-[8rem] max-w-[28rem] odd:self-start even:self-end odd:text-left even:text-right p-2\">
                          <span class=\"leading-none\">" . $comment . "</span><br>
                          <span class=\"text-[#df0025] text-sm\" >" . $name . "</span>
                          </div>";
            exit();
        }
    } else {
        $fm_name = sanitize_text_field($_POST['freemithu_name']);
        $email = urlencode(sanitize_email($_POST['freemithu_email']));
        $url = home_url();        
        wp_safe_redirect(
            add_query_arg( array(
                '_name' => $fm_name,
                '_email' => $email,
            ), 
        $url . '/contract-form'));
        exit();
    }
}
?>
<?php get_header();
?>
<style>
    .micromodal {
        display: none;
    }

    .micromodal.is-open {
        display: block;
    }
</style>

<body class="font-comic relative overflow-y-auto overflow-x-hidden lg:overflow-y-hidden bg-cover bg-center bg-[url('assets/freemithu_background.jpg')] bg-fixed">
    <?php wp_body_open() ?>
    <div id="main" class="flex flex-col items-center min-h-[100svh]">

        <!-- Back button -->
        <a class="absolute top-7 lg:top-16 left-4 lg:left-8 2xl:left-16" href="https://mithusen.in"><img class="w-10 h-10 md:w-16 md:h-16" src="<?php echo get_template_directory_uri(); ?>/assets/icons8-spiral-64.png" alt="Back"></a>

        <!-- Page title -->
        <h1 data-micromodal-trigger="modal-about" class="text-6xl md:text-7xl uppercase font-bold text-[#df0025]  mt-28 2xl:mt-18 cursor-pointer drop-shadow-sharp">Freemithu</h1>

        <!-- Side menu -->

        <div class="absolute left-1/2 -translate-x-1/2 lg:left-8 lg:translate-x-0 top-64 md:top-72 translate-y-0 lg:top-1/2 lg:-translate-y-1/2">
            <div class="flex flex-row lg:flex-col gap-0">
                <button class="relative w-28 sm:w-28 md:w-36 xl:w-40 2xl:w-48 h-auto" data-micromodal-trigger="modal-gallery2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/green-39.png" />
                    <span class="absolute left-1/2 -translate-x-1/2 top-[32%] text-xs font-bold md:font-normal md:text-base w-fit whitespace-nowrap">story so far</span>
                </button>
                <button class="relative w-28 sm:w-28 md:w-36 xl:w-40 2xl:w-48 h-auto" data-micromodal-trigger="modal-gallery1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/blue-15.png" />
                    <span class="absolute left-1/2 -translate-x-1/2 top-[20%] text-xs font-bold md:font-normal md:text-base w-fit whitespace-nowrap">gifts/<br>return gifts</span>
                </button>
                <button class="relative w-28 sm:w-28 md:w-36 xl:w-40 2xl:w-48 h-auto" data-micromodal-trigger="modal-gallery3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/red-36.png" />
                    <span class="absolute left-1/2 -translate-x-1/2 top-[25%] text-xs font-bold md:font-normal md:text-base w-fit whitespace-nowrap">Coactive<br>contract</span>
                </button>
            </div>
        </div>

        <!-- Black speech bubble -->
        <button class="absolute top-6 lg:top-16 right-0 lg:right-4 w-24 sm:w-24 md:w-36 lg:w-48 h-auto" data-micromodal-trigger="modal-comments">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/black-48.png" />
            <span class="absolute left-1/2 -translate-x-1/2 top-[32%] text-base text-white ">?</span>
        </button>

        <?php get_template_part('template-parts/timer'); ?>

        <div class="flex flex-col md:flex-row w-10/12 sm:w-7/12 mt-36 md:mt-48 lg:mt-16 xl:mt-8 2xl:mt-24">
            <div class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-[#df0025] py-4">
                <p class="whitespace-nowrap">
                    The ethics of reciprocity<br> and <br>the performativity of friendship
                </p>
            </div>

            <div class="self-end">
                <img class="w-24 sm:w-48 md:w-full" src="<?php echo get_template_directory_uri(); ?>/assets/mouth_cropped.png">
            </div>
        </div>

        <?php get_template_part('template-parts/marquee'); ?>

        <!-- Enter button element -->
        <div class="h-16 w-96 lg:h-16 relative">
            <button id="enter" data-micromodal-trigger="modal-form" class="w-24 h-24 sm:w-32 sm:h-32 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all">
                <img class="animate-myglow" src="<?php echo get_template_directory_uri(); ?>/assets/enter_button.png">
            </button>
        </div>


    </div>

    <?php get_template_part('template-parts/form'); ?>


    <!-- Modal about text element -->
    <div id="modal-about" class="micromodal" aria-hidden="true">
        <div class="fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center bg-[#dc7485]" tabindex="-1" data-micromodal-close>
            <div class="max-h-[80vh] overflow-y-auto w-full mx-2 lg:w-fit bg-[#fab8c8]" role="dialog" aria-modal="true">
                <div class="p-2 lg:p-8 mx-auto">
                    <div class="prose prose-lg lg:prose-xl prose-p:text-black max-w-none prose-p:my-0 mb-6 w-fit mx-auto">
                        <?php the_field('abouttext', 'option'); ?>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-black text-white w-fit mx-auto px-8 py-2 text-xl" data-micromodal-close>Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/gallery', null, array('id' => 'modal-gallery1')); ?>
    <?php get_template_part('template-parts/gallery', null, array('id' => 'modal-gallery2')); ?>
    <?php get_template_part('template-parts/gallery', null, array('id' => 'modal-gallery3')); ?>


    <?php get_template_part('template-parts/discussion'); ?>

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
        window.onload = function() {
            countUpFromTime("April 2, 2007 00:00:00", 'countup1');
        };

        MicroModal.init({
            disableFocus: true,
            onShow: modal => {
                sb.scrollTop = sb.scrollHeight;
            }
        });

        let count = 5;
        const enter = document.getElementById("enter")

        enter.addEventListener('mouseover', function() {

            if (count > 0) {
                enter.style.left = `${Math.ceil(Math.random() * 90)}%`;
                enter.style.top = `${Math.ceil(Math.random() * 90)}%`;
                count--;
            }
        });

        function countUpFromTime(countFrom, id) {
            countFrom = new Date(countFrom).getTime();
            var now = new Date(),
                countFrom = new Date(countFrom),
                timeDifference = (now - countFrom);

            var secondsInADay = 60 * 60 * 1000 * 24,
                secondsInAHour = 60 * 60 * 1000;

            days = Math.floor(timeDifference / (secondsInADay) * 1);
            days = days.toString().padStart(3, "0")
            years = Math.floor(days / 365);
            if (years > 1) {
                days = days - (years * 365)
            }
            hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
            hours = hours.toString().padStart(2, "0")

            mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
            mins = mins.toString().padStart(2, "0")

            secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);
            secs = secs.toString().padStart(2, "0")

            var idEl = document.getElementById(id);
            idEl.getElementsByClassName('years')[0].innerHTML = years;
            idEl.getElementsByClassName('days')[0].innerHTML = days;
            idEl.getElementsByClassName('hours')[0].innerHTML = hours;
            idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
            idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

            clearTimeout(countUpFromTime.interval);
            countUpFromTime.interval = setTimeout(function() {
                countUpFromTime(countFrom, id);
            }, 1000);
        }



  
		const myswiper = new Swiper('.swiper-gallery', {
            // Optional parameters
            effect: "slide",
            slidesPerView: 'auto',
            spaceBetween: 10,

            speed: 800,
            grabCursor: true,
            zoom: {
                maxRatio: 1.8,
                toggle : false
            },
            navigation: {
                prevEl: "[data-prev]",
                nextEl: "[data-next]"
            }
        });

        myswiper.forEach((swiper) => {
            swiper.on('click',(s,e)=> {
                s.zoom.toggle(e)
            })
        })

        /*const swiperinfo = new Swiper('.swiper-info', {
            // Optional parameters
            effect: "slide",
            slidesPerView: '1',
            spaceBetween: 10,
            //freeMode: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            speed: 800,
            //loop: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
        });*/

        const comment_form = document.getElementById("comments");
        const sb = document.getElementById("scroll_box")
        sb.scrollTop = sb.scrollHeight;

        comment_form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(comment_form);

            comment_form.reset();
            console.log(formData.get("_name"))
            console.log(formData.get("_comment"))
            fetch("/", {
                method: "POST", // *GET, POST, PUT, DELETE, etc.
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    '_name': formData.get("_name"),
                    '_comment': formData.get("_comment"),
                    'gotcha': formData.get('gotcha')
                })
            }).then(async response => {
                if (response.ok) {
                    console.log("Form submitted")
                    //document.getElementById("comment_box").append(await response.text())
                    const cb = document.getElementById("comment_box")
                    cb.insertAdjacentHTML("beforeend", await response.text())
                    sb.scrollTop = sb.scrollHeight;

                } else {
                    document.getElementById("error_box").innerText = "Error adding comment"
                }
            })
            contract_form.addEventListener("submit", (e) => {
                console.log("form entered")
            })
        });
    </script>
    <?php get_footer();
    ?>
</body>