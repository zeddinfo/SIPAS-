<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MailVersions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('mails_id')->references('id')->on('mails')->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();
            $table->foreignId('file_id')->references('id')->on('files')->onUpdate('cascade')->onDelete('cascade');
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
    }
}
