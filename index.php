<?php

include 'class/Node.php';
include 'class/Sequence.php';
include 'class/Stack.php';
include 'class/Queue.php';
include 'class/Graph.php';

//Test stack - LIFO
//$stack = new Stack();
//$stack->put("John");
//$stack->put("Alex");
//$stack->put("Mike");
//
//foreach ($stack->getList() as $item)
//    echo $item . "\n";
//
//echo "========================\n";
//echo $stack->get()."\n";
//echo $stack->get()."\n";
//echo $stack->get()."\n";


//Test queue - FIFO
//$queue = new Queue();
//
//$queue->put("John");
//$queue->put("Alex");
//$queue->put("Mike");
//
//echo $queue->get()."\n";
//echo $queue->get()."\n";
//echo $queue->get()."\n";

//Test graph
$graph = new Graph();

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

foreach($graph->getNodes() as $node){
    foreach($graph->getEdges($node) as $node2 => $length)
        echo $node."-".$node2."=".$length."\n";
    echo $node. "\n";
    echo "----------------\n";
}
