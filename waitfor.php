<?php

function checkPort($ip, $port) {
    $fp = @fsockopen($ip, $port, $errno, $errstr, 0.1);
    if (!$fp) {
        return false;
    } else {
        fclose($fp);
        return true;
    }
}

$startTime = time();
$timeout = 15; //timeout in seconds

$ip = $argv[1];
$port = $argv[2];

while(true)
{
    if(time() > $startTime + $timeout) {
        exit(1);
    }

    // check port
    if (checkPort($ip, $port)) {
        exit(0);
    } else {
        sleep(0.5);
    }
}