<?php 

$data = file_get_contents("fixtures/jumbo.json");
$data = json_decode($data, true);

foreach($data as $row) {

    echo 
    '<div class="jumbotron-item" style=flex-direction:' . $row["direction"] . '>',
        '<div class="jumbotron-inner">',
            '<div class="jumbotron-Pane">',
                '<h1 class="jumbotron-title">' . $row["title"] .  '</h1>',
                '<h2 class="jumbotron-subtitle">' . $row["subTitle"] . '</h2>',
            '</div>',
            '<div class="jumbotron-Pane">',
                '<img class="jumbotron-image" src=' . $row["image"] . '>',
            '</div>
        </div>
    </div>';


}

?>


