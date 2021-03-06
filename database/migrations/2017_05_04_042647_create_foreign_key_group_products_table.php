<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyGroupProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creando una llave foranea para el precio en la tabla producto
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price_id')->unsigned()->change();
            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
      Schema::table('products', function (Blueprint $table) {
          $table->dropForeign('products_price_id_foreign');
      });

    }
}
