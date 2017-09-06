<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMailRecipients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_recipients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mail_id');
            $table->string('email');
            $table->string('name')->nullable();
            $table->string('type')->default('recipient');

            $table->index('mail_id');
            $table->index('email');
            $table->index('name');
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_recipients');
    }
}
