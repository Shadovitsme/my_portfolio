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
        DB::table('skills_level')->insert([
            ['level' => '1'],
            ['level' => '2'],
            ['level' => '3'],
            ['level' => '4'],
            ['level' => '5'],
        ]);

        $arProjects = array();
        $arProjects['OM_Soft'] = DB::table('projects')->insertGetId(
            ['name' => 'OM_Soft', 'link_to_demo' => 'Null', 'link_to_code' => 'null', 'commercial' => 1],
        );
        $arProjects['EveryDaynik!'] =
            DB::table('projects')->insertGetId(
                ['name' => 'EveryDaynik!', 'link_to_demo' => 'soon', 'link_to_code' => 'never', 'commercial' => 0]
            );

        DB::table('skills')->insert([
            ['name' => 'PHP', 'level_id' => '4', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'Docker', 'level_id' => '3', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'JQuery', 'level_id' => '4', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'SQL', 'level_id' => '4', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'VueJs', 'level_id' => '3', 'where_used_id' => $arProjects['EveryDaynik!']],
            ['name' => 'Tailwind', 'level_id' => '3', 'where_used_id' => $arProjects['EveryDaynik!']],
            ['name' => 'Swagger', 'level_id' => '3', 'where_used_id' => $arProjects['EveryDaynik!']],
            ['name' => 'Unix', 'level_id' => '5', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'Laravel', 'level_id' => '3', 'where_used_id' => $arProjects['EveryDaynik!']],
            ['name' => 'Rest API', 'level_id' => '2', 'where_used_id' => $arProjects['EveryDaynik!']],
            ['name' => 'Bitrix', 'level_id' => '2', 'where_used_id' => $arProjects['OM_Soft']],
            ['name' => 'bash', 'level_id' => '4', 'where_used_id' => NULL],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // TODO добавить удаление данных из таблички
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
