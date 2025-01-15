<?php

namespace App\Traits\Models\InvoicePosition\Relations;

use App\Models\InvoicePosition;

trait InvoicePositionHasManyTrait
{
    public function invoicePositions()
    {
        return $this->hasMany(InvoicePosition::class);
    }
}
