<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->delete();

        DB::table('permission_role')->insert(array (
            0 =>
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 =>
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            2 =>
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 =>
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            4 =>
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
        ));
    }
}
