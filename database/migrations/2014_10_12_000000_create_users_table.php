<?php

use App\Enums\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email', 255)->unique();
            $table->string('phone_number', 20)->nullable()->unique();
            $table->string('pesel')->nullable()->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('city', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->Integer('street_number')->nullable();
            $table->Integer('apartment_number')->nullable();
            $table->string('postcode', 20)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', [UserRole::ADMIN->value, UserRole::WORKER->value, UserRole::USER->value,])->default(UserRole::USER->value);
            $table->string('password');
            $table->rememberToken();
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
};