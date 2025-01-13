<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    protected $fillable = ['customer_id', 'number', 'date_sale', 'date_receive'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function positions()
    {
        return $this->hasMany(InvoicePosition::class);
    }
}
