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

    // public function returnDbShow()
    // {
    //     echo '<table>';
    //     switch ($_GET['db']) {
    //     }
    //     echo '</table>';
    // }

    // private function showSkils() {}

}
