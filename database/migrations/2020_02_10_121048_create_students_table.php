<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('student_id');
            $table->string('student_name');
            $table->char('student_nisn', 10);
            $table->string('student_place_of_birth');
            $table->date('student_date_of_birth');
            $table->enum('student_gender', ['L', 'P']);
            $table->integer('student_sequence_in_family');
            $table->text('student_address');
            $table->string('student_phone');
            $table->string('student_email');
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
