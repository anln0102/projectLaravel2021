<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'students';

    /**
     * Run the migrations.
     * @table students
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('student_code');
            $table->string('name');
            $table->string('password');
            $table->string('picture')->nullable()->default(null);
            $table->string('email');
            $table->string('seminar_room')->nullable()->default(null);
            $table->string('grade');
            $table->string('resume')->nullable()->default(null);
            $table->tinyInteger('isAdmin')->nullable()->default(null);
            $table->string('remember_token')->nullable()->default(null);

            $table->unique(["student_code"], 'students_student_code_unique');

            $table->unique(["student_code"], 'student_code');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
