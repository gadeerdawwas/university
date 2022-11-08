<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('user_id_1')->nullable();
            $table->foreignId('user_id_2')->nullable();
            $table->foreignId('user_id_3')->nullable();
            $table->foreignId('user_id_4')->nullable();
            $table->foreignId('user_id_5')->nullable();
            $table->foreignId('user_id_6')->nullable();
            $table->foreignId('user_id');
            $table->boolean('status')->default(0);

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
        Schema::dropIfExists('groups');
    }
}
