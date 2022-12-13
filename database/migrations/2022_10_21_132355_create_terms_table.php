<?php

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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained('users');

            $table->foreignId('doctor_id')->constrained('doctors');
            $table->boolean('is_done')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_active')->default(false);
            $table->date('date_visit');
            $table->time('start_visit');
            $table->time('end_visit');
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
        Schema::dropForeign('user_id_foreign');

        Schema::dropForeign('doctor_id_foreign');
        Schema::dropIfExists('comments');
    }
};