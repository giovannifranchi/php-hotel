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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>    
    <table class="table">
        <thead>
            <tr>
                <?php foreach($hotels[0] as $key=> $hotel) { ?>
                    <th><?php 
                        if(str_contains($key, '_')){
                            echo strtoupper(str_replace('_', ' ', $key));
                        }else{
                            echo strtoupper($key);
                        }
                        ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $key => $hotel) { ?>
                <tr>
                    <?php foreach($hotel as $property => $value){ ?>
                        <td> <?php 
                            if($property == 'distance_to_center'){
                                echo $value . ' KM';
                            }
                            else if($property == 'parking') {
                                if($value == true){
                                    echo 'YES';
                                }else {
                                    echo 'NO';
                                }
                            }
                            else {
                                echo $value;
                            }
                            ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>