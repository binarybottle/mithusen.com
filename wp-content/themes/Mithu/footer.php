<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.234.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/custom.12.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/venobox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
<script>
jQuery(document).ready(function() {
	jQuery('.toggle-add>a').attr('data-toggle','dropdown');
    
});
</script>



<?php wp_footer(); ?>

</body>
</html>
