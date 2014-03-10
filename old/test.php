<?php
ini_set('track_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

include('phpseclib/SSH2.php');

$ssh = new Net_SSH2('192.168.0.185');
if (!$ssh->login('juan', 'jmendoza07')) {
    exit('Login Fallido');
}

echo $ssh->exec('sh /home/juan/.sh/lock.sh');
?>