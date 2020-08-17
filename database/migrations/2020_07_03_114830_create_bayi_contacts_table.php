<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayiContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayi_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('kep');
            $table->string('owner');
            $table->string('owner_phone');
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
        Schema::dropIfExists('bayi_contacts');
    }
}
