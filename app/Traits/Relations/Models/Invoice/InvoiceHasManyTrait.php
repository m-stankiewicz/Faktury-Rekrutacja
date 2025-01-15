<?php

namespace App\Traits\Relations\Models\Invoice;

use App\Models\Invoice;

trait InvoiceHasManyTrait
{
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
