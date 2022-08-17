<?php

echo "User Address: $_SERVER['REMOTE_ADDR']";

$path = countLog.txt;
$count = file_get_contents($path);
$count++;
file_put_contents($path, $count);
echo "Hits: $count"

?>