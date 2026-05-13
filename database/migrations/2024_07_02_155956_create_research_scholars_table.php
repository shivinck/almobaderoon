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
        Schema::create('research_scholars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->constrained('admin_users')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('faculty_id')->constrained('faculties')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('year')->nullable();
            $table->string('area')->nullable();
            $table->string('topic')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('sort_order')->default(100);
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE research_scholars AUTO_INCREMENT = 12050200');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_scholars');
    }
};
