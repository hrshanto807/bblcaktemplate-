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

    $amar_fields->add_field(array(
        'name' => __('Test Text Small', 'themetheme'),       
        'id'   => 'bblack_textsmall',
        'type' => 'text_small',
    ));
    $amar_fields->add_field(array(
        'name' => __('Test Text Medium', 'themetheme'),
       
        'id'   => 'bblack_textmedium',
        'type' => 'text_medium',
    ));
    $amar_fields->add_field(array(
        'name' => __('Website URL', 'themetheme'),
       
        'id'   => 'bblack_url',
        'type' => 'text_url',
    ));
    $amar_fields->add_field( array(
		'name' => __( 'Test Time', 'themetheme' ),
		
		'id'   => 'bblack_time',
		'type' => 'text_time',
		// 'time_format' => 'H:i', // Set to 24hr format
	) );
    $amar_fields->add_field( array(
		'name' => __( 'Test Date Picker', 'themetheme' ),		
		'id'   => 'bblack_textdate',
		'type' => 'text_date',
		 'date_format' => 'Y-m-d',
	) );
    $amar_fields->add_field( array(
		'name' => __( 'Test Money', 'themetheme' ),
		
		'id'   => 'bblack_textmoney',
		'type' => 'text_money',
		// 'before_field' => '',  
		//  'repeatable' => true,
	) );
    $amar_fields->add_field( array(
		'name' => __( 'Test Text Area', 'themetheme' ),		
		'id'   => 'bblack_textarea',
		'type' => 'textarea',
	) );
    
};

add_action('cmb2_admin_init', 'bblack_cmb2_fileds');
