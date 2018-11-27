<?php

//open file to write
$fp = fopen("stats.txt", "r+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);