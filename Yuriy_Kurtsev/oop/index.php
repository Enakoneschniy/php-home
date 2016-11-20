<?php
include_once "init.php";

$flagman = new fidernie(3.30, "30-120", 3, 3);

echo $flagman->info();

echo "<hr>";

$daiwa = new spinning(2.40, "10-30", 2, "Быстрый");

echo $daiwa->info();