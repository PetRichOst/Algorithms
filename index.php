<?php

include 'class/Node.php';
include 'class/Sequence.php';
include 'class/Stack.php';
include 'class/Queue.php';
include 'class/Graph.php';
include 'class/Walker.php';

error_reporting(0);
//Test stack - LIFO
/*
$stack = new Stack();
$stack->put("John");
$stack->put("Alex");
$stack->put("Mike");

foreach ($stack->getList() as $item)
    echo $item . "\n";

echo "========================\n";
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
*/

//Test graph
$graph = new Graph();

for ($x = 0; $x < 8; $x++) {
    for ($y = 0; $y < 8; $y++) {
        $graph->addNode("$x$y");
    }
}

for ($x = 0; $x < 8; $x++) {
    for ($y = 0; $y < 8; $y++) {
        for($sx = 0; $sx <=1; $sx++){
            $sy = 1 - $sx;
            if ($x+$sx < 8){
                if ($y+$sy < 8){
                    $graph->addEdge("$x$y", ($x+$sx).($y+$sy), 1);
                }
            }
        }
    }
}

$walker = new Walker($graph);
$stack = new Stack();
$queue = new Queue();

//$walker->walkDepth1('00');
$walker->walk('00', $queue);
print_r($walker->path);

function show(array $path, Sequence $sequence)
{
    for ($x = 0; $x < 8; $x++){
        for ($y = 0; $y < 8; $y++) {
            if ($path["$x$y"]){
                echo "$x$y ";
            } elseif ($sequence->contains("$x$y")){
                echo "++ ";
            } else {
                echo ".. ";
            }
        }
        echo "\n";
    }
    foreach ($sequence->getList() as $item)
        echo $item . " ";
    echo "\n";
    readline();
}

/*
$graph->addNode("A")
      ->addNode("B")
      ->addNode("C")
      ->addNode("D")
      ->addNode("E")
      ->addNode("F")
      ->addNode("G");

$graph->addEdge("A", "B", 2)
      ->addEdge("A", "C", 3)
      ->addEdge("A", "D", 6)
      ->addEdge("B", "C", 4)
      ->addEdge("B", "E", 9)
      ->addEdge("C", "D", 1)
      ->addEdge("C", "E", 7)
      ->addEdge("C", "F", 6)
      ->addEdge("D", "F", 4)
      ->addEdge("E", "F", 1)
      ->addEdge("E", "G", 5)
      ->addEdge("F", "G", 8);

$walker = new Walker($graph);
$walker->walkDepth1("C");
print_r($walker->path);
*/


/*
foreach($graph->getNodes() as $node){
    foreach($graph->getEdges($node) as $node2 => $length)
        echo $node."-".$node2."=".$length."\n";
    echo $node. "\n";
    echo "----------------\n";
}
*/