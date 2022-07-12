<?php
include "db/songs_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        include "the_header.php";
    ?>
    <div class="container">
        <ul id="musicContainer">
            <?php
                foreach($musicList as $song) {
                    $title = $song["title"];
                    echo "<li> $title </li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>