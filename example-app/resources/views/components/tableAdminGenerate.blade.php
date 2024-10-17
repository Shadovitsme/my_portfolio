<?php

use App\Models\skills;

echo '<table>';
foreach (skills::all() as $skill) {
    echo <<<html
    <tr>
    <td>$skill->id</td>
        <td>$skill->name</td>
            <td>$skill->level_id</td>
                <td>$skill->where_used_id</td>
    </tr>
    html;
}
echo '</table>';
