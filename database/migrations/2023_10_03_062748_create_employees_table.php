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
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id')->nullable();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('laddress')->nullable();
            $table->string('paddress')->nullable();
            $table->string('dept')->nullable();
            $table->string('designation')->nullable();
            $table->date('date_join')->nullable();
            $table->string('salary')->nullable();
            $table->string('hname')->nullable();
            $table->string('acnumber')->nullable();
            $table->string('bname')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('pan')->nullable();
            $table->string('branch')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
