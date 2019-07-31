<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dataintake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('health_center')->nullable();
            $table->string('guardian_name');
            $table->string('weight');
            $table->string('bp');
            $table->string('menopause');
            $table->string('history');
            $table->string('no_of_children');
            $table->string('other_illness');
            $table->string('protection_used');
            $table->string('taken_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
