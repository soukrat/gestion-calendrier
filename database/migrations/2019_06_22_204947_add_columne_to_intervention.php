<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumneToIntervention extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interventions', function (Blueprint $table) {
            $table->bigInteger('intervenant_id')->unsigned();
            $table->foreign('intervenant_id')->references('id')->on('intervenants');
            $table->bigInteger('classe_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->bigInteger('salle_id')->unsigned();
            $table->foreign('salle_id')->references('id')->on('salles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interventions', function (Blueprint $table) {
            $table->dropForeign(['intervenant_id']);
            $table->dropColumn('intervenant_id');

            $table->dropForeign(['classe_id']);
            $table->dropColumn('classe_id');

            $table->dropForeign(['salle_id']);
            $table->dropColumn('salle_id');
        });
    }
}
