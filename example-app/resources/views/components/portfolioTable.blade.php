<?php


use App\Models\projects;

foreach (projects::all() as $project) {
    echo <<<html
            <tr>
            <td>$project->name</td>
            <td>$project->link_to_demo</td>
            <td>$project->link_to_code</td>
            <td></td>
        </tr> <!--ряд с ячейками тела таблицы-->
html;
}
