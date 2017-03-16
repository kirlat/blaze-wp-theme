<?php
namespace Blaze;

/**
 * A custom post class example
 *
 * Shows how to retrieve data from custom posts
 */
class BlazeCustomPost extends WP\Post {
    public $custom_field_1;

    public function get_data() {
        parent::get_data(); // Call parent function to retrieve custom field values
        $this->custom_field_1 = "Custom field 1 value"; // Retrieve custom field data here
    }
}