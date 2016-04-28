<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config.php');
if ( isset( $_GET['ip'] ) ) {
  $valid = preg_match( '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $_GET['ip'] );
  if ( $valid === true ) {
    $ip_cidr = "{$_GET['ip']}/32";
    file_put_contents($file, $ip_cidr);
  } else {
    echo 'hi';
  }
}
?>
