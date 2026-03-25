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
        <p>
            <?php var_dump($hotels) ?> 
        </p>
        <form action="index.php" method="GET" class="mb-4">
            <div class="d-flex align-items-center">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="parking" id="parking">
                    <label class="form-check-label" for="parking"> With parking </label>
                </div>
                <div class="mb-3 ms-3">
                    <select name="rating" id="rating" class="form-select w-auto">
                        <option value="0">Rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary">Filter</button>
        </form>
        <?php
        $parkingFilter = $_GET['parking'] ?? 'off';
        $ratingFilter = $_GET['rating'] ?? 0;
        ?>

        <ul class="list-group mb-4">
            <?php
            foreach ($hotels as $hotel) {
                if ($parkingFilter == 'on') {
                    if ($hotel['parking'] == true && $hotel['vote'] >= $ratingFilter) {
                        echo '<li class="list-group-item">';
                        echo '<b>Name</b>: ' . $hotel['name'] . '<br>';
                        echo '<b>Description</b>: ' . $hotel['description'] . '<br>';
                        $parkingDesc = $hotel['parking'] ? 'available' : 'unavailable';
                        echo '<b>Parking</b>: ' . $parkingDesc . '<br>';
                        echo '<b>Vote</b>: ' . $hotel['vote'] . '&star;<br>';
                        echo '<b>Distance from center</b>: ' . $hotel['distance_to_center'] . ' km<br>';
                        echo '</li>';
                    }
                } else {
                    echo '<li class="list-group-item">';
                    echo '<b>Name</b>: ' . $hotel['name'] . '<br>';
                    echo '<b>Description</b>: ' . $hotel['description'] . '<br>';
                    $parkingDesc = $hotel['parking'] ? 'available' : 'unavailable';
                    echo '<b>Parking</b>: ' . $parkingDesc . '<br>';
                    echo '<b>Vote</b>: ' . $hotel['vote'] . '&star;<br>';
                    echo '<b>Distance from center</b>: ' . $hotel['distance_to_center'] . ' km<br>';
                    echo '</li>';
                }
            }
            ?>
        </ul>

    </div>

</body>

</html>