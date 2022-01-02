<?php

namespace Atournayre\Component\Domain\Validation;

abstract class Validable
{
    /**
     * @return bool
     */
    abstract public function estValide(): bool;
}