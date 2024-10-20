<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\skills;


class MainDataBaseAction extends Controller
{
    public function addSkill(Request $request)
    {
        $project_value = $_GET['project'];
        $id_proj = DB::table('projects')->where('name', '=', $project_value)->get('id');
        DB::table('skills')->insert([
            [
                'name' => $_GET['skill'],
                'level_id' => $_GET['level'],
                'where_used_id' => $id_proj[0]->id
            ],
        ]);
    }

    public function addProject()
    {
        //TODO сделать возможным загрузку фото не только из папки паблик
        $binaryImage = base64_encode(file_get_contents("images/plaseholder.webp"));
        if ($_GET['commercial'] === 'on') {
            $comStatus = 0;
        } else {
            $comStatus = 1;
        }
        DB::table('projects')->insert([
            [
                'icons' => $binaryImage,
                'name' => $_GET['projectName'],
                'link_to_demo' => $_GET['linkToDemo'],
                'link_to_code' => $_GET['linkToCode'],
                'commercial' => $comStatus
            ]
        ]);
    }

    public function addPhoto()
    {
        $binaryImage = base64_encode(file_get_contents("images/plaseholder.webp"));
        switch ($_GET['photoBase']) {
            case 'pets':
                $db = 'my_pets';
                $photoPlase = 'pets';
                break;
            case 'plants':
                $db = 'my_plants';
                $photoPlase = 'plants';
                break;
            case 'stitches':
                $db = 'my_stitches';
                $photoPlase = 'stitches';
                break;
            case 'drafts':
                $db = 'my_drafts';
                $photoPlase = 'drafts';
                break;
        }

        echo $db;
        DB::table($db)->insert([
            [
                $photoPlase => $binaryImage,
            ]
        ]);
    }

    public function skillSearch()
    {
        $newAjaxSkillString = <<<htmlhead
                <table class="skillTable">
            <tr>
                <td class="first_column">Навыки</td>
                <td class="second_column">Уровень</td>
                <td class="third_column">Где применялось</td>
            </tr>
        htmlhead;

        if (!empty($_GET['levels']) && !empty($_GET['skills'])) {
            $skills = DB::table('skills')
            ->whereIn('level_id', $_GET['levels'])
            ->whereIn('name', $_GET['skills'])
            ->get();
        } elseif (!empty($_GET['levels'])) {
            $skills = DB::table('skills')
            ->whereIn('level_id', $_GET['levels'])
            ->get();
        } elseif (!empty($_GET['skills'])) {
            $skills = DB::table('skills')
            ->whereIn('name', $_GET['skills'])
            ->get();
        } else {
            $skills = DB::table('skills')->get();
        }
        

        foreach ($skills as $skill) {
            $projName = DB::table('projects')->where('id', '=', $skill->where_used_id)->get('name');
            if (!empty($projName[0])) {
                $n = $projName[0]->name;
            } else {
                $n = 'null';
            }
            switch ($skill->level_id) {
                case 1:
                    $skillLevelId = 'one';
                    break;
                case 2:
                    $skillLevelId = 'two';
                    break;
                case 3:
                    $skillLevelId = 'three';
                    break;
                case 4:
                    $skillLevelId = 'four';
                    break;
                case 5:
                    $skillLevelId = 'five';
                    break;
            };
            $skillLevelId = "id = '" . $skillLevelId . "'";

            $newAjaxSkillString .= <<<html
                    <tr>
                        <td>$skill->name</td>
                        <td $skillLevelId>$skill->level_id</td>
                        <td>$n</td>
                    </tr> <!--ряд с ячейками тела таблицы-->
            html;
        }


        $newAjaxSkillString .= '</table>';

        return $newAjaxSkillString;
    }


}
