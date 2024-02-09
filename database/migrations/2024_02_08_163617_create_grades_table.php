<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('Grade_id');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')
                ->onUpdate('cascade')->onDelete('cascade');
                
            $table->unsignedInteger('Semester_id');
                $table->foreign('Semester_id')->references('Semester_id')->on('semesters')
                    ->onUpdate('cascade')->onDelete('cascade');
    

            $table->unsignedInteger('Course_id');
                    $table->foreign('Course_id')->references('Course_id')->on('courses')
                        ->onUpdate('cascade')->onDelete('cascade');
                
             $table->integer('Mark');
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
        Schema::dropIfExists('grades');
    }
}
