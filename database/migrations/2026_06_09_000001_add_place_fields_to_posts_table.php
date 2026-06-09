<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user')->after('password');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->string('category')->default('hot_spot')->after('body');
            $table->string('image_path')->nullable()->after('category');
            $table->longText('map_embed_url')->nullable()->after('image_path');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['category', 'image_path', 'map_embed_url']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
