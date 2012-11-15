#!/usr/bin/env php
<?php

$unsorted = array();
$numints  = 5000;

for ($i = 0; $i < $numints; $i++) {
    $unsorted[] = mt_rand(0, 100000);
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
        $swapped = false;    
        for ($j = 0; $j < $i; $j++) {
            // we use references as PHP's copy on write is very slow
            $next =& $data[$j + 1];
            if ($data[$j] > $next) {
                $swapped = true;
                $temp = $data[$j];
                $data[$j] = $next;
                $next = $temp;
            }
        }
        if (! $swapped) {
            return;
        }
    }
}
