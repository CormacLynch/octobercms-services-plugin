<?php

namespace GetRight\Services\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('getright_services_services', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 55);
            $table->text('text');
            $table->string('link');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('getright_services_services');
    }
}
