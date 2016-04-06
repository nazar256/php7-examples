<?php
echo("return from generator:\n");
function generatorWithReturn()
{
    for($i=200; $i<203; $i++){
        yield $i;
    }

    return 'success';       // new!
}
$generator = generatorWithReturn();
foreach ($generator as $item) {
    echo "$item\n";
}
echo $generator->getReturn(). "\n";     // new!


echo("\n\ngenerator delegation:\n");
function fibonacciGenerator() {
    yield 1;
    yield from subFibonacciGenerator();
    // yield from [1,2,3,5]
}

function subFibonacciGenerator(){
    $last = 0;
    $current = 1;
    while (true) {
        $current = $last + $current;
        $last = $current - $last;
        yield $current;
    }
}

$generator = fibonacciGenerator();
echo ($generator->current()."\n");
$generator->next();
echo ($generator->current()."\n");
$generator->next();
echo ($generator->current()."\n");