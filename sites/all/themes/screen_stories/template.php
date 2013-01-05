<?php

function screen_stories_preprocess_page(&$variables) {
  $variables['text_logo'] = screen_stories_text_logo();
}

function screen_stories_text_logo() {
  //<span class="small">By Mindy Mckoin</span>
  $content = '<div class="big">' . l('Screen Stories', '<front>') . '</div>';
  $content .= '<div class="small">' . l('By Mindy Mckoin', '<front>') . '</div>';
  return '<div id="text-logo">' . $content . '</div>';
}