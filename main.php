<?php
include __DIR__ . "/src/partials/vars.php";

header("content-Type: application/json");

echo json_encode($discs_list); 

?>