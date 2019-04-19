<?php

namespace AsLong\UserAccount\Events;

use Illuminate\Queue\SerializesModels;

class AccountLogThawed
{

    use SerializesModels;

    public $log;

    public function __construct($log)
    {
        $this->log = $log;
    }

}
