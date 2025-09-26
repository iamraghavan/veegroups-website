<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('description', 160);
            $table->enum('company', ['Jay Vee Engineering', 'Jay Vee Structural Engineering Pvt Ltd', 'Jakuva Build Tech']);
            $table->string('location');
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}