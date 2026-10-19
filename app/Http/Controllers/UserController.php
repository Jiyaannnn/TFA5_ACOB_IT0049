<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Sample team accounts are read only; no credentials are stored in this array.
        $users = [
            ['code' => 'USR-001', 'username' => 'jacob', 'name' => 'Jian Acob', 'role' => 'System administrator', 'team' => 'Operations', 'location' => 'Quezon City', 'status' => 'Active'],
            ['code' => 'USR-002', 'username' => 'ivicencio', 'name' => 'Isaiah Vicencio', 'role' => 'Sales coordinator', 'team' => 'Sales', 'location' => 'Quezon City', 'status' => 'Active'],
            ['code' => 'USR-003', 'username' => 'abarcelona', 'name' => 'Aaron Barcelona', 'role' => 'Solar technician', 'team' => 'Installation', 'location' => 'Marikina City', 'status' => 'Active'],
            ['code' => 'USR-004', 'username' => 'ajamito', 'name' => 'Amiel Jamito', 'role' => 'Site surveyor', 'team' => 'Engineering', 'location' => 'Antipolo City', 'status' => 'Active'],
            ['code' => 'USR-005', 'username' => 'smacaldo', 'name' => 'Sean Macaldo', 'role' => 'Inventory assistant', 'team' => 'Warehouse', 'location' => 'Pasig City', 'status' => 'Active'],
        ];

        // Group the same records for the interactive banner; counts never need manual updates.
        $groups = collect($users)->countBy('team')->all();

        return view('pages.users', ['title' => 'User Accounts', 'activePage' => 'users', 'users' => $users, 'groups' => $groups]);
    }
}
