<?php
namespace Blaze;
$page = WP\Site::getInstance()->createPage();
$page->renderCompositeWpPage(array("header.mst", "pages/singular.mst", "footer.mst"));