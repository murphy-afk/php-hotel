<?php $hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>PHP HOTELS</title>
</head>

<body>
    <div class="container">
        <h1 class="py-3">Hotels</h1>
        <form action="index.php" method="GET">
            <div class="form-check">
                <label class="form-check-label" for="parking">
                    With parking
                </label>
                <input class="form-check-input" type="checkbox" name='parking' id="parking">
            </div>
            <button>Filter</button>
        </form>
        <?php
        $parkingFilter = $_GET['parking'] ?? 'off';
        ?>

        <ul class="list-group">
            <?php
            foreach ($hotels as $hotel) {
                echo '<li class="list-group-item">';
                if ($parkingFilter == 'on') {
                    if ($hotel['parking'] == true) {
                        foreach ($hotel as $key => $value) {
                            echo $key . " : " . $value . '<br>';
                        }
                    }
                } else {
                    foreach ($hotel as $key => $value) {
                        echo $key . " : " . $value . '<br>';
                    }
                }
                echo '</li>';
            }
            ?>
        </ul>

    </div>

</body>

</html>