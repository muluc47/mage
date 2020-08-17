<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('owner')->nullable();
            $table->string('type')->nullable();
            $table->string('time')->nullable();
            $table->string('lpg')->nullable();
            $table->string('visit_date')->nullable();
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
        Schema::dropIfExists('processes');
    }
}
