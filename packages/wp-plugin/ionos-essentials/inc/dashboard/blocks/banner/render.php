<?php

namespace ionos\essentials\dashboard\blocks\banner;

use const ionos\essentials\PLUGIN_FILE;

?>
<div class="grid-col grid-col--12 grid-col--medium-6 grid-col--small-12">
<header class="page-header" style="padding-bottom: 0; padding-left: 32px;">
  <div class="page-header__block">
    <div class="grid">
      <div class="grid-col grid-col--8 grid-col--small-12">
        <h1 class="page-header__headline">

        <?php

          $tenant = \get_option('ionos_group_brand', 'ionos');

printf(
  '<img src="%s" alt="Logo" style="height: 80px;">',
  plugin_dir_url(PLUGIN_FILE) . "inc/dashboard/data/tenant-logos/{$tenant}.svg"
);

?>
         </h1>
      </div>
      <div class="grid-col grid-col--4 grid-col--small-12 grid-col--align-right grid-col--small-align-left">

        <div class="button-container">
        <?php

if ('extendable' !== \get_option('stylesheet') || ! \is_plugin_active('extendify/extendify.php')) {

  $launchCompleted = \get_option('extendify_onboarding_completed', false);
  $text            = ($launchCompleted) ? \__('Retry AI', 'ionos-essentials') : \__('Start AI Sitebuilder', 'ionos-essentials');

  printf(
    '<a href="%s" class="button button--secondary tooltip" data-tooltip="My tooltip text">%s</a>',
    \admin_url('admin.php?page=extendify-launch'),
    $text
  );

}

printf(
  '<a href="%s" class="button button--primary">%s</a>',
  \esc_url(\home_url()),
  \esc_html__('View Site', 'ionos-essentials')
);

?>
        </div>

      </div>
    </div>
  </div>
</header>
</div>

