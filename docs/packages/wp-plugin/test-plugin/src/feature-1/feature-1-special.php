<?php

namespace ionos\test_plugin\feature_1;

function hello2(): void
{
  error_log('hello from packages/wp-plugin/test-plugin/src/feature-1/feature-1-special.php');
}

hello2();

\add_action('admin_enqueue_scripts', function (): void {
  $assets = require_once __DIR__ . '/feature-1-special-index.asset.php';
  \wp_enqueue_script(
    handle: 'test-plugin-feature-1-special-index',
    src: \plugins_url('/feature-1-special-index.js', __FILE__),
    deps: $assets['dependencies'],
    ver: $assets['version'],
    args: [
      'in_footer' => true,
    ],
  );

  \wp_set_script_translations(
    'test-plugin-feature-1-special-index',
    'test-plugin',
    \plugin_dir_path(__FILE__) . 'languages'
  );
});

\add_action('init', function (): void {
  \wp_register_block_metadata_collection(
    \plugin_dir_path(__FILE__) . 'blocks',
    \plugin_dir_path(__FILE__) . 'blocks/blocks-manifest.php'
  );
  \register_block_type(__DIR__ . '/blocks/block-1');
  \register_block_type(__DIR__ . '/blocks/block-2');
});
