<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no');
            $table->string('registration_date');
            $table->string('registration_type');
            $table->string('salutation');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('appellation')->nullable();
            $table->string('barangay');
            $table->string('contact_no');
            $table->string('resident');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('gender')->nullable();
            $table->string('civil_status');
            $table->string('no_of_children');
            $table->json('nationality')->nullable();
            $table->json('education')->nullable();
            $table->string('person_to_notify')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->json('incomeSource')->nullable();
            $table->json('OtherincomeSource')->nullable();
          // M&A 1
          $table->text('membership')->nullable();
          $table->integer('member_since')->nullable();
          $table->text('position')->nullable();
         

          // M&A 2
          $table->text('membership2')->nullable();
          $table->integer('member_since2')->nullable(); 
          $table->text('position2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
