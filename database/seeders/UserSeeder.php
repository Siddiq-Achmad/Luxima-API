<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Membuat Role
        $superAdminRole = Role::create(['name' => 'administrator']); // Role Superadmin
        $adminRole = Role::create(['name' => 'admin']);
        $vendorRole = Role::create(['name' => 'vendor']);
        $customerRole = Role::create(['name' => 'customer']);


        // Membuat Permissions
        $permissions = ['create booking', 'edit booking', 'delete booking', 'view bookings'];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Menyebarkan Permissions ke Roles
        $adminRole->givePermissionTo(Permission::all());
        $vendorRole->givePermissionTo(['create booking', 'edit booking', 'view bookings', 'delete booking']);
        $customerRole->givePermissionTo(['create booking', 'view bookings']);
        $superAdminRole->givePermissionTo(Permission::all()); // Superadmin mendapat semua permission

        // Membuat Superadmin
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@luxima.id',
            'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
        ])->assignRole('administrator');

        // Membuat Users biasa
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
            ]);

            // Menetapkan Role
            $user->assignRole($faker->randomElement(['admin', 'vendor', 'customer']));
        }
    }
}
