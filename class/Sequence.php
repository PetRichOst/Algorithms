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

    /**
     * @return iterable
     */
    public function getList(): iterable
    {
        $curr = $this->getFirst();

        while ($curr != null) {
            yield $curr->getItem();
            $curr = $curr->getNext();
        }
    }

    /**
     * @param string $item
     * @return bool
     */
    public function contains(string $item): bool
    {
        foreach ($this->getList() as $curr) {
            if ($curr == $item)
                return true;
        }

        return false;
    }
}