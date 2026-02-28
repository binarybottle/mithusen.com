<?php
if (!empty($_POST)) {
    if (isset($_POST['gotcha2'])  && wp_verify_nonce($_POST['gotcha2'], 'test-freemithu2')) {
        $name = sanitize_text_field($_POST['_name']);
        $gender = sanitize_text_field($_POST['gender']);
        $email = sanitize_email($_POST['_email']);
        $age = sanitize_text_field($_POST['age']);
        $occ = sanitize_text_field($_POST['occ']);
        $sex = sanitize_text_field($_POST['sexuality']);
        $rs = sanitize_text_field($_POST['rs']);
        $rel = sanitize_text_field($_POST['rel']);
        $ctry = sanitize_text_field($_POST['ctry']);
        $date = sanitize_text_field($_POST['date']);
        $desire = sanitize_text_field($_POST['desire']);
	$ret = wordwrap(sanitize_textarea_field($_POST['ret'] ?? ''));
	$agreement = wordwrap(sanitize_textarea_field($_POST['agreement'] ?? ''));
		$success = wp_mail(
			"sen.mithu@gmail.com",
            "Someone new has registered on freemithu",
            "Name : " . $name  .
                "\nEmail : " . $email .
                "\nAge : " . $age .
                "\nOccupation : " . $occ .
                "\nGender : " . $gender .
                "\nSexuality : " . $sex .
                "\nRelationship status : " . $rs .
                "\nReligion/Idealogy: " . $rel .
                "\nCountry: " . $ctry .
                "\nDate: " . $date .
                "\nWhat do you desire to have? : " . $desire .
				"\n\nIs a gift always to be returned? :\n" . $ret .
                "\n\nCan a gift be subject to a contractual agreement? :\n" . $agreement,
			array('Bcc: himanshu.ernde@gmail.com')
			
        );
        $url = home_url();
        $query_arg = $success ? "true" : "false";
        wp_safe_redirect(add_query_arg("success", $query_arg, $url . '/submitted'));
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<?php get_header();
?>

<body class="flex flex-col items-center justify-center min-h-[100svh] bg-cover bg-center bg-[url('assets/freemithu_background.jpg')] font-comic">
    <?php wp_body_open(); ?>
    <div class="w-full px-2 md:w-1/2">
        <form class="flex flex-col gap-2" method="POST" action="/contract-form">
            <?php wp_nonce_field('test-freemithu2', 'gotcha2'); ?>
            <div class="flex flex-row">
                <label class="w-1/2">Name :</label>
                <input class="w-1/2" type="text" required name="_name" maxlength="20" value="<?php echo isset($_GET['_name']) ? esc_attr($_GET['_name']) : ''; ?>">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Email :</label>
                <input class="w-1/2" type="email" required name="_email" maxlength="30" value="<?php echo isset($_GET['_email']) ? esc_attr(urldecode($_GET['_email'])) : ''; ?>">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Age :</label>
                <input class="w-1/2" type="number" name="age">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Occupation :</label>
                <input class="w-1/2" type="text" maxlength="20" name="occ">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Gender :</label>
                <select class="w-1/2 bg-white" name="gender">
                    <option value="">--Select--</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Gender non-conforming">Gender non-conforming</option>
                    <option value="none">None</option>
                </select>

            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Sexuality :</label>
                <select class="w-1/2 bg-white" name="sexuality">
                    <option value="">--Select--</option>
                    <option value="Heterosexual">Heterosexual</option>
                    <option value="Homosexual">Homosexual</option>
                    <option value="Pansexual">Pansexual</option>
                    <option value="None">None</option>
                </select>
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Relationship status :</label>
                <select class="w-1/2 bg-white" name="rs">
                    <option value="">--Select--</option>
                    <option value="Single">Single</option>
                    <option value="Plural">Plural</option>
                    <option value="Married">Married</option>
                    <option value="Complicated">Complicated</option>
                </select>
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Religion/Idealogy :</label>
                <input class="w-1/2" type="text" maxlength="20" name="rel">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Country :</label>
                <input class="w-1/2" type="text" maxlength="20" name="ctry">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Date :</label>
                <input class="w-1/2" type="text" maxlength="20" name="date">
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">What do you desire to have? :</label>
                <select class="w-1/2 bg-white" name="desire">
                    <option value="">--Select--</option>
                    <option value="Drawing on paper">Drawing on paper</option>
                    <option value="Hair/teeth sculpture">Hair/teeth sculpture</option>
                    <option value="Mixed media work">Mixed media work</option>
                    <option value="Tattoo on your body">Tattoo on your body</option>
                    <option value="Unpoem">Unpoem</option>
                    <option value="A letter with love">A letter with love</option>
                    <option value="Dinner with me">Dinner with me</option>
                    <option value="none of the above">none of the above</option>
                </select>
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">Is a gift always to be returned?</label>
				<textarea class="w-1/2 resize-none" maxlength="500" rows="4" name="ret"></textarea>
            </div>
            <div class="flex flex-row">
                <label class="w-1/2">
                    Can a gift be subject to a contractual agreement?
                </label>
                <textarea class="w-1/2 resize-none" rows="4" maxlength="500" name="agreement"></textarea>
            </div>
            <button type="submit" class="bg-black self-center text-white px-4 py-2 w-fit">Submit</button>
        </form>
    </div>
    <?php wp_footer(); ?>
</body>
</html>