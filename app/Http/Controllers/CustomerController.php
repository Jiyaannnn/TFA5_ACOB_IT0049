<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // This temporary array stands in for customer rows until a later database activity.
        $customers = [
            ['code' => 'CUS-001', 'name' => 'Santos Family Residence', 'location' => 'Quezon City', 'project' => 'Rooftop solar', 'capacity' => '5.5 kWp', 'status' => 'Site survey'],
            ['code' => 'CUS-002', 'name' => 'Bayanihan Grocery', 'location' => 'Marikina City', 'project' => 'Retail solar', 'capacity' => '8.0 kWp', 'status' => 'Quotation'],
            ['code' => 'CUS-003', 'name' => 'Del Rosario Learning Center', 'location' => 'Antipolo City', 'project' => 'School solar', 'capacity' => '12.0 kWp', 'status' => 'For installation'],
            ['code' => 'CUS-004', 'name' => 'Mabuhay Bakehouse', 'location' => 'Pasig City', 'project' => 'Commercial solar', 'capacity' => '6.6 kWp', 'status' => 'Installed'],
            ['code' => 'CUS-005', 'name' => 'Riverbend Farm', 'location' => 'San Mateo, Rizal', 'project' => 'Hybrid solar', 'capacity' => '10.0 kWp', 'status' => 'Monitoring'],
        ];

        // Group the same records for the interactive banner; counts never need manual updates.
        $groups = collect($customers)->countBy('status')->all();

        return view('pages.customers', ['title' => 'Customer Accounts', 'activePage' => 'customers', 'customers' => $customers, 'groups' => $groups]);
    }
}
