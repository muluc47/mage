<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('letter')->nullable();
            $table->string('is_pay')->nullable();
            $table->string('reserved')->nullable();
            $table->string('reserve_status')->nullable();
            $table->string('expertise')->nullable();
            $table->string('expertise_value')->nullable();
            $table->string('contract')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('rent_status')->nullable();
            $table->string('rent_time')->nullable();
            $table->string('rent_cost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
