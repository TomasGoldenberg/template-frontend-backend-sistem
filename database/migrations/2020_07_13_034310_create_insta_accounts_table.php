<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstaAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insta_accounts', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->bigInteger("instagram_id")->unsigned();

            $table->string("account");

            $table->timestamps();

            $table->foreign("instagram_id")->references("id")->on("instagrams")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insta_accounts');
    }
}
