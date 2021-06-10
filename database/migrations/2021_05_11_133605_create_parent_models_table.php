<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('parent_models')) {
            Schema::create('parent_models', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('parent_id');
                $table->string('identity_proof');
                $table->timestamps();
            });
        }

        Schema::table('parent_models', function (Blueprint $table) {
           $table->foreignId('student_id');
           $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
           $table->foreignId('teacher_id');
           $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_models');
    }
}
