<?php

namespace App\Traits\Models\Invoice\Relations;

use App\Models\Invoice;

trait InvoiceHasManyTrait
{
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
