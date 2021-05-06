<?php
$dir = new DirectoryIterator("/");
foreach ($dir as $item) {
    echo $item . PHP_EOL;
}