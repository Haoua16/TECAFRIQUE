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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('sommemission');
            $table->unsignedBigInteger('commandes_id');
            $table->foreign('commandes_id')
            ->references('id')
            ->on('commandes')
            ->onDelete('cascade');
            $table->unsignedBigInteger('commissions_id');
            $table->foreign('commissions_id')
            ->references('id')
            ->on('commissions')
            ->onDelete('cascade');
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
        Schema::dropIfExists('missions');
    }
};
