<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectListTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_project_list', function (Blueprint $table) {
            $table->increments('id');
            $table->text('project_title');
            $table->string('technology_used');
            $table->longText('description');
            $table->dateTime('start_date');
            $table->dateTime('due_date');
            $table->text('deliverable_daysNo');
            $table->string('documents');
            $table->string('modulelist');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_project_list');
    }
}
