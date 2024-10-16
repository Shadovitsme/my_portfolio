<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\skills;


class MainDataBaseAction extends Controller
{
    public function addSkill(Request $request)
    {
        $project_value = $_GET['project'];
        $id_proj = DB::table('projects')->where('name', '=', $project_value)->get('id');
        DB::table('skills')->insert([['name' => $_GET['skill'], 'level_id' => $_GET['level'], 'where_used_id' => $id_proj[0]->id],
        ]);
        foreach (skills::all() as $flight) { 
            echo $flight->name . ' ';
        }
    }
}
