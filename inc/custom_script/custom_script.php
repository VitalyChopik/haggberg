<?php
function add_custom_tinymce_button($buttons) {
  array_push($buttons, 'custom_mce_button');
  return $buttons;
}

function add_custom_tinymce_plugin($plugin_array) {
  $plugin_array['custom_mce_button'] = get_template_directory_uri() . '/inc/custom_script/wysiwyg-editor.js'; // Замените путь на путь к вашему файлу JavaScript
  return $plugin_array;
}

function enable_custom_tinymce_button($plugins) {
  $plugins[] = 'custom_mce_button';
  return $plugins;
}

add_filter('mce_buttons', 'add_custom_tinymce_button');
add_filter('mce_external_plugins', 'add_custom_tinymce_plugin');
add_filter('tiny_mce_plugins', 'enable_custom_tinymce_button');
