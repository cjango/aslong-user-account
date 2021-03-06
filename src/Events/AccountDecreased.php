<?php

namespace AsLong\UserAccount\Events;

use Illuminate\Queue\SerializesModels;

class AccountDecreased
{

    use SerializesModels;

    public $account;

    public $log;

    public function __construct($account, $log)
    {
        $this->account = $account;
        $this->log     = $log;
    }

}
