<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert data
        DB::table('users')->insert(array(
            'email' => 'nebs@gmail.com',
            'password' => bcrypt('nebs123'),
            'remember_token' => 666,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
        
        DB::table('users')->insert(array(
            'email' => 'dunjah2@hotmail.com',
            'password' => bcrypt('cobreti3'),
            'remember_token' => 777,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
