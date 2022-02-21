<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('user_package_id');
            $table->decimal('profit_amount');
            $table->decimal('profit_percentage');
            $table->date('profit_date');
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
        Schema::dropIfExists('user_profits');
    }
}
