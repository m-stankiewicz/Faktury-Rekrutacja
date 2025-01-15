<?php

namespace App\Models;

use App\Traits\Models\Invoice\Relations\InvoiceBelongsToTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePosition extends Model
{
    use HasFactory, InvoiceBelongsToTrait;

    protected $fillable = ['description', 'tax', 'amount', 'price'];
}
