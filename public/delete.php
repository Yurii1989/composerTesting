<?php

require_once __DIR__. "/../config/bootstrap.php";
$data = \Model\ParkPlace::readAll();
$array = [];

//var_dump($data[]->getId());
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $data = \Model\ParkPlace::readAll();
    $array = [];
    foreach ($data as $datum) {
        $array[] = $datum->getId();
    }
    if (in_array($_POST['id'], $array)) {
        $park = new \Model\ParkPlace();
        $park->delete($_POST['id']);
        header('location: index.php');
    } else {
        echo "<p style='color: red;'> wrong parking id";
    }
}
?>

<form method="post">
    <input type="text" class="form-control" name="id" required />
    <button class="btn btn-outline-dark">Delete</button>
</form>
