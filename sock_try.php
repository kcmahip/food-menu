<?php

$fp = fsockopen("192.168.99.100", 6969, $errno, $errstr, 30);
$fp_bin = fopen("results.json", 'rb'); 
// TODO error test $fp_bin

if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    // fwrite($fp, "You message");
    while (!feof($fp_bin)) {

        fwrite($fp, fread($fp_bin, 256)); // ? use a larger value
        // TODO Error test the read and write operations
    }
    fclose($fp);
    fclose($fp_bin);
    echo "SENT!";
}


 ?>