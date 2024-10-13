<?php

namespace App\Http\Controllers;

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;

DB::insert('insert into MY_DRAFTS (DRAFTS) values (?)', ['1010110']);

$users = DB::select('select * from MY_DRAFTS');

foreach ($users as $user) {
    echo $user->DRAFTS . '<br />';
}
