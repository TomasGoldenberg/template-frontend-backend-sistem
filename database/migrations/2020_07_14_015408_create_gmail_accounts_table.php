<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGmailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmail_accounts', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->bigInteger("gmail_id")->unsigned();

            $table->string("account");

            $table->timestamps();

            $table->foreign("gmail_id")->references("id")->on("gmails")
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
        Schema::dropIfExists('gmail_accounts');
    }
}
