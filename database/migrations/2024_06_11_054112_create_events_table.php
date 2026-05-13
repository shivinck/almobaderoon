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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->constrained('admin_users')->onDelete('cascade');
            $table->string('category')->nullable();
            $table->string('label')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->date('from_date');
            $table->time('time')->nullable();
            $table->date('end_date')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('content')->nullable();
            $table->string('joining_url')->nullable();
            $table->boolean('gallery_enabled')->default(false);
            $table->unsignedInteger('sort_order')->default(100);
            $table->text('seo_tags')->nullable();
            $table->string('tags')->nullable();
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE events AUTO_INCREMENT = 1705056');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
