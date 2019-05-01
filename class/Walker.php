<?php

/**
 * Class Walker
 */
class Walker
{

    private $graph;
    public $path;

    /**
     * Walker constructor.
     * @param Graph $graph
     */
    public function __construct(Graph $graph)
    {
        $this->graph = $graph;
        $this->path = [];
    }

    /**
     * @param string $node
     */
    public function walkDepth(string $node)
    {
        $this->path[$node] = true;
        foreach ($this->graph->getEdges($node) as $node2 => $length)
            if (!$this->path[$node2])
                $this->walkDepth($node2);
    }

    /**
     * @param string $node
     * @return array
     */
    public function walkDepth1(string $node)
    {
        $path = [];

        $stack = new Stack();
        $stack->put($node);
        show($path, $stack);
        while (!$stack->isEmpty()){
            $curr = $stack->get();
            $path[$curr] = true;

            foreach ($this->graph->getEdges($curr) as $next => $length)
                if (!$path[$next])
                    if (!$stack->contains($next))
                        $stack->put($next);

            show($path, $stack);
        }

        return $path;
    }

    public function walk(string $node, Sequence $sequence)
    {
        $path = [];

        $sequence->put($node);
        show($path, $sequence);
        while (!$sequence->isEmpty()){
            $curr = $sequence->get();
            $path[$curr] = true;

            foreach ($this->graph->getEdges($curr) as $next => $length)
                if (!$path[$next])
                    if (!$sequence->contains($next))
                        $sequence->put($next);

            show($path, $sequence);
        }

        return $path;
    }

}