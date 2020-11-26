<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new User();
        $user->first_name = 'John';
        $user->last_name = 'Doe';
        $user->date_of_birth = (new DateTime())->setDate(1990, 10, 5);
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        (User::whereEmail('admin@admin.com'))->delete();
    }
}
