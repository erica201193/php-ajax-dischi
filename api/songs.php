<?php 

require "../db/songs_db.php";

header("Content-Type: application/json");

echo json_encode($musicList);
