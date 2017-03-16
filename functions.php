<?php
namespace Blaze;

// Blaze Core Autoloader
require_once(dirname(__FILE__) . '/components/blaze-wp-core/autoloader.php');
// Posts
require_once(dirname(__FILE__) . '/model/posts/class-blaze-post.php');
require_once(dirname(__FILE__) . '/model/posts/class-blaze-custom-post.php');
// Pages
require_once(dirname(__FILE__) . '/model/pages/class-blaze-page.php');

// Configure a site instance
$site =  WP\Site::getInstance();
$site->config(array(
    'pageType' => '\Blaze\BlazePage',
    'postType' => '\Blaze\BlazePost',
    'serveStaticData' => false
));


$site->renderer->register("Mustache", '\Blaze\Renderers\Mustache', array(
    "autoloader" => 'src/Mustache/Autoloader.php',
    "libPath" => dirname( __FILE__ ) . '/components/mustache-php/'
));
/*$renderingMode = $site->isDevMode()? "auto": "precompiled";
$site->renderer->register("LightnCandy", '\Blaze\Renderers\Lightn_Candy', array(
    "compiledTemplatesDir" => dirname( __FILE__ ) . '/templates-compiled/',
    "autoloader" => 'src/loader.php',
    "libPath" => dirname( __FILE__ ) . '/components/lightncandy-0.9.4/',
    "mode" => $renderingMode
));*/
$site->renderer->setDefault("Mustache");

// Sidebars
$site->createSidebar("footer-area-1", array(
    "name" => "Footer Area One",
    "hideTitle" => true
));


// Settings
$data_item_1 = $site->createDataItem(
    'copyright_textbox',
    array(
        'defaultValue' => 'Default copyright text',
        'label' => 'Copyright text',
        'controlType' => 'text'
    )
);

$data_item_2 = $site->createDataItem(
    'copyright_textbox_two',
    array(
        'defaultValue' => 'Default copyright text 2',
        'label' => 'Copyright text 2',
        'controlType' => 'text'
    )
);


// Theme customizer sections where data items can be placed
$section1 = $site->customizer->addSectionDefault(
    'example_section_one',
    array(
        'title' => 'Example Settings',
        'description' => 'This is a settings section.',
        'priority' => 35,
    )
);

$section2 = $site->customizer->addSectionDefault(
    'example_section_two',
    array(
        'title' => 'Example Settings 2',
        'description' => 'This is a settings section.',
        'priority' => 38,
    )
);
// This is how to specify to what sections does a setting belong
$section1->addSetting($data_item_1);
$section2->addSetting($data_item_2);

// How to get setting values
$val = $site->getDataItem('copyright_textbox');


//Shortcodes
// Format: shortcode name, shortcode type (a name of a function in WpShortcodes)
// Redirects user to the current page after login
//$site->createShortcode('blaze-login-to-here-link', 'loginToHereLink');
// Outputs post last update date, format can be specified in format attribute
//$site->createShortcode('blaze-post-modified-date', 'postModifiedDate');
// Returns specified number of tax terms
//$site->createShortcode('blaze-filter-terms', 'filterTerms');
// Returns specified number of tax terms
//$site->createShortcode('blaze-create_nonce', 'createNonceFunc');
// Displays a WP menu
//$site->createShortcode('blaze-wp-menu', 'menu');

// Define development mode in wp-config.php as:
// define('BLAZE_DEV_MODE', true);
// With this mode on theme loads non-minified versions of CSS and JS files
/*function is_dev_mode() {
    return defined('BLAZE_DEV_MODE') && BLAZE_DEV_MODE;
}*/

// Special Font Awesome shortcode. TODO: need to standartize
add_shortcode("blaze-fa", array('\Blaze\Utils\FontAwesome', 'faIcon'));

// Metaboxes
$metabox1 = $site->createMetabox("text_box", array(
    "title" => "Meta box",
    "priority" => "high"
));

