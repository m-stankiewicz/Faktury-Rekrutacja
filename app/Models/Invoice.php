<?php

namespace App\Models;

use App\Traits\Models\Customer\Relations\CustomerBelongsToTrait;
use App\Traits\Models\InvoicePosition\Relations\InvoicePositionHasManyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory, CustomerBelongsToTrait, InvoicePositionHasManyTrait;

    protected $fillable = ['number', 'date_sale', 'date_receive'];
}
