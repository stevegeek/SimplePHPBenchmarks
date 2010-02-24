<?php

$string = "This is a test string";

// Test
$_name = 'preg_replace';
echo "Do '$_name'...\n";
flush();

// your variables

$start = $timingfunc();
for ($i = 0; $i < $_loops; $i++)
{
    // your code
    preg_replace('/is/', "isnt", $string);
}
$_timing[$_name] = $timingfunc() - $start;

// Test
$_name = 'str_replace';
echo "Do '$_name'...\n";
flush();

// your variables

$start = $timingfunc();
for ($i = 0; $i < $_loops; $i++)
{
    // your code
    str_replace("is", "isnt", $string);
}
$_timing[$_name] = $timingfunc() - $start;
