<?php
    $filterPark =  isset($_GET['parking']) ? $_GET['parking'] : '';
    $filterVote =  isset($_GET['vote']) ? intval($_GET['vote']) : 0;

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
    $newHotels = [];
    $flagParking = "";

    foreach ($hotels as $hotel) {
        if($filterPark =="true"){
            $flagParking = true;
        }
        elseif ($filterPark =="false"){
            $flagParking = false;
        }
        if (($hotel["parking"] == $flagParking || empty($filterPark)) && $filterVote <= $hotel["vote"]) {
            $newHotels[] = $hotel;
        }
    }

    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Hotel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1 class="text-center mb-5">
                Php Hotel
            </h1>
        </header>
        <main>

        <div class="container mb-3">
                <form action="" method="GET">
                    <div>
                        <label for="parking">Disponibilità parcheggio</label>
                        <select class="form-select" name="parking" id="parking">
                            <option value="" selected>Qualsiasi</option>
                            <option value="true">Disponibile</option>
                            <option value="false">Non disponibile</option>
                        </select>
                    </div>
                    <div>
                        <label class="mt-5" for="vote">Cerca per voto</label>
                        <input  type="number" name="vote" id="vote" max = "10" min = "0">
                    </div>
                    <button tyep="submit">
                        Cerca
                    </button>
                </form>
            </div>

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
                            foreach ($newHotels as $hotel) {
                        ?>
                        <tr>
                            <?php
                                foreach ($hotel as $key=>$elem) {
                            ?>

                            <td>
                                <?php
                                    if ($key == "parking" && $elem==true) {
                                    echo "yes";
                                    }
                                    elseif($key == "parking" && $elem==false){
                                    echo "no";
                                    }
                                    else{
                                    echo $elem;
                                    }
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

