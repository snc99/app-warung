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
        Schema::table('total_tagihan', function (Blueprint $table) {
            $table->unsignedBigInteger('pencatatan_id')->after('id')->required();
            $table->foreign('pencatatan_id')->references('id')->on('pencatatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('total_tagihan', function (Blueprint $table) {
            $table->dropForeign(['pencatatan_id']);
            $table->dropColumn('pencatatan_id');
        });
    }
};