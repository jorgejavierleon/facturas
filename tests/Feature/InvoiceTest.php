<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvoiceTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function it_show_the_create_invlice_form()
    {
        $this->get('/invoices/create')->assertStatus(200);
    }

    /**
     * @return void
     * @test
     */
    public function it_list_all_invoices()
    {
        $invoices = factory(Invoice::class, 6)->create();
        $this->get('invoices')->assertJson($invoices->toArray());
    }
}
