<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (!Schema::hasTable('programmes')) {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('total_course');
            $table->string('fee');
            $table->timestamps();
        });
       }
       Schema::table('programmes', function (Blueprint $table) {

        $table->foreignId('student_id');
        $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');

    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programmes');
    }
}
