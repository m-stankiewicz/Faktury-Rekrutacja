<?php

namespace App\Models;

use App\Traits\Relations\Models\Customer\CustomerBelongsToTrait;
use App\Traits\Scopes\Models\Customer\ScopeByCustomerTrait;
use App\Traits\Relations\Models\InvoicePosition\InvoicePositionHasManyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory, CustomerBelongsToTrait, InvoicePositionHasManyTrait, ScopeByCustomerTrait;

    protected $fillable = ['number', 'date_sale', 'date_receive'];
}
