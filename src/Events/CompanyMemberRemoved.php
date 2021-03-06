<?php

namespace Laravel\Jetstream\Events;

use Illuminate\Foundation\Events\Dispatchable;

class CompanyMemberRemoved
{
    use Dispatchable;

    /**
     * The company instance.
     *
     * @var mixed
     */
    public $company;

    /**
     * The company member that was removed.
     *
     * @var mixed
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  mixed  $company
     * @param  mixed  $user
     * @return void
     */
    public function __construct($company, $user)
    {
        $this->company = $company;
        $this->user = $user;
    }
}
