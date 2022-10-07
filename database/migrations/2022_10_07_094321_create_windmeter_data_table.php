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
        Schema::create('windmeter_data', function (Blueprint $table) {
            $table->id();
            $table->json('original_data');
            $table->datetime('measured_at')->nullable();
            $table->unsignedBigInteger('spot_id')->nullable();
            $table->foreign('spot_id')->references('id')->on('spots');
            $table->string('direction')->nullable();
            $table->float('knots')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('windmeter_data');
    }
};
