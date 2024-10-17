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
    //TODO сделать заполнение айдишкников уровней чтобы цветное было
    echo <<<html
            <tr>
                <td>$skill->name</td>
                <td>$skill->level_id</td>
                <td>$n</td>
            </tr> <!--ряд с ячейками тела таблицы-->
    html;
}
