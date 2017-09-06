<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMailAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mail_id');
            $table->string('path');
            $table->string('name');
            $table->string('ext');
            $table->integer('size');

            $table->index('mail_id');
            $table->index('path');
            $table->index('name');
            $table->index('ext');
            $table->index('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_attachments');
    }
}
