<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));
    
            $dosen = User::create(array_merge([
                'email' => 'dosen@gmail.com',
                'name' => 'dosen',
            ], $default_user_value));
    
            $alumni = User::create(array_merge([
                'email' => 'alumni@gmail.com',
                'name' => 'alumni',
            ], $default_user_value));
    
            $mahasiswa = User::create(array_merge([
                'email' => 'mahasiswa@gmail.com',
                'name' => 'mahasiswa',
            ], $default_user_value));
    
            $role_admin = Role::create(['name' => 'admin']);
            $role_dosen = Role::create(['name' => 'dosen']);
            $role_alumni = Role::create(['name' => 'alumni']);
            $role_mahasiwa = Role::create(['name' => 'mahasiswa']);
    
            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('delete role');
    
            $admin->assignRole('admin');
            $dosen->assignRole('dosen');
            $alumni->assignRole('alumni');
            $mahasiswa->assignRole('mahasiswa');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        

    }
}
