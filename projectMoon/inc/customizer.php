<?php

function projectMoon_customizer($wp_customize) {

    // Copyright info
    $wp_customize-> add_section('sec_copyright', array(
        'title' => 'Copyright',
        'description' => 'Please, type here your copyright'
    ));

    $wp_customize-> add_setting('set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright 2018 - All Rights Reserved',
        'sanitize_callback' => 'esc_attr'
    ));

    $wp_customize-> add_control('ctrl_copyright', array(
        'label' => 'Copyright Information',
        'description' => 'Please, type here your copyright',
        'section' => 'sec_copyright',
        'settings' => 'set_copyright',
        'type' => 'text'
        
    ));
}

add_action('customize_register', 'projectMoon_customizer');