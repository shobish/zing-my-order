<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slection_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('category');
            $table->string('pname');
            $table->string('pdes');
            $table->string('pprice');

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
        Schema::dropIfExists('slection_models');
    }
};
