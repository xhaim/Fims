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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('applicant');
            $table->string('address');
            $table->string('location');
            $table->string('project_description');
            $table->string('contact');
            $table->string('actual_land_area_of_farm');
            $table->string('date_inspected');
            $table->string('inspector');
            $table->double('fuel_requirement', 10, 2);
            $table->double('hours_of_operation', 10, 2);
            $table->json('equipment'); // Assuming equipment is stored as JSON
            $table->double('area', 10, 2);
            $table->double('rental_rate', 10, 2);
            $table->double('total_rental_amount', 10, 2);
            $table->string('payment');
            $table->string('or_number');
            $table->date('payment_date');
            $table->double('payment_amount', 10, 2);
            $table->string('municipal_treasurer');
            $table->string('source_of_fund');
            $table->double('funds_available', 10, 2);
            $table->string('municipal_accountant');
            $table->string('municipal_budget_officer');
            $table->string('municipal_mayor');
            $table->string('schedule_of_operation');
            $table->string('plate_number_tractor');
            $table->string('mao_tractor_incharge');
            $table->double('actual_land_area_served', 10, 2);
            $table->double('actual_hours_of_operation', 10, 2);
            $table->text('remarks');
            $table->string('mo_field_inspector');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
