<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenants = [
            [
                'id' => 1,
                'name' => 'Muhuri Web',
                'domain' => 'muhuri-web.mkrdev.xyz',
                'workspace' => 'muhuri-web',
                'allowed_domains' => ['muhuri-web.mkrdev.xyz' => 'muhuri-web.mkrdev.xyz'],
                'is_active' => true
            ]
        ];

        foreach ($tenants as $tenant) {
            Tenant::updateOrCreate(['id' => $tenant['id']], $tenant);
        }
    }
}
