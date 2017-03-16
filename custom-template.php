<?php
/* Template Name: Sample Page Template
*  This is a sample custom template file example
*/
namespace Blaze;

$page = WP\Site::getInstance()->createPage();
$page->renderCompositeWpPage(array("header.mst", "pages/sample.mst", "footer.mst"));