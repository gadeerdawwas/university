<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisorinfos', function (Blueprint $table) {
            $table->id();
            $table->string('office_id')->nullable();
            $table->string('college')->nullable();
            $table->string('Specialization')->nullable();
            $table->text('interests')->nullable();
            $table->text('cv')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('supervisorinfos');
    }
}
