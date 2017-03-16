<?php
namespace Blaze;
?>
<!DOCTYPE html>
<?php
global $is_IE;
if ($is_IE): ?>
    <!--[if lt IE 7 ]>
    <html class="ie6 browser-unsupported" <?php language_attributes(); ?>><![endif]-->
    <!--[if IE 7 ]>
    <html class="ie7 browser-unsupported" <?php language_attributes(); ?>><![endif]-->
    <!--[if IE 8 ]>
    <html class="ie8 browser-partially-supported" <?php language_attributes(); ?>><![endif]-->
    <!--[if IE 9 ]>
    <html class="ie9 browser-supported" <?php language_attributes(); ?>><![endif]-->
    <!--[if (gt IE 9)]>
    <html class="iegt9 browser-supported" <?php language_attributes(); ?>><![endif]-->
<?php else: ?>
<html class="not-ie browser-supported" <?php language_attributes(); ?>>
<?php endif; ?>

<?php
/* Page configuration */
//global $wp_query, $is_multipage, $is_multipost;
/*if ( $wp_query->max_num_pages > 1 )
    $is_multipage = true;
if ( $wp_query->found_posts > 1 )
    $is_multipost = true;*/
$site =  WP\Site::getInstance();
?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php if ( $is_IE ): ?>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        global $page, $paged;
        wp_title( '&laquo;', true, 'right' );
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
        // Add a page number if necessary:
        //if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __("Page %s", 'blaze_theme'), max( $paged, $page ) );
        ?>
    </title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--	Load fonts below-->

    <?php wp_head(); ?>
</head>
<body <?php body_class( "index" ); ?> data-colorbox='<?php echo $site->colorboxSupport ? 'true' : 'false'; ?>'>
