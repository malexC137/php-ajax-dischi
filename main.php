<?php
include __DIR__ . "/src/partials/vars.php";

$filters = [
    "genre" => isset($_GET["fGenre"]) ? $_GET["fGenre"] : null,
    "author" => isset($_GET["fAuthor"]) ? $_GET["fAuthor"] : null,
    "title" => isset($_GET["fTitle"]) ? $_GET["fTitle"] : null,
];

function filteredGenre($discs_list, $filters) {
     $filteredGenres = [];

     foreach ($discs_list as $single_disc) {

        $is_valid = true;

        foreach ($filters as $filtered_key => $filtered_value) {

            if ($filtered_value) {
            
                $result = strstr(strtolower($single_disc[$filtered_key]), strtolower($filtered_value));

                if ($result == false) {
                    $is_valid = false;
                }
            }
        }
        if ($is_valid) {
            $filteredGenres[] = $single_disc;
        }
     }
     return $filteredGenres;
}

header("content-Type: application/json");


echo json_encode(filteredGenre($discs_list, $filters))

?>