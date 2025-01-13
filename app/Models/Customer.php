<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['company_name', 'email', 'address', 'city', 'state', 'country'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}