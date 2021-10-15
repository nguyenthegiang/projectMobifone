<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentaries', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->longText('title');
            $table->dateTime('applyTime', 0);
            $table->longText('content');
            $table->string('region');
            $table->integer('port1090_news_id');
            $table->string('fileLink');
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
        Schema::dropIfExists('documentaries');
    }
}
