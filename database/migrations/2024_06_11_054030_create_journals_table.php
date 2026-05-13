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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->constrained('admin_users')->onDelete('cascade');
            $table->string('label')->nullable();;
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->date('published_on')->nullable();
            $table->string('image')->nullable();
            $table->string('document')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('sort_order')->default(100);
            $table->string('tags')->nullable();
            $table->text('seo_tags')->nullable();
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE journals AUTO_INCREMENT = 1105056');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
};
