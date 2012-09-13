<?php
header('Content-type: application/json');

$response = array();
$response['no'] = isset($_GET['no'])? $_GET['no']: 0;
echo json_encode($response);
?>