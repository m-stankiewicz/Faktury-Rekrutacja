<?php

namespace Tests\Unit;

use App\Http\Requests\CustomerRequest;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class CustomerRequestTest extends TestCase
{
    /** @test */
    public function it_validates_valid_data()
    {
        $data = [
            'company_name' => 'Test Company',
            'email' => 'test@example.com',
            'address' => '123 Test Street',
            'city' => 'Test City',
            'state' => 'Test State',
            'country' => 'Test Country',
        ];

        // Tworzymy instancję CustomerRequest
        $request = new CustomerRequest();
        $request->merge($data); // Wstawiamy dane do requestu

        // Symulujemy walidację
        $validated = $request->validateResolved();

        $this->assertEquals($data, $validated);
    }

    /** @test */
    public function it_throws_validation_exception_for_invalid_data()
    {
        $this->expectException(ValidationException::class);

        $data = [
            'company_name' => '', // Puste pole, wymaga `required`
            'email' => 'invalid-email', // Nieprawidłowy format e-maila
        ];

        $request = new CustomerRequest();
        $request->merge($data);

        $request->validateResolved(); // To powinno rzucić ValidationException
    }

    /** @test */
    public function it_allows_null_optional_fields()
    {
        $data = [
            'company_name' => 'Test Company',
            'email' => 'test@example.com',
            'address' => null, // Pola opcjonalne
            'city' => null,
            'state' => null,
            'country' => null,
        ];

        $request = new CustomerRequest();
        $request->merge($data);

        $validated = $request->validateResolved();

        $this->assertEquals($data, $validated);
    }
}
