<?php

use App\Models\skills;

foreach (skills::all() as $skill) {
    echo <<<html
            <button id = 'skill' value='0' class="button-not-selected">$skill->name</button>
    html;
}
