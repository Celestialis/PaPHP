<?php

include 'insertSort.php'; //Самая долгая (5)
include 'CombSort.php'; //Быстрая(2)
include 'MergeSort.php'; //Быстрая(3)
include 'HeapSplSort.php'; //Самая быстрая(1)
include 'DualSelectSort.php'; //Долгая(4)

function getArr(): array
{
	return _randArray(100000);
}

$arr = getArr();
$start = microtime(true);
insertion_sort($arr);
echo "Сортировка вставками: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: ".( microtime(true) - $start).PHP_EOL;

