<?php
header('Content-type: application/json');
$host   = "localhost";$user = "astroxou_admin";
$pwd    = "*Jrp;F.=OKzG";$db   = "astroxou_jvidya";
$mysqli = new mysqli("localhost", "astroxou_admin", "*Jrp;F.=OKzG", "astroxou_jvidya");
/* check connection */
if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
}
else
{
    $search     = ucfirst($_GET['term']);
    $query	= "SELECT * FROM jv_location WHERE city LIKE '$search%' OR state LIKE '$search%' LIMIT 5";
    $result	= mysqli_query($mysqli, $query);
    while($row  = mysqli_fetch_array($result))
    {
        $city       = $row['city'].", ".$row['state'];
        $lat        = $row['lat'];
        $lon        = $row['lon'];
        $tmz        = $row['diff_tz'];
        $json[]     = array('label'=>$city, 'lat'=>$lat, 'lon'=>$lon,'tmz'=>$tmz);
    }

    $data       = json_encode($json);
    echo $data;
}
?>
