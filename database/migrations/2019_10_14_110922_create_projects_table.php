<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('project_banner');
            $table->string('project_name');
            $table->string('client_name');
            $table->string('project_url');
            $table->string('project_description');
            $table->unsignedBigInteger('category_id')->references('category_id')->on('project_categories')->onDelete('cascade');
            $table->unsignedBigInteger('type_id')->references('type_id')->on('project_types')->onDelete('cascade');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
