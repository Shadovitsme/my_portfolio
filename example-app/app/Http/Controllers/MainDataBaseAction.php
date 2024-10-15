<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\skills;


class MainDataBaseAction extends Controller
{
    public function addSkill(Request $request)
    {
        $skill = new skills;
        // var_dump($_GET['skill']);
        DB::table('skills')->insert([
            ['name' => $_GET['skill'], 'level_id' => $_GET['level']],
        ]);
        //TODO добавить поиск соответствия в бд проектов чтобы возварщать нужный айди.
        foreach (skills::all() as $flight) { 
            echo $flight->name . ' ';
        }
    }
}
