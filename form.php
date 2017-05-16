<?php

$destinations = $_POST;
$new_array = [];

function dest_array() {
    foreach ($destinations as $destination) {
        $destination -> $new_array[0],
        $destination => $new_array[1],
        $destination => $new_array[2];
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" id="" name="placeId" value="">
        Country: <input type="text" name="country"><br>
        City: <input type="text" name="city"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>