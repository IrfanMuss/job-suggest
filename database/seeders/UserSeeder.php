<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use App\Models\Auth\UserRole;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $rolesJson = database_path('seeders/source/Roles.json');
        $roles     = Json::decode(File::get($rolesJson));

        foreach ($roles as $role) {
            UserRole::create([
                'id'   => $role['id'],
                'name' => $role['name'],
            ]);
        }

        $accountsJson = database_path('seeders/source/Accounts.json');
        $accounts     = Json::decode(File::get($accountsJson));

        foreach ($accounts as $account) {
            User::create([
                'id'        => $account['id'],
                'name'      => $account['name'],
                'username'  => $account['username'],
                'full_name' => $account['full_name'],
                'division'  => $account['division'],
                'password'  => Hash::make($account['password']),
                'role'      => $account['role'],
            ]);
        }
    }
}
