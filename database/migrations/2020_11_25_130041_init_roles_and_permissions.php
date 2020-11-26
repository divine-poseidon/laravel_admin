<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InitRolesAndPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Permission::create(['name' => 'createUser']);
        Permission::create(['name' => 'updateUser']);
        Permission::create(['name' => 'readUser']);
        Permission::create(['name' => 'deleteUser']);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('createUser', 'updateUser', 'readUser', 'deleteUser');

        $creator = Role::create(['name' => 'creator']);
        $creator->givePermissionTo('createUser', 'readUser');

        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo('updateUser', 'readUser');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {

    }
}
