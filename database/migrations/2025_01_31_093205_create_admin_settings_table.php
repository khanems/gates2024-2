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
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('tagline')->nullable();
            $table->string('dark_logo')->nullable();  // Dark logo
            $table->string('light_logo')->nullable(); // Light logo
            $table->string('favicon')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('country')->nullable(); // Country
            $table->string('phone_number')->nullable(); // Phone number
            $table->string('timezone')->nullable(); // Timezone
            $table->string('currency')->nullable(); // Currency code (e.g., USD, EUR)
            $table->string('currency_symbol')->nullable(); // Currency symbol (e.g., $, €, £)
            $table->string('currency_pre_symbol')->nullable(); // Whether to place the symbol before the amount (e.g., "$100")
            $table->string('currency_post_symbol')->nullable(); // Whether to place the symbol after the amount (e.g., "100$")
            $table->string('date_time_style')->nullable(); // Date and time style (e.g., 'Y-m-d H:i:s')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_settings');
    }
};
