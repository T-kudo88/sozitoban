<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('number')->nullable();  // 社員番号
            $table->string('name')->nullable();    // 社員名
            $table->string('address')->nullable(); // メールアドレス
            $table->string('position')->nullable(); // 役職
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn(['number', 'name', 'address', 'position']);
        });
    }
};
