<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update user role dari 'pembeli' menjadi 'user'
        DB::table('users')
            ->where('role', 'pembeli')
            ->update(['role' => 'user']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Kembalikan role menjadi 'pembeli'
        DB::table('users')
            ->where('role', 'user')
            ->update(['role' => 'pembeli']);
    }
};