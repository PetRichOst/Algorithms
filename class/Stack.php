<?php

/**
 * Class Stack
 */
class Stack extends Sequence
{
    /** @var Node */
    private $last;

    public function __construct()
    {
        $this->last = null;
    }

    /**
     * @param string $item
     */
    public function put(string $item): void
    {
        $this->last = new Node($item, $this->last);
    }

    /**
     * @return string
     */
    public function get(): ?string
    {
        if ($this->isEmpty()) return null;

        $item = $this->last->getItem();
        $this->last = $this->last->getNext();

        return $item;
    }

    /**
     * @return Node|null
     */
    protected function getFirst(): ?Node
    {
        return $this->last;
    }
}