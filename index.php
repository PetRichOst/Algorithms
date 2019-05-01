<?php

include 'class/Node.php';
include 'class/Sequence.php';
include 'class/Stack.php';
include 'class/Queue.php';

//Test stack - LIFO
$stack = new Stack();
$stack->put("John");
$stack->put("Alex");
$stack->put("Mike");

echo $stack->get()."\n";
echo $stack->get()."\n";
echo $stack->get()."\n";


//Test queue - FIFO
$queue = new Queue();

$queue->put("John");
$queue->put("Alex");
$queue->put("Mike");

echo $queue->get()."\n";
echo $queue->get()."\n";
echo $queue->get()."\n";