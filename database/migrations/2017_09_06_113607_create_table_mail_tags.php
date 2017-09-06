<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMailTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mail_id');
            $table->string('key');
            $table->string('value')->nullable();

            $table->index('mail_id');
            $table->index('key');
            $table->index('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_tags');
    }
}
