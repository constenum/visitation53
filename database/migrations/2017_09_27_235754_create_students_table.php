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
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('preferred_name')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('telephone_number')->nullable();
            $table->integer('grade')->unsigned()->nullable();
            $table->string('phone_type')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            /**
             * Foreign Keys
             */
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('students_school_id_foreign');
        });

        Schema::dropIfExists('students');
    }
}
