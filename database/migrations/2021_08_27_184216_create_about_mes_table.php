<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('create_by');
            $table->string('name', 80)->unique();
            $table->string('short_story', 100);
            $table->string('email_address')->unique();
            $table->string('mobile');
            $table->text('about_me');
            $table->string('download_resume');
            $table->string('signature', 255);
            $table->string('avatar', 255);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->foreign('create_by')->on('users')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_mes');
    }
}
