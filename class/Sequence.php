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
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->getFirst() == null;
    }

    abstract protected function getFirst(): ?Node;
}