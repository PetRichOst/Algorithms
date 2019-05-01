<?php

/**
 * Class Sequence
 */
abstract class Sequence
{
    /**
     * @param string $item
     */
    abstract public function put(string $item): void;

    /**
     * @return null|string
     */
    abstract public function get(): ?string;

    /**
     * @return Node|null
     */
    abstract protected function getFirst(): ?Node;

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->getFirst() == null;
    }

    public function getList(): iterable
    {
        $curr = $this->getFirst();

        while ($curr != null)
        {
            yield $curr->getItem();
            $curr = $curr->getNext();
        }
    }
}