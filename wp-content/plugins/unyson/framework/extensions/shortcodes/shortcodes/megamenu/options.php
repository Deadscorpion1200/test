<?php if(!defined('FW'))
{
    die('Forbidden');
}
$options = array(
  'option_my' => array(
    'type'  => 'textarea',
    'value' => 'default value',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Название меню', '{domain}'),
    'desc'  => __('Описание меню', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
)
);