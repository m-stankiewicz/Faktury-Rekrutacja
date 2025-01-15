<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InvoiceScopeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_filters_invoices_by_customer_id()
    {
        // Tworzymy klientów
        $customer1 = Customer::factory()->create();
        $customer2 = Customer::factory()->create();

        // Tworzymy faktury dla obu klientów
        Invoice::factory()->count(3)->create(['customer_id' => $customer1->id]);
        Invoice::factory()->count(2)->create(['customer_id' => $customer2->id]);

        // Wywołujemy scope byCustomer dla customer1
        $invoicesForCustomer1 = Invoice::byCustomer($customer1->id)->get();

        // Sprawdzamy, czy zwrócono właściwe faktury
        $this->assertCount(3, $invoicesForCustomer1);
        $this->assertTrue($invoicesForCustomer1->pluck('customer_id')->contains($customer1->id));
        $this->assertFalse($invoicesForCustomer1->pluck('customer_id')->contains($customer2->id));
    }
}
