
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
              $table->increments('user_id');
              $table->string('email',40)->unique()->nullable();
              $table->string('password',200)->nullable();
              $table->string('first_name',40)->nullable();
              $table->string('last_name',40)->nullable();
              $table->string('mobile_number',20)->nullable();
              $table->text('address')->nullable();
              $table->string('city',20)->nullable();
              $table->string('state',20)->nullable();
              $table->string('country_code',20)->nullable();
              $table->unsignedInteger('current_plan_id')->nullable();
              $table->time('plan_activation_date')->nullable();
              $table->time('plan_expiration_date')->nullable();
              $table->string('user_token',40)->nullable();
              $table->boolean('status')->nullable();
              $table->string('Profile_Picture_Url',200)->nullable();
              $table->timestamps();
          });
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
