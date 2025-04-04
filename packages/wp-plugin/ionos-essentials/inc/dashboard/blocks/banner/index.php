<?php

namespace ionos\essentials\dashboard\blocks\banner;

const MAIN_TEMPLATE   = '<div class="">%s</div>';
const BUTTON_TEMPLATE = '<div class=""><a href="%s" target="%s" class="%s">%s</a></div>';
function render_callback(): string
{
  $button_list = [];

  $view_site = [
    [
      'link'           => \home_url(),
      'text'           => \__('View Site', 'ionos-essentials'),
      'css-attributes' => 'viewsite',
    ],
  ];

  $button_list = \array_merge($button_list, get_ai_button());
  $button_list = \apply_filters('ionos_dashboard_banner__register_button', $button_list);
  $button_list = \array_merge($button_list, $view_site);

  $button_html = \implode('', \array_map(fn (array $button): string => \sprintf(
    BUTTON_TEMPLATE,
    \esc_url($button['link'] ?? '#'),
    $button['target']         ?? '_top',
    $button['css-attributes'] ?? '',
    \esc_html($button['text'] ?? '')
  ), $button_list));

  return \sprintf(MAIN_TEMPLATE, $button_html);
}
