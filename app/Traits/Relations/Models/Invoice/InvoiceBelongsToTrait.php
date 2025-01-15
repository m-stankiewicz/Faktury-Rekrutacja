<?php

namespace App\Traits\Relations\Models\Invoice;

use App\Models\Invoice;

trait InvoiceBelongsToTrait
{
    public function initializeInvoiceBelongsToTrait()
    {
        $this->fillable[] = 'invoice_id';
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
