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
        Schema::table('history_booking', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->unsignedBigInteger('san_id')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history_booking', function (Blueprint $table) {
            $table->dropColumn(['user_id', 'san_id']);
        });
    }
};
