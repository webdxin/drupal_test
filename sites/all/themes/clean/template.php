<?php

/**
 * Implements hook_form_alter().
 *
 * Courtesy of JohnAlbin
 */
function clean_form_search_block_form_alter(&$form, &$form_state) {
  $form['actions']['submit']['#type'] = 'image_button';
  $form['actions']['submit']['#src'] = drupal_get_path('theme', 'clean') . '/images/search.gif';
  
}