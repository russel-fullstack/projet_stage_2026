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
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->after('role');
            $table->text('google_token')->nullable()->after('google_id');
            $table->text('google_refresh_token')->nullable()->after('google_token');
            $table->boolean('has_custom_password')->default(false)->after('password');
            $table->string('github_id')->nullable()->after('password');
            $table->text('github_token')->nullable()->after('github_id');
            $table->text('github_refresh_token')->nullable()->after('github_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['google_id', 'google_token', 'google_refresh_token', 'has_custom_password', 'github_id', 'github_token', 'github_refresh_token']);
        });
    }
};
