<?php

namespace ionos\essentials\dashboard\blocks\quick_links;

$config_file = __DIR__ . '/config.php';

if (file_exists($config_file)) {
  require $config_file;

  echo '
    <div class="wp-block-column quick-links">
      <div class="wp-block-group">';
  printf('<h3>%s</h3>', \esc_html__('Quick Links', 'ionos-essentials'));
  printf('<p>%s</p>', \esc_html__('Easily navigate to frequently used features and tools.', 'ionos-essentials'));
  echo '</div>
      <div class="wp-block-group elements">
      ';
  foreach ($links as $link) {
    printf(
      '<div class="wp-block-group element">
        <a href="%s" target="_top">
          <img class="wp-block-image size-large is-resized icon" src="%s" alt=""/>
          <p>%s</p>
        </a></div>',
      \esc_url($link['url']),
      \esc_url(\plugins_url('assets/img/' . $link['icon'], dirname(__DIR__, 3))),
      \esc_html($link['text'])
    );
  }
  echo '
      </div>
    </div>
  ';

}
