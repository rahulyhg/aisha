<?php
header('Content-type: application/json');
$host   = "localhost";$user = "root";
$pwd    = "desai1985";$db   = "astroisha";
$mysqli = new mysqli("localhost", "root", "desai1985", "astroisha");
/* check connection */
if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
}
else
{
    $search     = ucfirst($_GET['term']);
    $query	= "SELECT * FROM jv_location WHERE city LIKE '$search%' OR country LIKE '$search%' LIMIT 5";
    $result	= mysqli_query($mysqli, $query);
    while($row  = mysqli_fetch_array($result))
    {
        $city       = $row['city'].", ".$row['country'];
        $lat        = $row['latitude'];
        $lon        = $row['longitude'];
        
        $json[]     = array('label'=>$city, 'lat'=>$lat, 'lon'=>$lon);
    }

    $data       = json_encode($json);
    echo $data;
}
?>