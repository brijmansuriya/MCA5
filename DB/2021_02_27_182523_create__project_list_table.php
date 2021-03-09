<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project_list', function (Blueprint $table) {
            $table->primary('id');
            $table->text('project_title', 100);
            $table->multiLineString('technology_used', 100);
            $table->longText('description', 100);
            $table->dateTime('start_date');
            $table->dateTime('due_date');
            $table->text('deliverable_daysNo', 100);
            $table->string('documents', 100);
            $table->multiLineString('modulelist', 100);
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
        Schema::dropIfExists('_project_list');
    }
}
