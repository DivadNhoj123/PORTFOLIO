<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('status')->after('lastname');
            $table->string('country')->after('address');
            $table->integer('zipcode')->after('country');
            $table->string('phone')->after('zipcode');
            $table->string('email')->after('phone');
            $table->string('description', 500)->after('email');
            $table->string('img')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            Schema::dropColumnIfExists('abouts');
        });
    }
};
