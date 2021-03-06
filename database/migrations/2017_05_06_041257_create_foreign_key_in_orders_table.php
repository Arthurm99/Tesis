<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creando la llave foranea client_id en la tabla orders
        Schema::table('orders', function (Blueprint $table) {

            $table->integer('client_id')->unsigned()->change();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
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

        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign('orders_client_id_foreign');

        });
    }
}
