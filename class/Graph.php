<?php

class Graph
{
    /** @var array */
    private $edges;

    // Матрица смежности вершин:
    // $edges['A']['B'] = 10; //length
    // $edges['B']['A'] = 10; //length

    public function __construct()
    {
        $this->edges = [];
    }

    public function addNode(string $node)
    {
        $this->edges[$node] = [];

        return $this;
    }

    public function addEdge(string $node1, string $node2, string $length)
    {
        $this->edges[$node1][$node2] = $length;
        $this->edges[$node2][$node1] = $length;

        return $this;
    }

    public function getNodes(): iterable
    {
        foreach ($this->edges as $node => $edge)
            yield $node;
    }

    public function getEdges(string $node1)
    {
        foreach ($this->edges[$node1] as $node2 => $length)
            yield $node2 => $length;
    }
}
