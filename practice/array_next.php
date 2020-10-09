<?php

$data = ['one', 'two', 'three'];

// $next=next($data);

// echo $next;

// echo current($data);    //one
echo next($data);   //two
echo next($data);   
echo next($data);    //three
echo next($data); 
// echo current($data);    //three
// echo current($data);    //three

for($i=0;$i<count($data);$i++)
{
    echo next($data).PHP_EOL;
}