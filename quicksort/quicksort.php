#!/usr/bin/env php
<?php

$unsorted = array();
$numints  = 5000;

for ($i = 0; $i < $numints; $i++) {
    $unsorted[] = mt_rand(0, 100000);
}
echo "Sorting $numints integers\n";
$start = microtime_float();
$sorted = quicksort($unsorted, $numints);
$end = microtime_float();
echo 'Sort took ' . number_format($end-$start, 4) . ' secs' . PHP_EOL;

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function quicksort($unsorted)
{
    if (count($unsorted) < 2) { return $unsorted; }

    $numints = count($unsorted);
    $index   = floor($numints/2);
    $pivot   = $unsorted[$index];
    $left    = array();
    $right   = array();

    for ($i = 0; $i < $numints; $i++) {
        if ($i != $index) {
            if ($unsorted[$i] < $pivot) {
                $left[] = $unsorted[$i];
            } else {
                $right[] = $unsorted[$i];
            }
        }
    }

    return array_merge(quicksort($left), array($pivot), quicksort($right)); 
}
