<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'product-list',
           'product-create',
           'product-edit',
           'product-delete',

           'company-list',
           'company-create',
           'company-edit',
           'company-delete',

           'investment-list',
           'investment-create',
           'investment-edit',
           'investment-delete',

           'investors-list',
           'investors-create',
           'investors-edit',
           'investors-delete',
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
