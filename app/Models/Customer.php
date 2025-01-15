<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Relations\Models\Invoice\InvoiceHasManyTrait;

class Customer extends Model
{
    use HasFactory, InvoiceHasManyTrait;
    
    protected $fillable = ['company_name', 'email', 'address', 'city', 'state', 'country'];
}