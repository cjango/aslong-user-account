<?php

namespace AsLong\UserAccount\Facades;

use Illuminate\Support\Facades\Facade;

class Account extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\UserAccount\Account::class;
    }
}
