<?php

    $hotels = [

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

    $keys = array_keys($hotels[0]);
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Hotel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <h1 class="text-center mb-5">
                Php Hotel
            </h1>
        </header>
        <main>
            <div class="container">
            <table class="table table-dark table-striped">
                    <thead>
                        <?php
                        foreach ($keys as $singleKey) {

                        ?>

                        <th>
                            <?php
                            echo ucfirst ($singleKey);
                            ?>
                        </th>
                        <?php
                        }
                        ?>
                    </thead>

                    <tbody>
                        <?php
                            foreach ($hotels as $hotel) {
                        ?>
                        <tr>
                            <?php
                                foreach ($hotel as $elem) {
                            ?>

                            <td>
                                <?php
                                    echo $elem;
                                ?>
                            </td>

                            <?php
                                }
                             ?>  
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>

