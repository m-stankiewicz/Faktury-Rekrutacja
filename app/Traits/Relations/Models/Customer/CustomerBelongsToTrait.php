<?php

namespace App\Traits\Relations\Models\Customer;

use App\Models\Customer;

trait CustomerBelongsToTrait
{
    public function initializeCustomerBelongsToTrait()
    {
        $this->fillable[] = 'customer_id';
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
