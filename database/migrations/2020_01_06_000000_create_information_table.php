<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'information';

    /**
     * Run the migrations.
     * @table information
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('location_info');
            $table->date('date');
            $table->string('company_name');
            $table->string('info')->nullable()->default(null);
            $table->string('written_test')->nullable()->default(null);
            $table->string('written_test_content')->nullable()->default(null);
            $table->string('interview')->nullable()->default(null);
            $table->string('industry')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('recruited_occupation')->nullable()->default(null);
            $table->string('qualification')->nullable()->default(null);
            $table->string('age_limit')->nullable()->default(null);
            $table->string('grade')->nullable()->default(null);
            $table->string('graduate')->nullable()->default(null);
            $table->string('condidate')->nullable()->default(null);
            $table->string('job_vote')->nullable()->default(null);
            $table->string('part_time_job')->nullable()->default(null);
            $table->string('intership')->nullable()->default(null);
            $table->string('logo')->default('/Template/Gui2019/img/sample.png');
            $table->string('url')->nullable()->default('#');

            $table->unique(["id"], 'id');

            $table->unique(["id"], 'information_id_unique');
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
