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
            <div class="row row-cols-5 py-5 text-white">

                <?php foreach ($musicList as $song) { ?>

                <div class="col pt-5 pb-2 d-flex">
                    <div class="my-card card p-3 text-white text-center shadow">
                        <img src="<?php echo $song["poster"] ?>" alt="">
                        <h4 class="text-uppercase fw-bold py-4"> <?php echo $song["title"] ?> </h4>
                        <div> <?php echo $song["author"] ?> </div>
                        <div> <?php echo $song ["year"] ?> </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
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