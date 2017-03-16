<?php
namespace Blaze;

$page = WP\Site::getInstance()->createPage();
$page->renderCompositeWpPage(array("header.mst", "pages/404.mst", "footer.mst"));