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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // ! CHECK nullable(), cascadeOnDelete(), cascadeOnUpdate(), AND nullOnDelete() IF ANY DATABASE-RELATED ERRORS/BUGS OCCUR
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained(table: 'users', indexName: 'bookings_user_id')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('desk_id')
                  ->nullable()
                  ->constrained(table: 'desks', indexName: 'bookings_desk_id')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->date('date');
            $table->boolean('is_canceled')->default('0');
            $table->boolean('is_archived')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
