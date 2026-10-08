<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('space_id')->constrained()->cascadeOnDelete();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('status')->default('pending'); // pending, confirmed, checked_in, completed, cancelled, expired, no_show
            $table->integer('total_price')->default(0);
            $table->text('notes')->nullable();
            $table->dateTime('check_in_time')->nullable();
            $table->dateTime('check_out_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Prevent overlapping bookings visually at DB level index is hard for ranges without Postgres exclusion constraints. 
            // We will rely on server validation + row locking.
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
