<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
  'page_builder' => array(
    'title'         => __('Mega Menu', '{domain}'),
    'description'   => __('My component description', '{domain}'),
    'tab'           => __('New Elements', '{domain}'),
    'popup_size'    => 'small',
);

$cfg['item-options:popup-size:row']     = 'small'; // small, medium, large
$cfg['item-options:popup-size:column']  = 'small';
$cfg['item-options:popup-size:item']    = 'small';
$cfg['item-options:popup-size:default'] = 'small';
