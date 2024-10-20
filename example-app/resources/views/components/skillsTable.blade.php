<?php

use App\Models\skills;
use Illuminate\Support\Facades\DB;


foreach (skills::all() as $skill) {
    $projName = DB::table('projects')->where('id', '=', $skill->where_used_id)->get('name');
    if (!empty($projName[0])) {
        $n = $projName[0]->name;
    } else {
        $n = 'null';
    }
    $skillLevelId = "class = '" . chooseIdForSkillLevel($skill->level_id) . "'";
    echo <<<html
            <tr>
                <td>$skill->name</td>
                <td $skillLevelId >$skill->level_id</td>
                <td>$n</td>
            </tr> <!--ряд с ячейками тела таблицы-->
    html;
}

// TODO вынести этот метод в отдельный фаил чтоб потом вызывать тут
function chooseIdForSkillLevel($number)
{
    switch ($number) {
        case 1:
            return 'one';
        case 2:
            return 'two';
        case 3:
            return 'three';
        case 4:
            return 'four';
        case 5:
            return 'five';
    }
}