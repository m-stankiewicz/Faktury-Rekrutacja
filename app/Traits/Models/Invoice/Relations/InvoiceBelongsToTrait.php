<?php

namespace App\Traits\Models\Invoice\Relations;

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
