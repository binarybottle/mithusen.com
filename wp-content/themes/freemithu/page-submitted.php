<?php

/**
 * Submitted page template

 */
?>

<!DOCTYPE html>
<html>
<?php get_header();
?>

<body class="flex flex-col items-center justify-center min-h-screen bg-cover bg-center bg-[url('assets/bg.png')] font-comic">
    <?php wp_body_open() ?>
    <div class="bg-black text-white text-center text-3xl p-8 border-4 border-white">

    <div class="mb-4">
        <?php

        if (isset($_GET['success']) && $_GET['success']=="true") {
            $error = sanitize_title($_GET['success']);
            echo "<div>You will soon receive a personal email*</div>
            <div class=\"text-base\">*Hypothetical conditions apply</div>";
        } else {
            echo "Oops! Something went wrong";
        }
        ?>
    </div>
    <p>Click <a class="underline" href="/">here</a> to go back to the home page</p>
    </div>

    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>

    <?php if (isset($_GET['success']) && $_GET['success']=="true") { ?>
        <script>
            confetti({
                particleCount: 150,
                spread: 180
            });
        </script>
    <?php } ?>
</body>


</html>