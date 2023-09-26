<?php
include './data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Hotel</title>
    <!-- AUTHOR -->
    <meta name="author" content="Samuele Benato" />
    <!-- DESCRIPTION -->
    <meta name="description" content="Stampare tutti i nostri hotel con tutti i dati disponibili" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
    <!-- CSS LINK
    <link rel="stylesheet" href="./css/style.css" /> -->
    <!-- VUE 3
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
    <!-- AXIOS
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <!-- MY JS
    <script type="text/javascript" src="./js/main.js" defer></script> -->
</head>

<body>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance To Center</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($hotels as $hotel) { ?>
                <td scope="col">
                    <?= $hotel['description']; ?>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <?= $hotel['parking']; ?>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <?= $hotel['vote']; ?>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <?= $hotel['distance_to_center']; ?>
                </td>
                <?php }
                ; ?>
            </tr>
        </tbody>
    </table>
</body>

</html>