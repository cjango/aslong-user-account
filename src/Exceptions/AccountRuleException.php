<?php

namespace AsLong\UserAccount\Exceptions;

use RuntimeException;

class AccountRuleException extends RuntimeException
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}
