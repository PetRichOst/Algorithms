<?php

include 'class/Node.php';
include 'class/Stack.php';

$stack = new Stack();
$stack->put("John");
$stack->put("Alex");
$stack->put("Mike");

var_dump($stack);

echo $stack->get()."\n";
echo $stack->get()."\n";
echo $stack->get()."\n";