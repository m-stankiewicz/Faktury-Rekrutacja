<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('company_name')->get();
        return view('customers.index', compact('customers'));
    }
}

