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
        /** Schema::create permet de créer une table */
        Schema::create('ingredient_recipe', function (Blueprint $table) {

            $table->unsignedBigInteger('ingredient_id');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');

            $table->unsignedBigInteger('recipe_id');
            $table->foreign('recipe_id')->references('id')->on('recipes');

            $table->integer('amount');
            $table->string('unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_recipe', function (Blueprint $table)
        {
            $table->dropForeign('ingredient_recipe_ingredient_id_foreign');
            $table->dropColumn('ingredient_id');
        });
        Schema::dropIfExists('ingredient_recipe');
    }
};
