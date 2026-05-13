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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->constrained('admin_users')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type')->nullable();
            $table->string('duration')->nullable();
            $table->string('seats')->nullable();;
            $table->string('languages')->nullable();
            $table->string('image')->nullable();
            $table->string('document')->nullable();
            $table->longText('description')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedInteger('sort_order')->default(100);
            $table->string('tags')->nullable();
            $table->text('seo_tags')->nullable();
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE courses AUTO_INCREMENT = 1105018');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
