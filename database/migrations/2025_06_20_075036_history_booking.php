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
        Schema::create('history_booking', function (Blueprint $table) {
            $table -> id();
            $table -> foreign('user_id') -> contrained() -> onDelete('cascade');
            $table -> foreign('pitch_id') -> constrained() -> onDelete('cascade');
            $table -> date('ngay');
            $table -> string('gio');
            $table -> string('trang_thai') -> default('Trống');
            $table -> timestamps();
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
};
