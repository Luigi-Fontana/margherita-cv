<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->foreignId('gender_id')->constrained();
            $table->date('birthday');
            $table->string('citizenship', 50)->nullable();
            $table->foreignId('study_id')->constrained();
            $table->string('city', 50);
            $table->string('province', 50);
            $table->boolean('own_car')->nullable();
            $table->boolean('interview')->default(0);
            $table->unsignedTinyInteger('interview_evaluation')->nullable();
            $table->boolean('hired')->default(0);
            $table->text('references')->nullable();
            $table->text('notes')->nullable();
            $table->date('cv_date');
            $table->string('cv_file');
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
        Schema::dropIfExists('candidates');
    }
}
