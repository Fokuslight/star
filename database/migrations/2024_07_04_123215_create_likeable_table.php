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
        // post_profile_likes
        // comment_profile_likes
        Schema::create('likeable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->morphs('likeable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likeable');
    }
};
