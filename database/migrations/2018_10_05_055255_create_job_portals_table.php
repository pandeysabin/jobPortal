<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPortalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_portals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('jTitle');
            $table->string('jDetails');
            $table->string('skillSet');
            $table->string('uID')->unique();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('job_portals');
    }
}
