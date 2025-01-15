<?php

namespace App\Traits\Scopes\Models\Customer;

use Illuminate\Database\Eloquent\Builder;

trait ScopeByCustomerTrait
{
    /**
     * Scope to filter invoices by customer.
     *
     * @param Builder $query
     * @param int $customerId
     * @return Builder
     */
    public function scopeByCustomer(Builder $query, int $customerId): Builder
    {
        return $query->where('customer_id', $customerId);
    }
}
