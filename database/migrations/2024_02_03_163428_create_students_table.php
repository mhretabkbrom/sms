<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('email');
            $table->date('date_of_birth'); 
          
           $table->unsignedInteger('Department_id');
            $table->foreign('Department_id')->references('Department_id')->on('departments')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
