<?php
$title = "Khnzz store"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot strap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- custom style sheet -->
    <link rel="stylesheet" href="style.css">
    <title>
        <?php echo $title ?>
    </title>
</head>

<body>
    <!-- Header -->
    <?php include "../module/topbar.php";
    include "../module/navbar.php";
    ?>
    <!-- cards -->

    <div class="container fluid my-3">
        <div class="row">



            <div class="col-10">
                <?php include "../module/card.php" ?>
            </div>
            <!-- cards -->
            <div class="col-2"></div>


        </div>
    </div>



    <!-- slider -->

    <!-- footer -->
    <?php include "../module/footer.php" ?>

    <!-- bootstrap js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>