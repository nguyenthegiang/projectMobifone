<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reports', function (Blueprint $table) {
            $table->id();
            $table->string('dealerCode');
            $table->string('dealerName');
            $table->integer('mobiez');
            $table->integer('airtime');
            $table->integer('cardCode');
            $table->integer('card10');
            $table->integer('card20');
            $table->integer('card30');
            $table->integer('card50');
            $table->integer('card100');
            $table->integer('card200');
            $table->integer('card300');
            $table->integer('card500');
            $table->integer('province_id');
            $table->integer('store_id');
            $table->integer('reason_id');
            $table->integer('revenueType_id');
            $table->integer('reportType_id');
            $table->string('evaluation');
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
        Schema::dropIfExists('tbl_reports');
    }
}
