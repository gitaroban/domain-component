<?php

namespace Atournayre\Component\Domain\Type\LastName\Exception;

use Atournayre\Component\Domain\Exception\Exception;

class LastNameIsEmptyException extends Exception
{
    public function getMessageKey(): string
    {
        return 'A lastname must not be empty.';
    }
}