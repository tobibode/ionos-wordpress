<?php

namespace ionos\essentials\dashboard\blocks\quick_links;

?>
<div class="grid-col grid-col--6 grid-col--medium-6 grid-col--small-12">

<div class="card __direct-selection">
  <div class="card__content">
    <section class="card__section">
      <h2 class="card__headline">
        <?php echo \esc_html__('Quick Links', 'ionos-essentials'); ?>
        </h2>
      <p class="paragraph">
        <?php
            printf(
              '<p>%s</p>',
              \esc_html__('Easily navigate to frequently used features and tools', 'ionos-essentials')
            );
?>
      </p>

      <div class="button-container">

<?php

$config_file = __DIR__ . '/config.php';

if (file_exists($config_file)) {
  require $config_file;

  foreach ($links as $link) {
    printf(
      '<a href="%s" target="_blank"  class="button button button--medium-icon-only">
            <img class="svg-icon button__icon" src="%s" />
             %s
            </a>',
      \esc_url($link['url']),
      \esc_url(\plugins_url('assets/img/' . $link['icon'], dirname(__DIR__, 3))),
      \esc_html($link['text'])
    );
  }
}
?>
</div>
    </section>
  </div>
</div>

</div>
