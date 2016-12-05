<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'penglover',
    'db_password' => 'ak90823!!',
    'db_database' => 'penglover',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'penglover',
      'db_password' => 'ak90823!!',
      'db_database' => 'penglover',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://penglover.cafe24.com/',
  'lang_type' => 'ko',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
);