<?php


register_sidebar(array(
  'name' => __('First Right Sidebar'),
  'id' => 'first-right-sidebar',
  'description' => 'The widget postion in the top right sidebar',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));


register_sidebar(array(
  'name' => __('Second Right Sidebar'),
  'id' => 'second-right-sidebar',
  'description' => 'The widget postion in the bottom right sidebar',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));


register_sidebar(array(
  'name' => __('Header Right'),
  'id' => 'header-right',
  'description' => 'The widget postion in the header right',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
