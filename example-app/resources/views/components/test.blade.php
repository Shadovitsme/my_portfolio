<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Support\Facades\DB;

$id_proj = DB::table('projects')->where('name', '=', 'testname')->get('id');

var_dump($id_proj[0]->id);

foreach (skills::all() as $flight) {
    echo $flight->name . '<br />';
    echo $flight->where_used_id;
} 
