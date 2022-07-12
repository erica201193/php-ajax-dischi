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

    <div class="bg-darkgray">
        <div class="container">
            <div class="row row-cols-5 py-5">
                <?php
                foreach ($musicList as $song) {
                    $poster = $poster["poster"];
                    $title = $song["title"];
                    $author = $song["author"];
                    $year = $song["year"];
                    echo "<li> $title </li>";
                    echo "<li> $author </li>";
                    echo "<li> $year </li>";
                    echo "<li> $year </li>";
                }
                ?>
                <div class="col pt-5 pb-2 d-flex">
                    <div class="my-card card p-3 text-white text-center shadow">
                        <img src="<?php echo $poster ?>" alt="">
                        <h4 class="text-uppercase fw-bold py-4"> <?php echo $title ?> </h4>
                        <div> <?php echo $author ?> </div>
                        <div> <?php echo $year ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <ul id="musicContainer">
            <?php
            foreach ($musicList as $song) {
                $title = $song["title"];
                echo "<li> $title </li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>

<style lang="scss" scoped>
.bg-darkgray {
    background-color: #1E2D3B;
}
.bg-gray {
    background-color: #2D3A46;
}

.my-card {
    background-color: #2D3A46;
}

</style>