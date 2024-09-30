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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name');
            $table->string('menu_name_eng');
            $table->string('menu_link');
            $table->unsignedBigInteger('menu_parent')->nullable(true);
            $table->string('menu_icon')->nullable(true);
            $table->string('menu_permission');
            $table->smallInteger('menu_index');
            $table->string('author_status',2)->default('U');
            $table->string('maker_id')->default('admin');
            $table->string('checker_id')->default('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};