<?php

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

foreach (projects::all() as $pro) {
    echo '<option>' .  $pro->name . '</option>';
}
