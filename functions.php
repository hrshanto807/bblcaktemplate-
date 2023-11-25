<?php


function bblack_template(){
add_theme_support('title-tag');
register_nav_menu('blbackmenu','Main Menu');
add_theme_support('custom-header');
add_theme_support('custom-background',array(
    'default-image' => get_theme_file_uri('images/img04.jpg'),
));

add_theme_support('post-thumbnails');

};

function bblack_amar_sob_scripts(){

    // wp_register_style('bblacktemplate_stylesheet',get_theme_file_uri('/style.css'));
    // wp_enqueue_style('bblacktemplate_stylesheet');

    wp_enqueue_style('btblcak_google_fonts','http://fonts.googleapis.com/css?family=Nova+Mono');
    wp_enqueue_style('btblcak_stylesheet',get_theme_file_uri('/style.css'));

};?>

<?php function custombblckmenu(){?>
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


add_action('after_setup_theme','bblack_template');
add_action('wp_enqueue_scripts','bblack_amar_sob_scripts');
?>