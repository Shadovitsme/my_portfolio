<?php


use App\Models\projects;

foreach (projects::all() as $project) {
    echo <<<html
            <tr>
            <td><img class="portfolioIcon" src="data:image;base64, $project->icons"></td>
            <td>$project->link_to_demo</td>
            <td>$project->link_to_code</td>
            <td></td>
        </tr> <!--ряд с ячейками тела таблицы-->
html;
}
