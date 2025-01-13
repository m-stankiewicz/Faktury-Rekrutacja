<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoicePosition extends Model
{
    protected $fillable = ['invoice_id', 'description', 'tax', 'amount', 'price'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
