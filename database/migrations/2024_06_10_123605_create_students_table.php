<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('tel');
            $table->string('qr_code')->nullable();
            $table->foreignId('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->string('ec_name');
            $table->string('ec_tel');
            $table->string('ec_relation');
            $table->string('wednesday')->nullable();
            $table->string('wednesday_evening')->nullable();
            $table->string('stay_overnight')->nullable();
            $table->string('thursday_morning')->nullable();
            $table->text('dietary_requirements')->nullable();
            $table->text('note')->nullable();
            $table->text('medicines')->nullable();
            $table->text('allergies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
