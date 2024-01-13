<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToShippingBalancesTable extends Migration
{
    public function up()
    {
        Schema::table('shipping_balances', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_4764330')->references('id')->on('users');
        });
    }
}
