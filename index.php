<?php
namespace Blaze;
$page = WP\Site::getInstance()->createPage();
$page->renderCompositeWpPage(array("header.mst", "pages/index.mst", "footer.mst"));