$data_item_3 = $site->createDataItem(
    'test_setting_three',
    array(
        'defaultValue' => 'Default copyright text 3',
        'label' => 'Copyright text 3',
        'itemType' => WP\Data_Item::DIT_CUSTOM_FIELD,
        'controlType' => WP\Data_Item::DCT_SINGLE_LINE
    )
);

$data_item_4 = $site->createDataItem(
    'test_setting_four',
    array(
        'defaultValue' => '2',
        'selectList' => array(
            array("title" => "Choice 1", "value" => 1),
            array("title" => "Choice 2", "value" => 2),
            array("title" => "Choice 3", "value" => 3)
        ),
        'label' => 'Copyright text 4',
        'itemType' =>WP\Data_Item::DIT_CUSTOM_FIELD,
        'controlType' => WP\Data_Item::DCT_SINGLE_SELECT
    )
);

$metabox1->addDataItem($data_item_3);
$metabox1->addHtmlItem("<h2>Section title</h2>");
$metabox1->addDataItem($data_item_4);

//Remove WP version from the head
remove_action( 'wp_head', 'wp_generator' );
if (true === $site->wooCommerceSupport) {
    add_filter( 'woocommerce_enqueue_styles', '__return_false' ); //Remove WooCommerce styles
    add_theme_support( 'woocommerce' ); // Declare WooCommerce theme support
}

//Change login screen logo
function custom_login() {
    $site =  WP\Site::getInstance();
?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $site->themeURI; ?>/images/generic-logo.png);
            padding-bottom: 0;
            width: 300px;
            height: 130px;
            background-size: 100%;
        }
    </style>
<?php
}
add_action( 'login_enqueue_scripts', '\Blaze\custom_login' );

function blaze_enqueue_js_frontend()
{
    $site = WP\Site::getInstance();
    if (!is_admin()) {
        wp_enqueue_script("jquery");

        if ($site->isDevMode()) {
            // Development mode
            $version = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . '/css/site.css' ));
            wp_enqueue_style("site", get_template_directory_uri() . "/css/site.css", array(), $version);
            $version = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . '/js/site.js' ));
            wp_enqueue_script("site", get_template_directory_uri() . "/js/site.js", array('jquery'), $version, true);
            // In dev version, theme.js is not included into site.js and thus should be loaded separately
            $version = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . '/js/source/theme.js' ));
            wp_enqueue_script("theme", get_template_directory_uri() . "/js/source/theme.js", array('jquery', 'site'), $version, true);
        } else {
            // Production mode
            $version = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . '/css/site.min.css' ));
            wp_enqueue_style("site", get_template_directory_uri() . "/css/site.min.css", array(), $version);
            $version = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . '/js/site.min.js' ));
            wp_enqueue_script("site", get_template_directory_uri() . "/js/site.min.js", array('jquery'), $version, true);
        }
    }
}
add_action( "wp_enqueue_scripts", "\Blaze\blaze_enqueue_js_frontend", 20 );//Should be loaded after Toolset styles

// Excerpt Length:
function blaze_excerpt_length( $length ) {
    return 55;
}
add_filter( "excerpt_length", "\Blaze\blaze_excerpt_length" );

function blaze_theme_setup() {
    //$site =  Core\WpSite::getInstance();
    add_theme_support( "post-thumbnails" ); // Support thumbnail
    set_post_thumbnail_size( 200, 200 ); // Set thumbnail image size
    add_theme_support( "automatic-feed-links" );
}
add_action( "after_setup_theme", "\Blaze\blaze_theme_setup" );

function blaze_link_post_thumbnails_to_post( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" title="' .
            esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';

    return $html;
}
add_filter( "post_thumbnail_html", "\Blaze\blaze_link_post_thumbnails_to_post", 10, 3 );

add_action('admin_head', '\Blaze\admin_style');
function admin_style() {
    echo '<style>
    .admin-mtbx-form-group {
        margin-bottom: 15px;
    }
    label.admin-mtbx-label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }
    .admin-mtbx-form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
  </style>';
}