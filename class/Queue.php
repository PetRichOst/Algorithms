<?php

/**
 * Class Queue
 */
class Queue extends Sequence
{
    /** @var Node */
    private $head;

    /** @var Node */
    private $last;

    /**
     * @param string $item
     */
    public function put(string $item): void
    {
        $node = new Node($item);

        if ($this->isEmpty()) {
            $this->head = $node;
            $this->last = $node;
        } else {
            $this->last->setNext($node);
            $this->last = $node;
        }
    }

    /**
     * @return null|string
     */
    public function get(): ?string
    {
        $item = $this->head->getItem();
        $this->head = $this->head->getNext();

        return $item;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->head == null;
    }
}