<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('my_stitches', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->binary('stitches');
            $table->timestamps();
        });
        Schema::create('my_pets', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->binary('pets');
            $table->timestamps();
        });
        Schema::create('my_plants', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->binary('plants');
            $table->timestamps();
        });
        Schema::create('skills_level', function (Blueprint $table) {
            $table->id()->primary()
                ->autoIncrement();
            $table->integer('level');
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->binary('icons');
            $table->string('name');
            $table->string('link_to_demo');
            $table->string('link_to_code');
            $table->boolean('commercial');
            $table->timestamps();
        });
        Schema::create('skills', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name');
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('skills_level');
            $table->foreignId('where_used_id')->nullable()->references('id')->on('projects');
            $table->timestamps();
        });
        Schema::create('my_drafts', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->binary('drafts');
            $table->timestamps();
        });
        DB::table('skills_level')->insert([
            ['level' => '1'],
            ['level' => '2'],
            ['level' => '3'],
            ['level' => '4'],
            ['level' => '5'],
        ]);
        DB::table('skills')->insert([
            ['name' => 'PHP', 'level_id' => '3'],
            ['name' => 'Docker', 'level_id' => '3'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_stitches');
        Schema::dropIfExists('my_pets');
        Schema::dropIfExists('my_plants');
        Schema::dropIfExists('skills_level');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('projects');
    }
};
