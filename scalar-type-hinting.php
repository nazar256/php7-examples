<?php
//declare(strict_types = 1);

function fun(int $val)
{
    var_dump($val);
}

fun(true);      // int(1)
fun(2);         // int(2)
fun("3");       // int(3)
fun(4.2453);    // int(4) !


function getRandomNumber(): int
{
    // chosen by fair dice roll
    // guaranteed to be random
    return 4;
}