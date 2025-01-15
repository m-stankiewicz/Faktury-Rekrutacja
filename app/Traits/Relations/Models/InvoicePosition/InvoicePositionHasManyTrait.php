<?php

namespace App\Traits\Relations\Models\InvoicePosition;

use App\Models\InvoicePosition;

trait InvoicePositionHasManyTrait
{
    public function invoicePositions()
    {
        return $this->hasMany(InvoicePosition::class);
    }
}
