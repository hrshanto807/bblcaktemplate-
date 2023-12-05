<?php

function bblack_cmb2_fileds()
{
    $amar_fields = new_cmb2_box(array(
        'id' => 'jekononame',
        'title' => __('our Post Extra Information', 'themetheme'),
        'object_types'  => array('post'),
        //'context' => 'advanced',
        //'priority' => 'high'

    ));

    $amar_fields->add_field(array(
        'id' => 'amar_subtitle',
        'name' => __('OUR SUBTITLE', 'themetheme'),
        'type' => 'text',
        'repeatable' => true
    ));
    $amar_fields->add_field(array(
        'id' => 'amar_email',
        'name' => __('OUR EMAIL', 'themetheme'),
        'type' => 'text_email',
    ));

    //  extra class

};

add_action('cmb2_admin_init', 'bblack_cmb2_fileds');
