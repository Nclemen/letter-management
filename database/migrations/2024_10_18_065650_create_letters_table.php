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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->nullable()->constrained('senders')->nullOnDelete(); // Link to sender
            $table->foreignId('recipient_id')->nullable()->constrained('recipients')->nullOnDelete(); // Link to recipient
            $table->date('sent_date'); // Date the letter was sent
            $table->date('expiration_date')->nullable(); // Optional expiration date
            $table->text('description'); // Description of the message
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
