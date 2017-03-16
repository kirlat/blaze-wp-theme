<?php
namespace Blaze;

/**
 * A base class for all theme pages
 *
 * Put all additional functionality that is required for theme pages here.
 * An example shows how to retrieve posts using a custom WP loop.
 *
 * @package Blaze
 */
class BlazePage extends Wp\Page {
    /**
     * Define a function to retrieve posts
     */
    public function getCustomPosts() {
        // Custom posts will be visible to a template using a 'customPosts' variable name
        $var_name = 'customPosts';

        $this->data[$var_name] = array();

        // Custom query parameters
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4
        );

        $q = new WP\Query($args);
        $this->data[$var_name] = $q->getPosts('\Blaze\BlazeCustomPost');

        usort($this->data[$var_name], array($this, 'timestampDescComp'));
    }

    /**
     * Retrieve post data in a constructor (not recommended) or calling a data retrieval function separately
     * @param WP\Site $theme
     */
    public function __construct(WP\Site $theme)
    {
        parent::__construct();
        $this->getCustomPosts();
    }

    public function mainMenuBootstrap3()
    {
        return $this->site->getMainMenu(array(
            "format" => "bootstrap3",
            "align" => "right"
        ));
    }
}