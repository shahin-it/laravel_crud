<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            return;
        }
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("type");
            $table->rememberToken();
            $table->timestamps();
        });
        \App\Models\User::create([
            'name'=> 'System Administrator',
            'email'=> 'admin@kingcommerce.com',
            'type'=> 'admin',
            'password'=> '21232f297a57a5a743894a0e4a801fc3'//admin
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
