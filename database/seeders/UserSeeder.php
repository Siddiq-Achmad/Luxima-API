<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Faker\Factory as Faker;
use Unsplash\HttpClient;
use Unsplash\Photo;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        HttpClient::init([
            'applicationId' => env('UNSPLASH_ACCESS_KEY'), // Key Anda di sini
            'secret' => env('UNSPLASH_SECRET_KEY'),
            'callbackUrl' => env('UNSPLASH_CALLBACK_URL'),
            'utmSource' => 'LUXIMA-API'
        ]);
        $faker = Faker::create();

        // Mengambil gambar avatar dari Unsplash
        $avatarPp = Photo::random(['query' => 'avatar', 'orientation' => 'squarish']);
        $avatarPpUrl = $avatarPp->urls['regular'];

        // Membuat Role
        $superAdminRole = Role::create(['name' => 'administrator']); // Role Superadmin
        $adminRole = Role::create(['name' => 'admin']);
        $vendorRole = Role::create(['name' => 'vendor']);
        $customerRole = Role::create(['name' => 'customer']);

        $actions = ['read', 'create', 'update', 'delete', 'approve'];
        $menus = ['config', 'role', 'permission', 'user', 'master', 'tenant', 'subscription', 'payment', 'vendor', 'service', 'transaction', 'invoice', 'report', 'article', 'event', 'booking', 'review'];


        // Membuat Permissions


        // $permissions = [
        //     //configs
        //     'create config',
        //     'read config',
        //     'update config',
        //     'delete config',
        //     //roles
        //     'create role',
        //     'read role',
        //     'update role',
        //     'delete role',
        //     //permissions
        //     'create permission',
        //     'read permission',
        //     'update permission',
        //     'delete permission',
        //     //users
        //     'create user',
        //     'read user',
        //     'update user',
        //     'delete user',
        //     //master
        //     'create master',
        //     'read master',
        //     'update master',
        //     'delete master',
        //     //tenant
        //     'create tenant',
        //     'read tenant',
        //     'update tenant',
        //     'delete tenant',
        //     //transaction
        //     'create transaction',
        //     'read transaction',
        //     'update transaction',
        //     'delete transaction',
        //     //article
        //     'create article',
        //     'read article',
        //     'update article',
        //     'delete article',
        //     //event
        //     'create event',
        //     'read event',
        //     'update event',
        //     'delete event',
        //     //booking
        //     'create booking',
        //     'read booking',
        //     'update booking',
        //     'delete booking',
        //     'approve booking',
        // ];
        foreach ($menus as $menu) {
            foreach ($actions as $action) {
                Permission::create(['name' => $action . ' ' . $menu]);
            }
        }

        // Menyebarkan Permissions ke Roles
        $adminRole->givePermissionTo(['create master', 'read master', 'update master', 'delete master', 'create article', 'read article', 'update article', 'delete article', 'create event', 'read event', 'update event', 'delete event', 'create invoice', 'read invoice', 'update invoice', 'delete invoice', 'create transaction', 'read transaction', 'update transaction', 'delete transaction', 'create report', 'read report', 'update report', 'delete report', 'create review', 'read review', 'update review', 'delete review']);
        $vendorRole->givePermissionTo(['create booking', 'update booking', 'read booking', 'delete booking', 'approve booking', 'create transaction', 'read transaction', 'update transaction', 'delete transaction', 'create service', 'read service', 'update service', 'delete service']);
        $customerRole->givePermissionTo(['create booking', 'read booking', 'update booking', 'delete booking', 'create transaction', 'read transaction', 'update transaction', 'delete transaction', 'create review', 'read review', 'update review', 'delete review']);
        $superAdminRole->givePermissionTo(Permission::all()); // Superadmin mendapat semua permission

        // Membuat Superadmin
        User::create([
            'name' => 'Super Admin',
            'email' => 'administrator@luxima.id',
            'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
            'avatar' => $avatarPpUrl
        ])->assignRole('administrator');

        //Membuat Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@luxima.id',
            'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
            'avatar' => $avatarPpUrl
        ])->assignRole('admin');

        User::create([
            'name' => 'Siddiq Achmad',
            'email' => 'siddiq@luxima.id',
            'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
            'avatar' => 'https://siddiq.luxima.id/img/avatars/me.jpg'
        ])->assignRole('admin');

        // Membuat Users biasa
        for ($i = 0; $i < 5; $i++) {
            $avatar = Photo::random(['query' => 'avatar', 'orientation' => 'squarish']);
            $avatarUrl = $avatar->urls['regular'];
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('12345678'), // Ganti dengan password yang sesuai
                'avatar' => $avatarUrl
            ]);

            // Menetapkan Role
            $user->assignRole($faker->randomElement(['admin', 'vendor', 'customer']));
        }
    }
}
