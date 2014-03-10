<?php
ini_set('track_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

include('phpseclib/SSH2.php');

$ssh = new Net_SSH2('192.168.0.199');
if (!$ssh->login('admin', 'adminlink*1')) {
    exit('Login Fallido');
}

echo $ssh->exec('echo 2 > /opt/.ciber/t.txt');
?>