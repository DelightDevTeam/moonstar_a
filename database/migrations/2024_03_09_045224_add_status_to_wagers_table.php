<?php

use App\Enums\WagerStatus;
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
        Schema::table('wagers', function (Blueprint $table) {
            $table->string('status')->default(WagerStatus::Ongoing->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wagers', function (Blueprint $table) {
            //
        });
    }
};
