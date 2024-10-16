<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\skills;
use Illuminate\Support\Facades\DB;

foreach (projects::all() as $flight) {

    echo <<<HTML
<div>
  <img src="data:image;base64, $flight->icons" />
</div>
HTML;
}