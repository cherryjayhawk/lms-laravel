<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->string('member_name');
            $table->string('member_email');
            $table->string('member_address');
            $table->integer('book_id');
            $table->string('book_title');
            $table->string('book_author');
            $table->dateTime('borrowed_at');
            $table->dateTime('returned_at')->nullable();
            $table->string('status'); // not_returned, returned, returned_late
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
        Schema::dropIfExists('transactions');
    }
};
