<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
    ];
    /**
     * Seed the application's database.
     */
    public function run()
    {

        foreach ($this->permissions as $permission){
            Permission::create(['name '=>$permission]);
        }
        // User::factory(10)->create();

        //Create admin and assign specific role to the account.
        $user = User::create([
            'name'=> 'Foodmyadmin',
            'email'=> 'foodmyadmin@gmail.com',
            'password'=> Hash::make('foodmyadmin123')
        ]);

        $role = Role::create(['name' => 'admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
