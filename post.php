<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config.php');
require_once('./functions.php');
if ( isset( $_GET['ip'] ) ) {
  if ( check_ip_match($_GET['ip'], $file) === true ) {
    $valid = preg_match( '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $_GET['ip'] );
    if ( $valid === true ) {
      $ip_cidr = "{$_GET['ip']}/32";
      file_put_contents($file, $ip_cidr, FILE_APPEND | LOCK_EX);
      echo "IP address successfully added to whitelist";
    } else {
      echo 'IP address not valid';
    }
  } else {
    echo "IP address already in whitelist";
  }
}
?>
