<?php namespace Blaze;
$site = WP\Site::getInstance();
wp_footer(); ?>
<!--googleoff: all-->
<noscript>
    <div id="id-js-disabled-warning" class="page-info-panel js-disabled-warning">
        <p><?php echo $site->messages->jsDisabledWarning() ?></p>
    </div>
</noscript>
<div id="id-unsupported-features-warning" class="page-info-panel unsupported-features-warning">
    <p><?php echo $site->messages->unsupportedFeaturesWarning() ?></p>
</div>
<!--googleon: all-->
</body>
</html>