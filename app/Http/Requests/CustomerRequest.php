<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class CustomerRequest extends Request
{
    /**
     * Zwraca tablicę reguł walidacji.
     *
     * @return array
     */
    public function validationRules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email' . $this->route('customer'),
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ];
    }

    /**
     * Waliduje dane wejściowe i zwraca je jako tablicę po walidacji.
     *
     * @return array
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateResolved(): array
    {
        $validated = validator($this->all(), $this->validationRules())->validate();

        return $validated;
    }
}
