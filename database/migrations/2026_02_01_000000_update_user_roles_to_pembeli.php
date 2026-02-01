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
        // Update user role dari 'user' atau 'penjual' menjadi 'pembeli'
        DB::table('users')
            ->whereIn('role', ['user', 'penjual'])
            ->update(['role' => 'pembeli']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Kembalikan role menjadi 'user'
        DB::table('users')
            ->where('role', 'pembeli')
            ->update(['role' => 'user']);
    }
};