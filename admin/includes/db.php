<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'thernlov_admin';
$db['db_pass'] = 'root1';
$db['db_name'] = 'thernlov_xogos';

foreach ($db as $key => $value) {

    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if ($connection) {
  //   echo 'We are connected';
 //}