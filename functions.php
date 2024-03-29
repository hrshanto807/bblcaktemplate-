<?php


function bblack_template()
{
    load_theme_textdomain('bblack', get_template_directory() . '/lang');
    add_theme_support('title-tag');
    register_nav_menu('blbackmenu', __('Main Menu', 'bblack'));
    add_theme_support('custom-header');
    add_theme_support('custom-background', array(
        'default-image' => get_theme_file_uri('images/img04.jpg'),
    ));

    add_theme_support('post-thumbnails');
    add_image_size('bblock-post-thumbnails', 186, 186, true);

    // extra
    add_theme_support('widgets');
};

function bblack_amar_sob_scripts()
{
    // 
    // wp_register_style('bblacktemplate_stylesheet',get_theme_file_uri('/style.css'));
    // wp_enqueue_style('bblacktemplate_stylesheet');

    wp_enqueue_style('btblcak_google_fonts', 'http://fonts.googleapis.com/css?family=Nova+Mono');
    wp_enqueue_style('btblcak_stylesheet', get_theme_file_uri('/style.css'));

    // extra
    wp_enqueue_script('jquery');
    wp_enqueue_script('bblack', get_template_directory_uri() . '/custom.js');
}; ?>

<?php function custombblckmenu()
{ ?>
    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
<?php };


add_action('after_setup_theme', 'bblack_template');
add_action('wp_enqueue_scripts', 'bblack_amar_sob_scripts');


// sidebar reg

include_once('inc/widgets.php');

//  theme function

function bblack_customize_register($wp_customize)
{
    // header area function



    $wp_customize->add_section('bblack_header_logo', array(
        'title' => __('Header Area', 'themetheme'),
        'description' => 'If you upload header logo,You can upload your image',
    ));

    $wp_customize->add_setting('bblack_logo', array(
        'default' => get_theme_file_uri('/images/team..png')
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bblack_logo', array(
        'label' => 'Logo Upload',
        "setting" => 'bblack_logo',
        'section' => 'bblack_header_logo'
    )));


    // আমাদের মেনু সেটিং

    $wp_customize->add_section('bblcak_menu_option', array(
        'title' => __('Menu Position Set', 'themetheme'),
        'description' => 'If you want to changed menus possitions,then you can do it'
    ));

    $wp_customize->add_setting('bblack_menu_position', array(
        'default' => 'left_menu',
    ));


    $wp_customize->add_control('bblack_menu_position', array(
        'label' => 'Menu Postion',
        'descriptoin' => 'Do Menus position change from here',
        "section" => 'bblcak_menu_option',
        "setting" => 'bblack_menu_position',
        'type' => 'radio',
        "choices" => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));
};

add_action('customize_register', 'bblack_customize_register');

// custom fields create/ meta box

// function bblack_amar_custom_fields()
// {
//     add_meta_box(
//         'bblack_subtitle_metabox',
//         __('Black Subtitle', 'themetheme'),
//         'bblack_meta_box_fun',
//         'post',
//         'advanced',
//         'high'
//     );
// };

// add_action('add_meta_boxes', 'bblack_amar_custom_fields');

// function bblack_meta_box_fun($post)
// {
//     $value = get_post_meta(get_the_ID(),'bblack_our_Subtitle',true); ?>


    <!-- <label for="bblack_our_Subtitle">Subtitle:</label>
    <input type="text" name="bblack_our_Subtitle" id="bblack_our_Subtitle" placeholder="Inter your subttile" value="<?php //echo $value; ?>"> -->


<?php //};

// function bblack_amar_meta_save_post($post_id)
// {
//     update_post_meta($post_id, 'bblack_our_Subtitle', $_POST['bblack_our_Subtitle']);
// };
// add_action('save_post', 'bblack_amar_meta_save_post');

require_once dirname( __FILE__ ) . '/inc/cmb2/init.php';
// require_once dirname( __FILE__ ) . '/inc/cmb2/example-functions.php';

//require_once dirname( __FILE__ ) . "/inc/cmb2/fields.php";
?>