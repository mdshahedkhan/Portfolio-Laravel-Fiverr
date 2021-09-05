<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_mails', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email');
            $table->string('subject', 50);
            $table->text('message');
            $table->integer('phone_number');
            $table->enum('read_as', ['read', 'unread'])->default('unread');
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
        Schema::dropIfExists('contact_mails');
    }
}
