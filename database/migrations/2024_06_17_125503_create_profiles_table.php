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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('phone')->index()->nullable();
            $table->boolean('is_married')->default(false);
            $table->unsignedSmallInteger('status')->default(1);
            $table->date('birthed_at')->index()->nullable();
            $table->string('login')->unique()->nullable();

            $table->morphs('profileable');
//            $table->foreignId('user_id')->index()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
