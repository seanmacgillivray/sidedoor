<?php
add_action('wpmu_new_blog', 'wpmudev_new_blog_role', 300, 2);

function wpmudev_new_blog_role($blog_id, $user_id)
{
    if ($_GET['type'] == 'artist') {
        $default_role = 'artist';
}
if ($_GET['type'] == 'venue') {
    $default_role = 'venue';
} else { return false;}


    switch_to_blog($blog_id);
    $user = new WP_User($user_id);
    $user->set_role($default_role);
    restore_current_blog();
}