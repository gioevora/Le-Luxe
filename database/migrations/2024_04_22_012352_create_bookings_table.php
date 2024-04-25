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
        $table->string('fullname');
        $table->string('contact');
        $table->string('email')->unique();
        $table->date('date'); // Change to date type
        $table->time('time'); // Change to time type
        $table->string('fax');
        $table->json('services'); // Change to json type
        $table->text('message'); // Change to text type
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
