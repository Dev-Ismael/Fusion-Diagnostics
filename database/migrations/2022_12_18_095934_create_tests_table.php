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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255 )->index();
            $table->string('slug', 255)->index();
            $table->string('code', 100 )->nullable();
            $table->string('time', 100 )->nullable();
            $table->string('components', 255 )->nullable();
            $table->string('specimen', 100 )->nullable();
            $table->string('instructions', 1000 )->nullable();
            $table->string('billing_codes', 100 )->nullable();
            $table->text('seo');
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
        Schema::dropIfExists('tests');
    }
};
