<?php

require_once __DIR__. "/../config/bootstrap.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['number']) &&
        in_array($_POST['type'], ['normal', 'VIP', 'woman', 'fire'])) {
        $_POST['occupied'] = ($_POST['occupied'] ?? null) === 'on' ? 1 : 0;

        $park = new \Model\ParkPlace();
        $park->create($_POST);
        header('location: index.php');
    }
}

?>

<form method="post">
    <select name="type">
        <option value="normal">Normal</option>
        <option value="VIP">VIP</option>
        <option value="woman">Woman</option>
        <option value="fire">Fire fighters</option>
    </select>
    <input type="text" name="number" required/>
    <input type="checkbox" name="occupied">
    <button>Submit</button>
</form>
