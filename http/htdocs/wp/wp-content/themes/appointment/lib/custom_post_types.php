<?php

// create Offers

add_action('init', 'register_offers');
function register_offers() {
    $labels = array(
        'name' => __('Offers'),
        'menu_name' => __('Offers'),
        'singular_name' => __('Offer'),
        'add_new_item' => __('Add New Offer'),
        'edit_item' => __('Edit Offer'),
        'new_item' => __('New Offer'),
        'view_item' => __('View Offer'),
        'search_items' => __('Search Offers'),
        'not_found' => __('No Offers found'),
        'not_found_in_trash' => __('No Offers found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','revisions', 'author'),
        'rewrite' => array( 'slug' => 'offers', 'with_front' => false ),
        'capability_type' => 'post',
        'menu_position' => 20, // after Pages
        'menu_icon' => 'dashicons-id', // http://calebserna.com/dashicons-cheatsheet/
        'hierarchical' => false,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'can_export' => true,
    );
    register_post_type( 'offers' , $args );
}



// create Artists and its taxonomy (genre)

add_action( 'init', 'create_genre', 0 );
function create_genre() {
    $labels = array(
        'name' => _x( 'Genres', 'taxonomy general name' ),
        'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
        'search_items' => __( 'Search Genres' ),
        'all_items' => __( 'All Genres' ),
        'parent_item' => __( 'Parent Genre' ),
        'parent_item_colon' => __( 'Genre:' ),
        'edit_item' => __( 'Edit Genre' ),
        'update_item' => __( 'Update Genre' ),
        'add_new_item' => __( 'Add New Genre' ),
        'new_item_name' => __( 'New Genre Name' ),
        'menu_name' => __( 'Genres' ),
    );
    register_taxonomy('genre','artists', array(
        'public' => true,
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => false
    ));
}


add_action('init', 'register_artists');
function register_artists() {
    $labels = array(
        'name' => __('Artists'),
        'menu_name' => __('Artists'),
        'singular_name' => __('Artist'),
        'add_new_item' => __('Add New Artist'),
        'edit_item' => __('Edit Artist'),
        'new_item' => __('New Artist'),
        'view_item' => __('View Artist'),
        'search_items' => __('Search Artists'),
        'not_found' => __('No Artists found'),
        'not_found_in_trash' => __('No Artists found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','revisions', 'author'),
        'rewrite' => array( 'slug' => 'artists', 'with_front' => false ),
        'capability_type' => 'post',
        'menu_position' => 20, // after Pages
        'menu_icon' => 'dashicons-id', // http://calebserna.com/dashicons-cheatsheet/
        'hierarchical' => false,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'can_export' => true,
    );
    register_post_type( 'artists' , $args );
}

