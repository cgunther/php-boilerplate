<?php

function has_content($key) {
  global $content;
  return isset($content[$key]);
}

function yield($key = 'default', $echo = true) {
  global $content;

  $out = has_content($key) ? $content[$key] : '';

  if ($echo) {
    echo $out;
  } else {
    return $out;
  }
}

function javascripts() {
  global $content;
  if (!isset($content['javascripts'])) $content['javascripts'] = '';

  $args = func_get_args();
  foreach($args as $script) {
    if (substr($script, 0, 7) != 'http://') {
      $script = "js/$script.js";
    }
    $content['javascripts'] .= '<script src="'.$script.'"></script>';
  }
}

function stylesheets() {
  global $content;
  if (!isset($content['stylesheets'])) $content['stylesheets'] = '';

  $args = func_get_args();
  foreach($args as $style) {
    if (substr($style, 0, 7) != 'http://') {
      $style = "css/$style.css";
    }
    $content['stylesheets'] .= '<link rel="stylesheet" href="'.$style.'">';
  }
}

function title($title) {
  global $content;
  $content['title'] = $title;
}
