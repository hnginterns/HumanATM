<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('wallet_id');
            $table->string('email', 100)->unique();
            $table->string('referral_id')->nullable();
             $table->string('sponsor_id')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('password', 200);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
             'email' => "oriebizline@gmail.com",
             'wallet_id' => substr(md5(uniqid(rand(1, 1000))) , 0, 7),
             'name' => "Orie Chinedu",
             'password' => bcrypt('123456'),
             'role' => 1,
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}