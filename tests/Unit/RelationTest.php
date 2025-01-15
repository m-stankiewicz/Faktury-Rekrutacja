<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoicePosition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RelationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_checks_customer_has_many_invoices()
    {
        $customer = Customer::factory()->create();
        $invoice1 = Invoice::factory()->create(['customer_id' => $customer->id]);
        $invoice2 = Invoice::factory()->create(['customer_id' => $customer->id]);

        $this->assertCount(2, $customer->invoices);
        $this->assertTrue($customer->invoices->contains($invoice1));
        $this->assertTrue($customer->invoices->contains($invoice2));
    }

    /** @test */
    public function it_checks_invoice_belongs_to_customer()
    {
        $customer = Customer::factory()->create();
        $invoice = Invoice::factory()->create(['customer_id' => $customer->id]);

        $this->assertEquals($customer->id, $invoice->customer->id);
    }

    /** @test */
    public function it_checks_invoice_has_many_invoice_positions()
    {
        $customer = Customer::factory()->create(); // Twórz Customer
        $invoice = Invoice::factory()->create(['customer_id' => $customer->id]); // Przekaż customer_id
        $position1 = InvoicePosition::factory()->create(['invoice_id' => $invoice->id]);
        $position2 = InvoicePosition::factory()->create(['invoice_id' => $invoice->id]);

        $this->assertCount(2, $invoice->invoicePositions);
        $this->assertTrue($invoice->invoicePositions->contains($position1));
        $this->assertTrue($invoice->invoicePositions->contains($position2));
    }


    /** @test */
    public function it_checks_invoice_position_belongs_to_invoice()
    {
        $customer = Customer::factory()->create(); // Twórz Customer
        $invoice = Invoice::factory()->create(['customer_id' => $customer->id]); // Przekaż customer_id
        $position = InvoicePosition::factory()->create(['invoice_id' => $invoice->id]);

        $this->assertEquals($invoice->id, $position->invoice->id);
    }

}
