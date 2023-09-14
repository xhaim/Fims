<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
        $table->string('association_name'); // Change 'name' to 'association_name'
        $table->string('barangay'); // Add 'barangay'
        $table->string('contact_number'); // Add 'contact_number'
        $table->string('chairman'); // Add 'chairman'
        $table->integer('number_of_farmers'); // Add 'number_of_farmers'
        $table->date('registered_in_date'); // Add 'registered_in_date'
        $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};