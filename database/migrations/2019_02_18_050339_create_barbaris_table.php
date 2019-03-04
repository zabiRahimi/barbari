<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbaris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 50);
            $table->string('mobail' , 12);
            $table->string('tel' , 13);
            $table->string('company' , 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbaris');
    }
}
