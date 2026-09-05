<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('floor_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('type'); // hot_desk, dedicated_desk, private_office, meeting_room
            $table->integer('capacity')->default(1);
            
            // Pricing in cents/smallest currency unit
            $table->integer('hourly_price')->nullable();
            $table->integer('daily_price')->nullable();
            $table->integer('monthly_price')->nullable();
            
            $table->string('status')->default('available'); // available, maintenance, unavailable
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spaces');
    }
};
