<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Support\Facades\DB;

// DB::table('skills')->insert([
//     ['name' => 'plswork', 'level_id' => '3'],
// ]);

foreach (skills::all() as $flight) {
    echo $flight->name . ' ';
}
