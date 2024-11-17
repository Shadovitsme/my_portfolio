<?php


use App\Models\projects;

foreach (projects::all() as $project) {
    if (preg_match('/^https.*/', $project->link_to_demo)) {
        $link = "<a href = $project->link_to_demo>$project->link_to_demo</a>";
    } else {
        $link = $project->link_to_demo;
    }

    if (preg_match('/^https.*/', $project->link_to_code)) {
        $code = "<a href = $project->link_to_code>$project->link_to_code</a>";
    } else {
        $code = $project->link_to_code;
    }

    echo <<<html
            <tr>
            <td>$project->name</td>
            <td> $link </td>
            <td>$code</td>
            <td>$project->description</td>
        </tr> <!--ряд с ячейками тела таблицы-->
html;
}
