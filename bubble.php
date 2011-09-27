#!/usr/bin/env php
<?php

$unsorted = array();
$numints  = 3000;

srand((int)microtime());
for ($i = 0; $i < $numints; $i++) {
    $unsorted[] = rand(0, 100000);
}

echo "Sorting $numints integers\n";
$start = microtime_float();
bubblesort($unsorted, $numints);
$end = microtime_float();
echo 'Sort took ' . number_format($end-$start, 4) . ' secs' . PHP_EOL;

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function bubblesort(&$data, $size) 
{
    for ($i = $size; --$i >= 0; ) {
        for ($j = 0; $j < $i; $j++) {
            // we use references as PHP's copy on write is very slow
            $next =& $data[$j + 1];
            if ($data[$j] < $next) {
                $temp = $data[$j];
                $data[$j] = $next;
                $next = $temp;
            }
        }
    }
}