//add artist ACF fields
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_artist-fields',
        'title' => 'Artist Fields',
        'fields' => array (
            array (
                'key' => 'field_58eabc5cc0113',
                'label' => 'Music',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eabc8ac0114',
                'label' => 'Soundcloud Profile',
                'name' => 'soundcloud_profile',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Soundcloud profile. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabcbfc0115',
                'label' => 'Bandcamp Profile',
                'name' => 'bandcamp_profile',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Bandcamp profile. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabcd7c0116',
                'label' => 'Spotify Profile',
                'name' => 'spotify_profile',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Spotify profile. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabcebc0117',
                'label' => 'Youtube Channel',
                'name' => 'youtube_channel',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Youtube profile or channel. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabb3bc010f',
                'label' => 'Basic Info',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eabdc9c011c',
                'label' => 'Genre',
                'name' => 'genre',
                'type' => 'taxonomy',
                'instructions' => 'The genre that best describes your music.',
                'required' => 1,
                'taxonomy' => 'genre',
                'field_type' => 'checkbox',
                'allow_null' => 0,
                'load_save_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ),
            array (
                'key' => 'field_58eabbb5c0110',
                'label' => 'Number of Players',
                'name' => 'number_of_players',
                'type' => 'text',
                'instructions' => 'The number of players for the artist/group. Can be a range if you can flex the size of the show, i.e. "3-5 players"',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabc04c0111',
                'label' => 'Technical Requirements',
                'name' => 'technical_requirements',
                'type' => 'textarea',
                'instructions' => 'What you need to put on your show that you will not be bringing with you. PA requirements, lighting requirements etc.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_58eabc3cc0112',
                'label' => 'Hospitality Requirements',
                'name' => 'hospitality_requirements',
                'type' => 'textarea',
                'instructions' => 'Please paste in your hospitality rider here. ',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_58eabd51c0118',
                'label' => 'Links',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eabd5cc0119',
                'label' => 'Facebook Page',
                'name' => 'facebook',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Facebook Page. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabd72c011a',
                'label' => 'Twitter Page',
                'name' => 'twitter',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Twitter page. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eabd86c011b',
                'label' => 'Instagram Page',
                'name' => 'instagram',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your Instagram page. Do not include "http://" when completing this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artists',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}





//create venues

add_action('init', 'register_venues');
function register_venues() {
    $labels = array(
        'name' => __('Venues'),
        'menu_name' => __('Venues'),
        'singular_name' => __('Venue'),
        'add_new_item' => __('Add New Venue'),
        'edit_item' => __('Edit Venue'),
        'new_item' => __('New Venue'),
        'view_item' => __('View Venue'),
        'search_items' => __('Search Venues'),
        'not_found' => __('No Venues found'),
        'not_found_in_trash' => __('No Venues found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','revisions', 'author'),
        'rewrite' => array( 'slug' => 'venues', 'with_front' => false ),
        'capability_type' => 'post',
        'menu_position' => 20, // after Pages
        'menu_icon' => 'dashicons-id', // http://calebserna.com/dashicons-cheatsheet/
        'hierarchical' => false,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'can_export' => true,
    );
    register_post_type( 'venues' , $args );
}


//add venues ACF fields
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_venue-fields',
        'title' => 'Venue Fields',
        'fields' => array (
            array (
                'key' => 'field_58eab874c7a3a',
                'label' => 'Logistics',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eab5826bf7b',
                'label' => 'Capacity',
                'name' => 'capacity',
                'type' => 'number',
                'instructions' => 'The maximum number of people your venue can safely accommodate',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_58eab5af6bf7c',
                'label' => 'Location',
                'name' => 'location',
                'type' => 'google_map',
                'instructions' => 'The location of your venue.',
                'required' => 1,
                'center_lat' => '',
                'center_lng' => '',
                'zoom' => '',
                'height' => '',
            ),
            array (
                'key' => 'field_58eab5d96bf7d',
                'label' => 'Number of Parking Spaces',
                'name' => 'parking',
                'type' => 'number',
                'instructions' => 'The number of vehicles you are able to provide parking for. ',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_58eab60c6bf7e',
                'label' => 'Wheelchair Accessible',
                'name' => 'wheelchair_accessible',
                'type' => 'select',
                'instructions' => 'Are wheelchair users able to access your venue - including at least one of its washrooms - unassisted?',
                'required' => 1,
                'choices' => array (
                    'yes' => 'Yes',
                    'no' => 'No',
                ),
                'default_value' => 'no',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_58eab7b46bf84',
                'label' => 'PA System',
                'name' => 'pa_system',
                'type' => 'textarea',
                'instructions' => 'Describe what PA/sound equipment is available at your venue, if any. Enter "none" if no equipment is available.	',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_58eab8b9c7a3c',
                'label' => 'Photo',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eab6576bf7f',
                'label' => 'Photo',
                'name' => 'photo',
                'type' => 'image',
                'instructions' => 'A photo of your venue. ',
                'save_format' => 'object',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array (
                'key' => 'field_58eab89ec7a3b',
                'label' => 'Links',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58eab68f6bf80',
                'label' => 'Website',
                'name' => 'website',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your venue\'s website. Do not include "http://" when you fill out this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eab7056bf81',
                'label' => 'Facebook Page',
                'name' => 'facebook_page',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your venue\'s facebook page. Do not include "http://" when you fill out this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http;//',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eab74a6bf82',
                'label' => 'Twitter Page',
                'name' => 'twitter_page',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your venue\'s Twitter page. Do not include "http://" when you fill out this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http;//',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58eab76b6bf83',
                'label' => 'Instagram Page',
                'name' => 'instagram_page',
                'type' => 'text',
                'instructions' => 'The fully-qualified URL of your venue\'s Instagram page. Do not include "http://" when you fill out this field. ',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'venues',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}