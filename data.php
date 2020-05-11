<?php
header("Content-type: text/json");

$x = time() * 1000;
$y = rand(0, 5)/1000;
$z = 1.98877;
$q = 2.00091;


$ret = array($x, $y,$z,$q);
echo json_encode($ret);
?>
