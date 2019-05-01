<?php

class Node
{
    /** @var string */
    private $item;

    /** @var Node */
    private $next;

    public function __construct(string $item, ?Node $next = null)
    {
        $this->item = $item;
        $this->next = $next;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

    /**
     * @return Node
     */
    public function getNext(): ?Node
    {
        return $this->next;
    }

    /**
     * @param Node $node
     */
    public function setNext(Node $node): void
    {
        $this->next = $node;
    }
}