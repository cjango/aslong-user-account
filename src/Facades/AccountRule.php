<?php

namespace AsLong\UserAccount\Facades;

use Illuminate\Support\Facades\Facade;

class AccountRule extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\UserAccount\AccountRule::class;
    }
}
