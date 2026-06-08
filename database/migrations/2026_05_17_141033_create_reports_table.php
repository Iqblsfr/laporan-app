<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');

            $table->text('description');

            $table->string('location');

            $table->enum('status', [
                'pending',
                'process',
                'done'
            ])->default('pending');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}