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
        Schema::create('associations', function (Blueprint $table) {
            
                $table->id();
                $table->string('name');
                $table->string('barangay');
                $table->string('contact_number');
                $table->string('chairman');
                $table->string('name_of_association');
                $table->string('number_of_farmers');
                $table->string('registered_on_date_');
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
