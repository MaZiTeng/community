<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organization_id')->unsigned();
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->string('title',255);
            $table->text('introduction')->nullable();
            $table->text('description')->nullabale();
            $table->tinyInteger('status')->unsigned();
            $table->tinyInteger('target')->unsigned();
            $table->mediumText('extra')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
