<?php
namespace Blaze;

/**
 * A custom post class example
 *
 * Shows how to retrieve data from custom posts
 */
class BlazePost extends WP\Post {

    /**
     * Theme's post data retrieval method
     *
     * Control what post data will be retrieve for all theme pages by default here. Obtaining more data will result
     * in more DB queries and will slow the page down.
     */
    public function get_data() {
        $this->getPrimaryData();
        $this->getCategoryData();
        $this->getTagData();
    }
}