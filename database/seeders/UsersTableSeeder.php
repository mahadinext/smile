<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::firstOrCreate([
            'approved' => 1,
            'created_at' => NULL,
            'deleted_at' => NULL,
            'email' => 'admin@fundednext.com',
            'email_verified_at' => NULL,
            'id' => 1,
            'name' => 'Admin',
            'password' => '$2y$10$hgrJ3sZkf.EvTOBdsyX1ueRcPZC7wLZHyOgLNgKCXs5ciLNOHrFWi',
            'remember_token' => 'bQmUJrxGKc6oMXYfcR5HOMVgHlGnLhZQP4Q86dKqfX6xMTo62nA2kmjXrTpU',
            'updated_at' => NULL,
        ]);
    }
}
